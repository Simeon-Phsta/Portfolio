<?php
    session_start();
    require('Controleur/controleur.php');

    try{
        if (isset($_GET['action'])) {
            switch ($_GET['action']){


              case 'accueil':
              {
                accueil();
                break;
              }

              case 'competence':
              {
                competence();
                break;
              }

              case 'cv':
              {
                cv();
                break;
              }

            

            }

        }
        else {
            accueil(); // action par défaut
        }
    }
    catch (Exception $e) {
        erreur($e->getMessage());
    }
