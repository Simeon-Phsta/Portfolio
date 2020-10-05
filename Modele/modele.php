<?php

//Effectue le connexion avec la BDD
//Instancie et renvoie l'objet PDO asocié
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8',
    'root', 'root' , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}


