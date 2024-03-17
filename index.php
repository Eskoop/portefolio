<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Accueil</title>

  <!-- Lien bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

  <!-- Lien CSS -->
  <link rel="stylesheet" href="asset/style.css?v=1" />
  <link rel="stylesheet" href="asset/reset.css">
</head>

<body>

  <?php require_once 'Nav/nav.php' ?>

  <main>

    <!-- Premiere section -->
    <section class="section-1">
      <div>
        <h1>Bonjour, je suis Hassan AKHTAR</h1>
        <p>Je suis un developpeur web/web mobile full stack.</p>
        <p class=""><a href="#project" class="btn btn-primary py-2 px-5">Projet</a></p>
      </div>
    </section>

    <!-- Deuxieme section -->
    <section class="section-2">
      <h2 id="A-propos">A propos de moi</h2>
      <p class="sect-2-p-1">
        Vous trouverez ici plus d'informations sur moi, ce que je fais et mes
        compétences actuelles principalement en termes de programmation et de
        technologie
      </p>
      <div class="d-lg-flex div-1">
        <div class="col-lg-6 mx-5">
          <h3 class="mx-5 py-4">Pour me mieux me connaitre</h3>
          <p class="mx-5">
            Je suis un Developpeur Web FullStack qui contruit des sites que ça
            soit en FrondEnd que en BackEnd. Découvez quelques-unes de mes
            réalisation dans la rubrique projets <br />
            J'aime aussi partager du contenu lié à ce que j'ai appris au
            files des ans dans le developpement Web afin qu'il puisse aider
            d'autres personnes de la communauté de développment. N'hésitez pas
            à vous connecter ou à me suivre sur mon <a href="https://www.linkedin.com/in/hassan-akhtar-a58b75255/">Linkedin</a> où
            je publie du contenu utile lié au développement et à la
            programmation Web <br />
            Je suis ouert aux opportunité d'emploi où je peux contribuer ,
            apprendre et grandir. Si vous avez une opportunité qui correspond
            à mes compétences et à mon experience, n'hésiter pas à me
            contacter.
          </p>

          <p class="mx-5"><a href="Contact.php" class="btn btn-primary btn-contact">CONTACT</a></p>
        </div>
        <div class="col-lg-6 mx-5">
          <h3 class="py-4">Mes compétences</h3>
          <div class="d-flex flex-wrap justify-content-center">
            <div class="competence">HTML</div>
            <div class="competence">CSS</div>
            <div class="competence">JavaScript</div>
            <div class="competence">PHP</div>
            <div class="competence">MySQL</div>
            <div class="competence">SYMFONY</div>
            <div class="competence">RESPONSIVE</div>
            <div class="competence">GITHUB</div>
            <div class="competence">SEO</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Troisieme section -->
    <section class="section-3">
      <h2 class="" id="project">PROJETS</h2>
      <p class="">Vous trouverez ici quelques-uns des projets personnels et clients que j'ai créés, chaque projet contenant sa propre étude de cas</p>
    </section>
  </main>

  <!-- Footer -->

  <?php require_once 'footer/footer.php' ; ?>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>