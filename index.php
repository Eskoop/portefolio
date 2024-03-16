<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Accueil</title>

  <!-- Lien bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

  <!-- Lien CSS -->
  <link rel="stylesheet" href="asset/style.css"/>
  <link rel="stylesheet" href="asset/reset.css">
</head>

<body>

  <?php require_once 'Nav/nav.php' ?>

  <main>

    <!-- Premiere section -->
    <section class="section-1">
      <h1>Bonjour, je suis Hassan AKHTAR</h1>
      <p>Je suis un developpeur web/web mobile full stack.</p>
      <p class="btn btn-primary py-2 px-5">Projet</p>
    </section>

    <!-- Deuxieme section -->
    <section class="text-center">
      <h2>A propos de moi</h2>
      <p>
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

          <p class="mx-5"><a href="Contact.php" class="btn btn-primary">CONTACT</a></p>
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
    <section>
      <h3 class="text-center">PROJETS</h3>
      <p class="text-center">Vous trouverez ici quelques-uns des projets personnels et clients que j'ai créés, chaque projet contenant sa propre étude de cas</p>
    </section>
  </main>

  <!-- Footer -->
  <footer class="text-center bg-warning">
    <div class="d-flex">
      <div class="col-6">
        <h4>AKHTAR HASSAN</h4>
        <p>Je suis un developpeur web/web mobile full stack.</p>
      </div>
      <div class="col-6">
        
      <!-- Partie social -->
        <h3>SOCIAL</h3>
        <p><a href="https://www.linkedin.com/in/hassan-akhtar-a58b75255/">Linkedin</a></p>
        <p><a href="https://github.com/Eskoop?tab=repositories">GITHUB</a></p>
      </div>
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>