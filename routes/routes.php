<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /listecandidature', function(){
    if(isset($_SESSION['user']) && isset($_SESSION['admin'])) {
        $getCandid = Flight::get('pdo')->prepare("select * from candidature");
        $getCandid->execute();
        $candidature = array();
        while($in = $getCandid->fetch(PDO::FETCH_NUM)){
            $candidature[] = $in;
        }
        Flight::render("listecandid.tpl",array("candidature" => $candidature));
    } else {
        Flight::redirect('./');
    }
});

Flight::route('GET /listemembre', function(){
    if(isset($_SESSION['user']) && isset($_SESSION['admin'])) {
        $getMembers = Flight::get('pdo')->prepare("select * from utilisateur");
        $getMembers->execute();
        $membre = array();
        while($in = $getMembers->fetch(PDO::FETCH_NUM)){
            $membre[] = $in;
        }
        Flight::render("listemembre.tpl",array("membres" => $membre));
    } else {
        Flight::redirect('./');
    }
});

Flight::route('GET /register', function(){
    if(isset($_SESSION['user'])) {
        Flight::redirect('./');
    } else {
        Flight::render("register.tpl",array());
    }
});

Flight::route('POST /register', function(){
    $data = Flight::request() -> data;
    $messages = array();

    // Si aucun nom n'a été fourni
    if(empty(trim($data->nom))){
        $messages['nom'] = "Nom obligatoire";
    }

    if(empty(trim($data->prenom))){
        $messages['prenom'] = "Prénom obligatoire";
    }

    if(empty(trim($data->numero))){
        $messages['numero'] = "Numéro obligatoire";
    } else if(!is_numeric(trim($data->numero))){
        $messages['numero'] = "Numero erroné";
    }
    if(empty(trim($data->codepostal))){
        $messages['codepostal'] = "Code postal obligatoire";
    } else if(!is_numeric(trim($data->codepostal))){
        $messages['codepostal'] = "Code postal erroné";
    } else if(strlen($data->codepostal) < 5){
        $messages['codepostal'] = "Le code postal est trop court";
    }

    if(empty(trim($data->adresse))){
        $messages['adresse'] = "Adresse obligatoire";
    }

    // Si aucune adresse mail n'a été fourni
    if(empty(trim($data->mail))){
        $messages['mail'] = "Mail obligatoire";
    // Si l'adresse mail n'est pas correcte
    } else if(!filter_var($data->mail, FILTER_VALIDATE_EMAIL)){
        $messages['mail'] = "Mail non valide";
    // Si l'adresse mail existe déjà
    } else {
        $testDupli = Flight::get('pdo')->prepare("select mail from utilisateur where mail like :recherche");
        $testDupli->execute(array(':recherche' => "%$data->mail%"));
        if ($testDupli->fetch(PDO::FETCH_NUM) != 0) {
            $messages['mail']="Adresse email déjà existante";
        }
    }
    // Si aucun mot de passe n'a été fourni
    if(empty(trim($data->mdp))){
        $messages['mdp'] = "Mot de passe obligatoire";
    // Si le mot de passe est trop court
    } else if(strlen($data->mdp) < 8){
        $messages['mdp'] = "Le mot de passe est trop court";
    }

    // S'il n'y a aucun message d'erreur
    if(count($messages) <= 0){
        $st = Flight::get('pdo')->prepare("INSERT INTO utilisateur VALUES(
                               id,:role,idgroupe,:mail,:mdp,:nom,
                               :prenom,:adresse,:codepostal,:tel,:instruments)
                               ");
        $st -> execute(array(
            ':role'=>"candidat",
            ':mail'=>$data->mail,
            ':mdp'=>password_hash($data->mdp, PASSWORD_DEFAULT),
            ':nom'=>$data->nom,
            ':prenom'=>$data->prenom,
            ':adresse'=> $data->adresse,
            ':codepostal'=> $data->codepostal,
            ':tel'=> $data->numero,
            ':instruments'=> ''
        ));
        // Redirection sur la page de confirmation
        Flight::redirect('/success');
    // Sinon (donc au moins un message d'erreur)
    } else {
        Flight::render("register.tpl", array(
            'messages' => $messages,
            'valeurs' => $_POST
        ));
    }
});

Flight::route('GET /login', function(){
    if(isset($_SESSION['user'])) {
        Flight::redirect('./');
    } else {
        Flight::render("login.tpl",array());
    }
});

