<?php

require 'Modele/modele.php';


// Affiche la liste de tous les billets du blog
function accueil(){
    $nav = 'accueil';
    require 'Vue/vueAccueil.php';
}

function competence(){
  $nav = 'competence';
  require 'Vue/vueCompetence.php';

}

function siivim(){
  $nav = 'siivim';
  require 'Vue/vueSiivim.php';
}

//  Affiche une erreur
function erreur($msgErreur){
    require 'Vue/vueErreur.php';
}
