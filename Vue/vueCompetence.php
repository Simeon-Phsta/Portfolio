<?php $titre = 'Compétences'; ?>

<?php ob_start(); ?>
<main class="container">
  <div class="row contenu">
    <section class="col-md-12 ">
      <p>A1.1.1 : Analyse du cahier des charges d’un service à produire:</p>
      <ul>
        <li> C1.1.1.1 Recenser et caractériser les contextes d’utilisation, les processus et les acteurs sur lesquels le service à produire aura un impact</li>
        <li> C1.1.1.2 Identifier les fonctionnalités attendues du service à produire</li>
        <li> C1.1.1.3 Préparer sa participation à une réunion</li>
        <li>Rédiger un compte-rendu d’entretien, de réunion</li>
      </ul>

      <p>A2.3.1 : Identification, qualification et évaluation d’un problème</p>
      <ul>
        <li>C2.3.1.1 Repérer une suite de dysfonctionnements récurrents d’un service</li>
        <li>C2.3.1.2 Identifier les causes de ce dysfonctionnement</li>
        <li>C2.3.1.3 Qualifier le problème (contexte et environnement)</li>
        <li>C2.3.1.4 Définir le degré d'urgence du problème</li>
        <li>C2.3.1.5 Évaluer les conséquences techniques du problème</li>
      </ul>

      <p>A2.3.2 : Proposition d’amélioration d’un service</p>
      <ul>
        <li>C2.3.2.1 Décrire les incidences d’un changement proposé sur le service</li>
        <li>C2.3.2.2 Évaluer le délai et le coût de réalisation du changement proposé</li>
        <li>C2.3.2.3 Recenser les risques techniques, humains, financiers et juridiques associés au changement proposé</li>
      </ul>

      <p>A4.1.1 : Proposition d’une solution applicative</p>
      <ul>
        <li>C4.1.1.1 Identifier les composants logiciels nécessaires à la conception de la solution</li>
        <li>C4.1.1.2 Estimer les éléments de coût et le délai de mise en oeuvre de la solution</li>
      </ul>
      <a href="public/comp/evo_site.pdf">Proposition d'évolution du site internet de Maleluka</a>

      <br><br><br><p>A1.4.1 : Participation à un projet</p>
      <ul>
        <li>C1.4.1.1 Établir son planning personnel en fonction des exigences et du déroulement du projet</li>
        <li>C1.4.1.2 Rendre compte de son activité</li>
      </ul>
      <a href="public/comp/planning_stage.pdf">Proposition d'évolution du site internet de Maleluka</a>
    </section>
  </div>
</main>


<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php';?>