Flight::route('POST /login', function() {
    $data = Flight::request()->data;
    $messages = array();
    $test = Flight::get('pdo')->prepare("select * from utilisateur where mail = :recherche");

    // Si aucune adresse mail n'a été fourni
    if(empty(trim($data->mail))){
        $messages['mail'] = "Mail obligatoire";
    // Si l'adresse mail n'est pas correcte
    } else if(!filter_var($data->mail, FILTER_VALIDATE_EMAIL)){
        $messages['mail'] = "Mail non valide";
    // Si l'adresse mail existe déjà
    } else {
        $test->execute(array(':recherche' => "$data->mail"));
    }
    if ($test->rowCount() == 0) {
        $messages['mail'] = "L'adresse mail n'existe pas";
    } else {
        // Si aucun mot de passe n'a été fourni
        if (empty(trim($data->mdp))) {
            $messages['mdp'] = "Mot de passe obligatoire";
        } else {
            $user = $test->fetch();
            if (!password_verify($data->mdp, $user['mdp'])) {
                $messages['mdp'] = "Mot de passe incorrect";
            }
        }
    }

    // S'il n'y a aucun message d'erreur
    if(count($messages) <= 0){
        $_SESSION['user'] = $data->mail;
        $_SESSION['id'] = $user['id'];
        if($user['role'] == "responsable") {
            $_SESSION["admin"] = 1;
        }
        Flight::redirect('/');
    // Sinon (donc au moins un message d'erreur)
    } else {
        Flight::render("login.tpl", array(
            'messages' => $messages,
            'valeurs' => $_POST
        ));
    }
});

Flight::route('GET /logout', function(){
    session_destroy();
    Flight::redirect('/');
});

