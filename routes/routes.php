<?php

Flight::route('/', function(){
    if(isset($_SESSION['user'])) {
        $getCandid = Flight::get('pdo')->prepare("select * from candidature");
        $getCandid->execute();
        $candidature = array();
        while($in = $getCandid->fetch(PDO::FETCH_NUM)){
            $candidature[] = $in;
        }
        Flight::render("index.tpl",array("candidature" => $candidature));
    } else {
        Flight::render("index.tpl",array());
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
    $files = Flight::request()->files;
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
    $nbCandid = $checkCandid->rowCount() + 1;

    $addToUtilisateur = Flight::get('pdo')->prepare("INSERT INTO utilisateur VALUES(
                               id,:role,:idgroupe,mail,mdp,:nom,
                               :prenom,adresse,codepostal,tel,:instruments)
                               ");
    $getRespID = Flight::get('pdo')->prepare("SELECT id FROM utilisateur WHERE mail = :mail");
    $nbMembres = 0;
    if(empty(trim($data->membre1nom)) || empty(trim($data->membre1prenom)) || empty(trim($data->membre1instrument))){
        $messages['membre1'] = "Membre 1 obligatoire";
    } else {
        $nbMembres++;
    }
    if(empty(trim($data->membre2nom)) || empty(trim($data->membre2prenom)) || empty(trim($data->membre2instrument))){
        $messages['membre2'] = "Membre 2 obligatoire";
    } else {
        $nbMembres++;
    }

    if(!(empty(trim($data->membre3nom)) || empty(trim($data->membre3prenom)) || empty(trim($data->membre3instrument)))){
        $nbMembres++;
    }
    if(!(empty(trim($data->membre4nom)) || empty(trim($data->membre4prenom)) || empty(trim($data->membre4instrument)))){
        $nbMembres++;
    }
    if(!(empty(trim($data->membre5nom)) || empty(trim($data->membre5prenom)) || empty(trim($data->membre5instrument)))){
        $nbMembres++;
    }
    if(!(empty(trim($data->membre6nom)) || empty(trim($data->membre6prenom)) || empty(trim($data->membre6instrument)))){
        $nbMembres++;
    }
    if(!(empty(trim($data->membre7nom)) || empty(trim($data->membre7prenom)) || empty(trim($data->membre7instrument)))){
        $nbMembres++;
    }
    if(!(empty(trim($data->membre8nom)) || empty(trim($data->membre8prenom)) || empty(trim($data->membre8instrument)))){
        $nbMembres++;
    }

    $info = new SplFileInfo('foo.txt');
    var_dump($info->getExtension());
    // Il faut récupérer au lieu du foo.txt le fichier du candidat

    for ($i = 1; $i <= 3; $i++) {
        if (empty(trim($files->mp3_.$i))) { $messages["mp3_$i"] = "Fichier manquant";}
    }
    for ($i = 1; $i <= 2; $i++){
        if(empty(trim($files->pic_.$i))) {$messages["pic_$i"] = "Fichier manquant";}
    }

    /*if(empty(trim($files->tech_file))){
        $messages["tech_file"] = "Fichier manquant";
    }
    if(empty(trim($files->sacem_file))) {
        $messages["sacem_file"] = "Fichier manquant";
    }*/
    // S'il n'y a aucun message d'erreur
    if(count($messages) <= 0){
        /*for ($i = 1; $i <= 3; $i++){
            if (pathinfo($_FILES["mp3_$i"]['name'], PATHINFO_EXTENSION) == "mp3") {
                $nom_fichier = bin2hex(random_bytes(18)) . "-" . $files->mp3_.$i['name'];
                move_uploaded_file($_FILES["mp3_$i"]["tmp_name"], "./uploads/mp3/" . $nom_fichier);
                $nom_fichiers["mp3_$i"] = $nom_fichier;
            } else { $messages["mp3_$i"] = "Format incorrect (mp3)"; }
        }

        if (pathinfo($files->dossier, PATHINFO_EXTENSION) == "pdf") {
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $files->dossier;
            move_uploaded_file($_FILES["dossier"]["tmp_name"], "./uploads/DossiersPresse/" . $nom_fichier);
            $nom_fichiers["dossier"] = $nom_fichier;
        } else { $messages["dossier"] = "Format incorrect (pdf)"; }

        for ($i = 1; $i <= 2; $i++){
            if (in_array(pathinfo($files->pic_.$i, PATHINFO_EXTENSION), array("png", "jpg", "jpeg"))) {
                $nom_fichier = bin2hex(random_bytes(18)) . "-" . $files->pic_.$i;
                move_uploaded_file($_FILES["pic_$i"]["tmp_name"], "./uploads/Photos/" . $nom_fichier);
                $nom_fichiers["pic_$i"] = $nom_fichier;
            } else { $messages["pic_$i"] = "Format incorrect (jpg ou png)"; }
        }

        if (pathinfo($files->tech_file, PATHINFO_EXTENSION) == "pdf") {
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $files->tech_file;
            move_uploaded_file($_FILES["tech_file"]["tmp_name"], "./uploads/FicheTechnique/" . $nom_fichier);
            $nom_fichiers["tech_file"] = $nom_fichier;
        } else { $messages["tech_file"] = "Format incorrect (pdf)"; }

        if (pathinfo($files->sacem_file, PATHINFO_EXTENSION) == "pdf"){
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $files->sacem_file;
            move_uploaded_file($_FILES["sacem_file"]["tmp_name"] , "./uploads/SACEM/" . $nom_fichier);
            $nom_fichiers["sacem_file"] = $nom_fichier;
        } else { $messages["sacem_file"] = "Format incorrect (pdf)"; }*/

        if(count($messages) <= 0) {
            $st = Flight::get('pdo')->prepare("INSERT INTO candidature VALUES(
                               :nom_grp,:id_dep,:type_scene, :id_representant, :style_musical,:annee_de_creation,
                               :presentation_du_texte,:experiences_sceniques,:url,:soundcloud_facult,:youtube_facult,
                               :id_membre1, :id_membre2, :id_membre3, :id_membre4, :id_membre5, :id_membre6, :id_membre7, :id_membre8,
                               :statut_associatif, :inscrit_sacem, :producteur, id_fichier_mp3_1, id_fichier_mp3_2, 
                               id_fichier_mp3_3, dossier_de_presse, photo_grp1, photo_grp2, fiche_technique, document_sacem)
                               ");
            $st->execute(array(
                ':nom_grp' => $data->nomgr,
                ':id_dep' => $data->departement,
                ':type_scene' => $data->type,
                ':id_representant' => $getRespID->execute(array(':mail'=>$_SESSION['user'])),
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
                ':statut_associatif' => $_POST["stat_assoc"] ? 1 : 0,
                ':inscrit_sacem' => $_POST["sacem"] ? 1 : 0,
                ':producteur' => $_POST["producteur"] ? 1 : 0,
                /*':id_fichier_mp3_1' => $nom_fichiers["mp3_1"],
                ':id_fichier_mp3_2' => $nom_fichiers["mp3_2"],
                ':id_fichier_mp3_3' => $nom_fichiers["mp3_3"],
                ':dossier_de_presse' => $nom_fichiers["dossier"],
                ':photo_grp1' => $nom_fichiers["pic_1"],
                ':photo_grp2' => $nom_fichiers["pic_2"],
                ':fiche_technique' => $nom_fichiers["tech_file"],
                ':document_sacem' => $nom_fichiers["sacem_file"]*/
            ));
            $testDep = Flight::get('pdo')->prepare("select numero from département where numero = :recherche");
            $testDep->execute(array(':recherche' => $data->departement));
            if ($testDep->fetch(PDO::FETCH_NUM) == 0) {
                $ajoutDep = Flight::get('pdo')->prepare("INSERT INTO département VALUES(:numero, departement)");
                $ajoutDep->execute(array(':numero' => $data->departement));
            }
            /*
            for ($i = 0; $i < $nbMembres; $i++) {
                $addToUtilisateur->execute(array(
                    ':role' => "candidat",
                    ':idgroupe' => $nbCandid,
                    ':nom' => $data->membre.$i.nom,
                    ':prenom' => $data->membre.$i.prenom,
                    ':instruments' => $data->membre.$i.instrument
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
        Flight::render("candidature.tpl", array());
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

Flight::route('GET /candidature-@nom', function($nom){
    if(isset($_SESSION['user'])) { // Check si admin
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
?>