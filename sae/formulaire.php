<?php

$couleur_bulle_classe = "jaune";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTACT</title>

  <link rel="stylesheet" href="ressources/css/reset.css">
  <link rel="stylesheet" href="ressources/css/global.css">
  <link rel="stylesheet" href="ressources/css/header.css">
  <link rel="stylesheet" href="ressources/css/accueil.css">
  <link rel="stylesheet" href="ressources/css/style.css">

  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <section class="conteneur-1280">
    <?php require_once('./ressources/includes/header.php'); ?>

    <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
    <main class="conteneur-principal">

      <p class="sous-titre">Plus d'infos sur la formation ?</p>
      <p class="sous-titre">Contactez-nous !</p>

      <section class="position">
        <p> <span>La formation s'ouvre à tous les bacheliers,</span> pour rappel. Avoir des connaissances en programmation, design ou encore audiovisuel n'est pas obligatoire mais reste un bon atout, car il faut aimer la curiosité dans cette formation pluridisciplinaire. <span>Il est également possible de faire la formation après une reprise d'études ou une réorientation.</span></p>
        
        <h1 class="sous-titre2">Nous contacter en ligne</h1>

        <form method="POST" action="resultat-formulaire.php">
          <div class="cordonnes">
            <label class="label" for="Prénom">Prénom</label>
            <input required class="bloc"  type="text" name="Prénom" id="Prénom">

          </div>

          <div class="cordonnes">
            <label class="label" for="Nom">Nom de famille</label>
            <input required class="bloc" type="text" name="nom" id="Nom">

          </div>

          <div class="cordonnes">
            <label class ="label" for="Adresse-e-mail">Adresse e-mail  <span class="etu">(votre e-mail doit commencer par etu-)</span></label>
            <input required class="bloc" type="email" name="Adresse-e-mail" id="Adresse-e-mail">

          </div>

          <div class="cordonnes">
            <label class ="label" for="Message">Message</label>
            <textarea required class="blocmessage" name="message" id="message" cols="30" rows="10"></textarea>
           
          </div>



          <p class="jesuis">Je suis :</p>
          <div>
            <input required type="radio" id="Choice1" name="identité" >
            <label class="label-multichoix" for="Choice1">Je ne souhaite pas le préciser</label>

            <input required type="radio" id="Choice2" name="identité" >
            <label for="Choice2">Étudiant / Étudiante</label>

            <input required type="radio" id="Choice3" name="identité" >
            <label for="Choice3">Parent</label>

            <input required type="radio" id="Choice4" name="identité" >
            <label for="Choice4">Autre</label>
          </div>
          
          <input class="envoyer" type="submit" value="Envoyer">
          
        </form>



        <h1 class="sous-titre3">Nous contacter par courrier</h1>
        <a class="courriel" href="mailto:direction-heritages[at]ml.u-cergy.fr">direction-heritages[at]ml.u-cergy.fr</a>
        <div class="bas">
        
        <p>IUT de Cergy-Pontoise,</p>
        <P>Département Métiers du Multimédia et de l’Internet (MMI)</P>  
        <P>34 Bis Boulevard Henri Bergson </P>
        <P>95200 Sarcelles</P>
        </div>
      </section>


        <?php require_once('./ressources/includes/footer.php'); ?>

       
    </main>

  </section>
  
</body>
</html>