Flight::route('POST /candidature', function(){
    print_r($_POST);
    $data = Flight::request()->data;
    $files = Flight::request()->files['id'];
    $messages = array();

    if(empty(trim($data->nomgr))){
        $messages['nomgr'] = "Nom du groupe obligatoire";
    }
    if(empty(trim($data->style))){
        $messages['style'] = "Style musical du groupe obligatoire";
    }
    if(empty(trim($data->annee_crea))){ 
        $messages['annee_crea'] = "Année de création obligatoire";
    } else if(!is_numeric(trim($data->annee_crea))){
        $messages['annee_crea'] = "Année de création invalide";
    }
    if(empty(trim($data->presentation))){
        $messages['presentation'] = "Présentation du groupe obligatoire";
    } else if(strlen($data->presentation) < 20){
        $messages['presentation'] = "Veuillez nous en dire un peu plus svp";
    }
    if(empty(trim($data->exp))){
        $messages['exp'] = "Expérience scéniques du groupe obligatoire";
    } else if(strlen($data->exp) < 20){
        $messages['exp'] = "Veuillez nous en dire un peu plus svp";
    }
    if(empty(trim($data->network))){
        $messages['network'] = "Site ou page Facebook du groupe obligatoire";
    } else if(!filter_var($data->network, FILTER_VALIDATE_URL)){
        $messages['network'] = "Lien du groupe invalide";
    }
    if(!empty(trim($data->soundcloud)) && !filter_var($data->soundcloud, FILTER_VALIDATE_URL)){
        $messages['soundcloud'] = "Lien soundcloud invalide";
    }
    if(!empty(trim($data->ytb)) && !filter_var($data->ytb, FILTER_VALIDATE_URL)){
        $messages['ytb'] = "Lien youtube invalide";
    }

    $checkCandid = Flight::get('pdo')->prepare("select * from candidature");

    /*$addToUtilisateur = Flight::get('pdo')->prepare("INSERT INTO utilisateur VALUES(
                               id,:role,:idgroupe,mail,mdp,:nom,
                               :prenom,adresse,codepostal,tel,:instruments)
                               ");
    $nbMembres = 0;
    for ($i = 0; $i < 2; $i++) {
        if(empty(trim($data->membrenom.$i)) || empty(trim($data->membreprenom.$i)) || empty(trim($data->membreinstrument.$i))){
            $messages['membre'] = "Membre obligatoire";
        } else {
            $nbMembres++;
        }
    }
    for ($i = 2; $i < 8; $i++) {
        if (!(empty(trim($data->membrenom . $i)) || empty(trim($data->membreprenom . $i)) || empty(trim($data->membreinstrument . $i)))) {
            $nbMembres++;
        }
    }*/

    if (empty(trim($data->mp3_1))) { $messages["mp3_1"] = "Fichier manquant";}
    if (empty(trim($data->mp3_2))) { $messages["mp3_2"] = "Fichier manquant";}
    if (empty(trim($data->mp3_3))) { $messages["mp3_3"] = "Fichier manquant";}

    if(empty(trim($data->pic_1))) {$messages["pic_1"] = "Fichier manquant";}
    if(empty(trim($data->pic_2))) {$messages["pic_2"] = "Fichier manquant";}

    if(empty(trim($data->tech_file))){$messages["tech_file"] = "Fichier manquant";}

    if(empty(trim($data->sacem_file))) {$messages["sacem_file"] = "Fichier manquant";}

    // S'il n'y a aucun message d'erreur
    if(count($messages) <= 0){
        if (pathinfo($data->mp3_1, PATHINFO_EXTENSION) == "mp3") {
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->mp3_1;
            move_uploaded_file($data->mp3_1, "./uploads/mp3/" . $nom_fichier);
            $nom_fichiers["mp3_1"] = $nom_fichier;
        } else { $messages["mp3_1"] = "Format incorrect (mp3)"; }

        if (pathinfo($data->mp3_2, PATHINFO_EXTENSION) == "mp3") {
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->mp3_2;
            move_uploaded_file($data->mp3_2, "./uploads/mp3/" . $nom_fichier);
            $nom_fichiers["mp3_2"] = $nom_fichier;
        } else { $messages["mp3_2"] = "Format incorrect (mp3)"; }

        if (pathinfo($data->mp3_3, PATHINFO_EXTENSION) == "mp3") {
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->mp3_3;
            move_uploaded_file($data->mp3_3, "./uploads/mp3/" . $nom_fichier);
            $nom_fichiers["mp3_3"] = $nom_fichier;
        } else { $messages["mp3_3"] = "Format incorrect (mp3)"; }


        if(!empty(trim($data->dossier))) {
            if (pathinfo($data->dossier, PATHINFO_EXTENSION) == "pdf") {
                $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->dossier;
                move_uploaded_file($data->dossier, "./uploads/DossiersPresse/" . $nom_fichier);
                $nom_fichiers["dossier"] = $nom_fichier;
            } else {$messages["dossier"] = "Format incorrect (pdf)";}
        }

        if (in_array(pathinfo($data->pic_1, PATHINFO_EXTENSION), array("png", "jpg", "jpeg"))) {
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->pic_1;
            move_uploaded_file($data->pic_1, "./uploads/Photos/" . $nom_fichier);
            $nom_fichiers["pic_1"] = $nom_fichier;
        } else { $messages["pic_1"] = "Format incorrect (png, jpg ou jpeg)"; }

        if (in_array(pathinfo($data->pic_2, PATHINFO_EXTENSION), array("png", "jpg", "jpeg"))) {
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->pic_2;
            move_uploaded_file($data->pic_2, "./uploads/Photos/" . $nom_fichier);
            $nom_fichiers["pic_2"] = $nom_fichier;
        } else { $messages["pic_2"] = "Format incorrect (jpg ou png)"; }

        if (pathinfo($data->tech_file, PATHINFO_EXTENSION) == "pdf") {
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->tech_file;
            move_uploaded_file($data->tech_file, "./uploads/FicheTechnique/" . $nom_fichier);
            $nom_fichiers["tech_file"] = $nom_fichier;
        } else { $messages["tech_file"] = "Format incorrect (pdf)"; }

        if (pathinfo($data->sacem_file, PATHINFO_EXTENSION) == "pdf"){
            $nom_fichier = bin2hex(random_bytes(5)) . "-" . $data->sacem_file;
            move_uploaded_file($data->sacem_file, "./uploads/SACEM/" . $nom_fichier);
            $nom_fichiers["sacem_file"] = $nom_fichier;
        } else { $messages["sacem_file"] = "Format incorrect (pdf)"; }

        if(count($messages) <= 0) {
            list($iddep, $namedep) = explode("-", $data->departement, 2);
            $st = Flight::get('pdo')->prepare("INSERT INTO candidature VALUES(
                               :nom_grp,:id_dep,:type_scene, :id_representant, :style_musical,:annee_de_creation,
                               :presentation_du_texte,:experiences_sceniques,:url,:soundcloud_facult,:youtube_facult,
                               :id_membre1, :id_membre2, :id_membre3, :id_membre4, :id_membre5, :id_membre6, :id_membre7, :id_membre8,
                               :statut_associatif, :inscrit_sacem, :producteur, :fichier_mp3_1, :fichier_mp3_2, 
                               :fichier_mp3_3, :dossier_de_presse, :photo_grp1, :photo_grp2, :fiche_technique, :document_sacem)
                               ");
            $st->execute(array(
                ':nom_grp' => $data->nomgr,
                ':id_dep' => $iddep,
                ':type_scene' => $data->type,
                ':id_representant' => $_SESSION['id'],
                ':style_musical' => $data->style,
                ':annee_de_creation' => $data->annee_crea,
                ':presentation_du_texte' => $data->presentation,
                ':experiences_sceniques' => $data->exp,
                ':url' => $data->network,
                ':soundcloud_facult' => $data->soundcloud,
                ':youtube_facult' => $data->ytb,
                ':id_membre1' => 0,
                ':id_membre2' => 0,
                ':id_membre3' => 0,
                ':id_membre4' => 0,
                ':id_membre5' => 0,
                ':id_membre6' => 0,
                ':id_membre7' => 0,
                ':id_membre8' => 0,
                ':statut_associatif' => $data->stat_assoc == "TRUE" ? 1 : 0,
                ':inscrit_sacem' => $data->sacem == "TRUE" ? 1 : 0,
                ':producteur' => $data->producteur == "TRUE" ? 1 : 0,
                ':fichier_mp3_1' => $nom_fichiers["mp3_1"],
                ':fichier_mp3_2' => $nom_fichiers["mp3_2"],
                ':fichier_mp3_3' => $nom_fichiers["mp3_3"],
                ':dossier_de_presse' => !empty(trim($data->dossier)) ? $nom_fichiers["dossier"] : "",
                ':photo_grp1' => $nom_fichiers["pic_1"],
                ':photo_grp2' => $nom_fichiers["pic_2"],
                ':fiche_technique' => $nom_fichiers["tech_file"],
                ':document_sacem' => $nom_fichiers["sacem_file"]
            ));
            $testDep = Flight::get('pdo')->prepare("select numero from département where numero = :recherche");
            $testDep->execute(array(':recherche' => $data->departement));
            if ($testDep->fetch(PDO::FETCH_NUM) == 0) {
                $ajoutDep = Flight::get('pdo')->prepare("INSERT INTO département VALUES(:numero, :departement)");
                $ajoutDep->execute(array(
                    ':numero' => $iddep,
                    ':departement' => $namedep
                    ));
            }
            /*for ($i = 0; $i < $nbMembres; $i++) {
                $addToUtilisateur->execute(array(
                    ':role' => "candidat",
                    ':idgroupe' => $_SESSION['id'],
                    ':nom' => $data->membrenom.$i,
                    ':prenom' => $data->membreprenom.$i,
                    ':instruments' => $data->membreinstrument.$i
                ));
            }*/
            Flight::redirect('candidaturesuccess');
        } else {
            Flight::render("candidature.tpl", array(
                'messages' => $messages,
                'valeurs' => $_POST
            ));
        }
    // Sinon (donc au moins un message d'erreur)
    } else {
        Flight::render("candidature.tpl", array(
            'messages' => $messages,
            'valeurs' => $_POST
        ));
    }
});

