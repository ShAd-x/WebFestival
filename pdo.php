<?php
    $nom_bdd ='projet_festival';
    $adresse_bdd ='localhost';
    $port_bdd='3306';
    $user_bdd='root';
    $passwd_bdd='';

    $db = new PDO("mysql:host=$adresse_bdd;port=$port_bdd;dbname=$nom_bdd","$user_bdd","$passwd_bdd");
    $db->exec("SET NAMES UTF8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>