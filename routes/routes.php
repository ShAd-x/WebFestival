<?php

Flight::route('/', function(){
    Flight::render("index.tpl",array());
});

Flight::route('GET /register', function(){
    Flight::render("register.tpl",array());
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
    Flight::render("login.tpl",array());
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

    $getIdFromData = Flight::get('pdo')->prepare("SELECT id FROM utilisateur WHERE nom = :nom AND prenom = :prenom");
    $getIdFromMail = Flight::get('pdo')->prepare("SELECT id FROM utilisateur WHERE mail = :mail");

    if(empty(trim($data->membre1nom)) || empty(trim($data->membre1prenom)) || empty(trim($data->membre1instrument))){
        $messages['membre1'] = "Membre 1 obligatoire";
    } else {
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre1nom,
            ':prenom'=>$data->membre1prenom,
            ':instruments'=> $data->membre1instrument
        ));
    }
    if(empty(trim($data->membre2nom)) || empty(trim($data->membre2prenom)) || empty(trim($data->membre2instrument))){
        $messages['membre2'] = "Membre 2 obligatoire";
    } else {
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre2nom,
            ':prenom'=>$data->membre2prenom,
            ':instruments'=> $data->membre2instrument
        ));
    }

    if(!(empty(trim($data->membre3nom)) || empty(trim($data->membre3prenom)) || empty(trim($data->membre3instrument)))){
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre3nom,
            ':prenom'=>$data->membre3prenom,
            ':instruments'=> $data->membre3instrument
        ));
    }
    if(!(empty(trim($data->membre4nom)) || empty(trim($data->membre4prenom)) || empty(trim($data->membre4instrument)))){
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre4nom,
            ':prenom'=>$data->membre4prenom,
            ':instruments'=> $data->membre4instrument
        ));
    }
    if(!(empty(trim($data->membre5nom)) || empty(trim($data->membre5prenom)) || empty(trim($data->membre5instrument)))){
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre5nom,
            ':prenom'=>$data->membre5prenom,
            ':instruments'=> $data->membre5instrument
        ));
    }
    if(!(empty(trim($data->membre6nom)) || empty(trim($data->membre6prenom)) || empty(trim($data->membre6instrument)))){
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre6nom,
            ':prenom'=>$data->membre6prenom,
            ':instruments'=> $data->membre6instrument
        ));
    }
    if(!(empty(trim($data->membre7nom)) || empty(trim($data->membre7prenom)) || empty(trim($data->membre7instrument)))){
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre7nom,
            ':prenom'=>$data->membre7prenom,
            ':instruments'=> $data->membre7instrument
        ));
    }
    if(!(empty(trim($data->membre8nom)) || empty(trim($data->membre8prenom)) || empty(trim($data->membre8instrument)))){
        $addToUtilisateur -> execute(array(
            ':role'=>"candidat",
            ':idgroupe' => $nbCandid,
            ':nom'=>$data->membre8nom,
            ':prenom'=>$data->membre8prenom,
            ':instruments'=> $data->membre8instrument
        ));
    }

    for ($i = 1; $i <= 3; $i ++){
        if(!empty($_FILES["mp3_$i"]["name"])) {
            if (pathinfo($_FILES["mp3_$i"]["name"], PATHINFO_EXTENSION) == "mp3") {
                $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["mp3_$i"]["name"];
                move_uploaded_file($_FILES["mp3_$i"]["tmp_name"], "./uploads/mp3/" . $nom_fichier);
                $nom_fichiers["mp3_$i"] = $nom_fichier;
            } else {
                $messages["mp3_$i"] = "Format incorrect (mp3)";
            }
        } else {
            $messages["mp3_$i"] = "Fichier manquant";
        }
    }
    if(!empty($_FILES["dossier"]["name"])) {
        if (pathinfo($_FILES["dossier"]["name"], PATHINFO_EXTENSION) == "pdf") {
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["dossier"]["name"];
            move_uploaded_file($_FILES["dossier"]["tmp_name"], "./uploads/DossiersPresse/" . $nom_fichier);
            $nom_fichiers["dossier"] = $nom_fichier;
        } else {
            $messages["dossier"] = "Format incorrect (pdf)";
        }
    }

    for ($i = 1; $i <= 2; $i ++){
        if(!empty($_FILES["pic_$i"]["name"])) {
            if (in_array(pathinfo($_FILES["pic_$i"]["name"], PATHINFO_EXTENSION), array("png", "jpg", "jpeg"))) {
                $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["pic_$i"]["name"];
                move_uploaded_file($_FILES["pic_$i"]["tmp_name"], "./uploads/Photos/" . $nom_fichier);
                $nom_fichiers["pic_$i"] = $nom_fichier;
            } else {
                $messages["pic_$i"] = "Format incorrect (jpg ou png)";
            }
        } else {
            $messages["pic_$i"] = "Fichier manquant";
        }
    }

    if(!empty($_FILES["tech_file"]["name"])) {
        if (pathinfo($_FILES["tech_file"]["name"], PATHINFO_EXTENSION) == "pdf") {
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["tech_file"]["name"];
            move_uploaded_file($_FILES["tech_file"]["tmp_name"], "./uploads/FicheTechnique/" . $nom_fichier);
            $nom_fichiers["tech_file"] = $nom_fichier;
        } else {
            $messages["tech_file"] = "Format incorrect (pdf)";
        }
    } else {
        $messages["tech_file"] = "Fichier manquant";
    }

    if(!empty($_FILES["sacem_file"]["name"])) {
        if (pathinfo($_FILES["sacem_file"]["name"], PATHINFO_EXTENSION) == "pdf"){
            $nom_fichier = bin2hex(random_bytes(18)) . "-" . $_FILES["sacem_file"]["name"];
            move_uploaded_file($_FILES["sacem_file"]["tmp_name"] , "./uploads/SACEM/" . $nom_fichier);
            $nom_fichiers["sacem_file"] = $nom_fichier;
        }else{
            $messages["sacem_file"] = "Format incorrect (pdf)";
        }
    } else {
        $messages["sacem_file"] = "Fichier manquant";
    }

    $info = new SplFileInfo('foo.txt');
    var_dump($info->getExtension());
    // Il faut récupérer au lieu du foo.txt le fichier du candidat

    // S'il n'y a aucun message d'erreur
    if(count($messages) <= 0){
        //ID NE MARCHE PAS. + RECUP ID MEMBRE > 2
        $id1 = $getIdFromData -> execute(array(
            ':nom' => $data->membre1nom,
            ':prenom' => $data->membre1prenom
        ));
        $id2 = $getIdFromData -> execute(array(
            ':nom' => $data->membre2nom,
            ':prenom' => $data->membre2prenom
        ));
        $idRepresentant = $getIdFromMail -> execute(array(
            ':mail' => $_SESSION['user']
        ));

        $st = Flight::get('pdo')->prepare("INSERT INTO candidature VALUES(
                               :nom_grp,:id_dep,:type_scene, :id_representant, :style_musical,:annee_de_creation,
                               :presentation_du_texte,:experiences_sceniques,:url,:soundcloud_facult,:youtube_facult,
                               :id_membre1, :id_membre2, :id_membre3, :id_membre4, :id_membre5, :id_membre6, :id_membre7, :id_membre8,
                               :statut_associatif, :inscrit_sacem, :producteur, :id_fichier_mp3_1, :id_fichier_mp3_2, 
                               :id_fichier_mp3_3, :dossier_de_presse, :photo_grp1, :photo_grp2, :fiche_technique, :document_sacem)
                               ");

        $st->execute(array(
            ':nom_grp'=>$data->nomgr,
            ':id_dep'=> 0,
            ':type_scene'=>'',
            ':id_representant' => $idRepresentant,
            ':style_musical' => $data->style,
            ':annee_de_creation' => $data->annee_crea,
            ':presentation_du_texte' => $data->presentation,
            ':experiences_sceniques' => $data->exp,
            ':url' => $data->network,
            ':soundcloud_facult' => $data->soundcloud,
            ':youtube_facult' => $data->ytb,
            ':id_membre1' => $id1,
            ':id_membre2' => $id2,
            ':id_membre3' => 0,
            ':id_membre4' => 0,
            ':id_membre5' => 0,
            ':id_membre6' => 0,
            ':id_membre7' => 0,
            ':id_membre8' => 0,
            ':statut_associatif' => $_POST["stat_assoc"] ? 1 : 0,
            ':inscrit_sacem' => $_POST["sacem"] ? 1 : 0,
            ':producteur' => $_POST["producteur"] ? 1 : 0,
            ':id_fichier_mp3_1' => $nom_fichiers["mp3_1"],
            ':id_fichier_mp3_2' => $nom_fichiers["mp3_2"],
            ':id_fichier_mp3_3' => $nom_fichiers["mp3_3"],
            ':dossier_de_presse' => $nom_fichiers["dossier"],
            ':photo_grp1' => $nom_fichiers["pic_1"],
            ':photo_grp2' => $nom_fichiers["pic_2"],
            ':fiche_technique' => $nom_fichiers["tech_file"],
            ':document_sacem' => $nom_fichiers["sacem_file"],
        ));
        Flight::redirect('success');
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
?>