Flight::route('GET /candidature', function(){
    if(isset($_SESSION['user'])) {
        /*$test = Flight::get('pdo')->prepare("select * from candidature where id_representant like :recherche");
        $test->execute(array(':recherche' => $_SESSION['id']));
        if ($test->rowCount() != 0) {
            Flight::redirect('/alreadycandid');
        } else {*/
        Flight::render("candidature.tpl", array());
        //}
    } else {
        Flight::redirect('/register');
    }
});

Flight::route('GET /success', function(){
    Flight::render("success.tpl",array());
});

Flight::route('GET /candidaturesuccess', function(){
    Flight::render("candidaturesuccess.tpl",array());
});

Flight::route('GET /alreadycandid', function(){
    Flight::render("alreadycandid.tpl",array());
});

Flight::route('GET /candidature-@nom', function($nom){
    if(isset($_SESSION['user']) && isset($_SESSION['admin'])) { // Check si admin
        $getCandid = Flight::get('pdo')->prepare("select * from candidature where nom_grp = :nom");
        $getCandid->execute(array(':nom' => $nom));
        $candidature = array();
        while($in = $getCandid->fetch(PDO::FETCH_NUM)){
            $candidature[] = $in;
        }
        Flight::render("fichecandid.tpl",array("candidature"=>$candidature[0], "nom"=>$nom));
    } else {
        Flight::redirect("/login");
    }
});
Flight::route('GET /supcandid-@nom', function($nom){
    if(isset($_SESSION['user']) && isset($_SESSION['admin'])) { // Check si admin
        $deleteCandid = Flight::get('pdo')->prepare("DELETE FROM candidature WHERE nom_grp = :nom LIMIT 1");
        $deleteCandid->execute(array(':nom' => $nom));
        Flight::redirect("/listecandidature");
    } else {
        Flight::redirect("/login");
    }
});
?>