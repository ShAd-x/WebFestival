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
                               id,:role,:idgroupe,:mail,:mdp,:nom,
                               :prenom,:adresse,:codepostal,:tel,:instruments)
                               ");
        $st -> execute(array(
            ':role'=>"candidat",
            ':idgroupe'=>0,
            ':mail'=>$data->mail,
            ':mdp'=>password_hash($data->mdp, PASSWORD_DEFAULT),
            ':nom'=>$data->nom,
            ':prenom'=>$data->prenom,
            ':adresse'=> '',
            ':codepostal'=> -1,
            ':tel'=> -1,
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
    $messages = array();

    if(empty(trim($data->nomgr))){
        $messages['nomgr'] = "Nom du groupe obligatoire";
    }

    if(empty(trim($data->representantnom))){
        $messages['representantnom'] = "Nom du représentant obligatoire";
    }

    if(empty(trim($data->representantprenom))){
        $messages['representantprenom'] = "Prénom du représentant obligatoire";
    }

    if(empty(trim($data->annee_crea))){ 
        $messages['annee_crea'] = "Année de création obligatoire";
    }

    if(empty(trim($data->)))



    // S'il n'y a aucun message d'erreur
    if(count($messages) <= 0){
        $_SESSION['user'] = $data->mail;
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