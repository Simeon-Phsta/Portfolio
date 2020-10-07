<?php $titre = 'Accueil' ; ?>

<?php ob_start(); ?>

<!-- début texte page accueil -->
<main class="container">
  <div class="row contenu">
    <section class="col-md-12 Nom">
      <p>
        Siméon Philippe Saint-Antoine
      </p>
    </section>

    <section class="col-md-12 Exp_pro">
      <p>
        Expériences professionnelles:
        <ul>
          <li>mai à juin 2019: travail intérimaire dans une base logisitque (manutention)</li>
          <li>une semaine en mai 2019: travail intérimaire au sein d'une entreprise d'entretien de hottes industrielles</li>
          <li>2017/2018: Service Civique auprès d'APF France Handicap (réalisation de projets de sorties ou activités pour les adhérants de l'association)</li>
        </ul>
      </p>
    </section>

    <section class="col-md-12 Formation">
      <p>
        Formation:
        <ul>
          <li>2019/2021: BTS Serices Informatiques aux Organisations : en cours</li>
        </ul>
      </p>
    </section>

    <section class="col-md-12 MOOC">
      <p>
        MOOC:
        <ul>
          <li>Innover et entreprendre dans un monde numérique</li>
          <li>Cours en language HTML et les fiches de styles CSS</li>
          <li>"Concevez votre site web avec PHP et MYSQL"</li>
          <li>"Programmez en orienté objet en PHP"</li>
        </ul>
      </p>
    </section>

    <section class="col-md-12 Diplome">
      <p>
        Diplômes:
        <ul>
          <li>2017: Baccalauréat Littéraire de spécialité théâtre</li>
          <li>2014: Brevet des Collèges</li>
        </ul>
      </p>
    </section>

    <section class="col-md-12 Exp_asso">
      <p>
        Expériences Associatives:
        <ul>
          <li>2017 et 2019: APF France Handicap: aides ponctuelles</li>
          <li>2015/2016: Maison Des Lycées d'Alain Fournier à Bourges: réalisation d'animations et membre du bureau</li>
        </ul>
      </p>
    </section>

    <section class="col-md-12 Langues">
      <p>
        Langues:
        <ul>
          <li>Français</li>
          <li>Anglais (B2)</li>
        </ul>
      </p>
    </section>

    <section class="col-md-12 sejour">
      <p>
        Séjours linguistiques:
        <ul>
          <li>10 au 28 août 2016: Torquay (Angleterre)</li>
          <li>05 juillet au 05 août 2014: Londres (Angleterre)</li>
        </ul>
      </p>
    </section>

  </div>
</main>
<!-- fin texte page d'accueil>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Vue/gabarit.php';?>
