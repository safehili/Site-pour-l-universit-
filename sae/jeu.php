<?php
    $couleur_bulle_classe = "rouge";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeux de mots</title>

    <link rel="stylesheet" href="ressources/css/reset.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/sur_les_medias.css">
    <link rel="stylesheet" href="ressources/css/style.css">
    <link rel="stylesheet" href="ressources/css/jeux.css">
    
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
        <main >
            <h1 class="titre-page espace-titre-media">Jeux de mots</h1>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
            <p class="n-partie">Première partie : </p>
   <p class="consignes">Consignes :</p>
   <div style="padding-bottom: 40px;">
   <p class="details-consignes ">- Remplissez les blancs avec les blancs avec les mots appropriés pour former une phrase 
       cohérente dans la deuxième partie avec les mots que vous avez obtenus.</p>
   <p class="details-consignes ">- S'il y a une erreur, toute la première parrie sera considérée comme fausse.</p>
   </div>
            <form action="resultat-jeu.php" method="post">
            <div class="container">
                
  <div class="R"><input class="in" placeholder="1" disabled></div>
  <div class="U"><input class="in" placeholder="2" disabled></div>
  <div class="X"><input class="in" placeholder="3" disabled></div>
  <div class="F"><input class="in" placeholder="4" disabled></div>
  <div class="N"><input class="in" placeholder="5" disabled></div>
  <div class="Q"><input class="in" placeholder="6" disabled></div>
  <div class="A"><input class="in" placeholder="7" disabled></div>
  <div class="B"><input class="in" placeholder="8" disabled></div>
  <div class="S"><input class="in" placeholder="9" disabled></div>
  <div class="c1"><input class="inp" name="c1" id="c1" type="text" required maxlength="1" disabled placeholder="v"></div>
  <div class="c2"><input class="inp" name="c2" id="c2" type="text" required maxlength="1"></div>
  <div class="c3"><input class="inp" name="c3" id="c3" type="text" required maxlength="1"></div>
  <div class="c4"><input class="inp" name="c4" id="c4" type="text" required maxlength="1"></div>
  <div class="c5"><input class="inp" name="c5" id="c5" type="text" required maxlength="1"></div>
  <div class="c6"><input class="inp" name="c6" id="c6" type="text" required maxlength="1" disabled placeholder="r"></div>
  <div class="c7"><input class="inp" name="c7" id="c7" type="text" required maxlength="1"></div>
  <div class="c8"><input class="inp" name="c8" id="c8" type="text" required maxlength="1"></div>
  <div class="c9"><input class="inp" name="c9" id="c9" type="text" required maxlength="1" disabled placeholder="n"></div>
  <div class="c19"><input class="inp" name="c19" id="c19" type="text" required maxlength="1" ></div>
  <div class="c10"><input class="inp" name="c10" id="c10" type="text" required maxlength="1"></div>
  <div class="c11"><input class="inp" name="c11" id="c11" type="text" required maxlength="1" disabled placeholder="n"></div>
  <div class="c12"><input class="inp" name="c12" id="c12" type="text" required maxlength="1"></div>
  <div class="c13"><input class="inp" name="c13" id="c13" type="text" required maxlength="1"></div>
  <div class="c14"><input class="inp" name="c14" id="c14" type="text" required maxlength="1"></div>
  <div class="c15"><input class="inp" name="c15" id="c15" type="text" required maxlength="1"></div>
  <div class="c16"><input class="inp" name="c16" id="c16" type="text" required maxlength="1" disabled placeholder="s"></div>
  <div class="c17"><input class="inp" name="c17" id="c17" type="text" required maxlength="1"></div>
  <div class="c18"><input class="inp" name="c18" id="c18" type="text" required maxlength="1"></div>
  <div class="c20"><input class="inp" name="c20" id="c20" type="text" required maxlength="1"></div>
  <div class="c21"><input class="inp" name="c21" id="c21" type="text" required maxlength="1"></div>
  <div class="c22"><input class="inp" name="c22" id="c22" type="text" required maxlength="1"></div>
  <div class="c23"><input class="inp" name="c23" id="c23" type="text" required maxlength="1" disabled placeholder="y"></div>
  <div class="c24"></div>
  <div class="c25"><input class="inp" name="c25" id="c25" type="text" required maxlength="1" disabled placeholder="o"></div>
  <div class="c26"><input class="inp" name="c26" id="c26" type="text" required maxlength="1"></div>
  <div class="c27"><input class="inp" name="c27" id="c27" type="text" required maxlength="1"></div>
  <div class="c28"><input class="inp" name="c28" id="c28" type="text" required maxlength="1"></div>
  <div class="c29"><input class="inp" name="c29" id="c29" type="text" required maxlength="1"></div>
  <div class="c30"><input class="inp" name="c30" id="c30" type="text" required maxlength="1"></div>
  <div class="c32"><input class="inp" name="c32" id="c32" type="text" required maxlength="1"></div>
  <div class="c33"><input class="inp" name="c33" id="c33" type="text" required maxlength="1"></div>
  <div class="c34"><input class="inp" name="c34" id="c34" type="text" required maxlength="1"></div>
  <div class="c35"><input class="inp" name="c35" id="c35" type="text" required maxlength="1" disabled placeholder="o"></div>
  <div class="c36"><input class="inp" name="c36" id="c36" type="text" required maxlength="1"></div>
  <div class="c37"><input class="inp" name="c37" id="c37" type="text" required maxlength="1"></div>
  <div class="c38"><input class="inp" name="c38" id="c38" type="text" required maxlength="1" disabled placeholder="i"></div>
  <div class="c39"><input class="inp" name="c39" id="c39" type="text" required maxlength="1"></div>
  <div class="c40"><input class="inp" name="c40" id="c40" type="text" required maxlength="1"></div>
  <div class="c46"><input class="inp" name="c46" id="c46" type="text" required maxlength="1"></div>
  <div class="c41"><input class="inp" name="c41" id="c41" type="text" required maxlength="1"></div>
  <div class="c42"><input class="inp" name="c42" id="c42" type="text" required maxlength="1" disabled placeholder="n"></div>
  <div class="c43"><input class="inp" name="c43" id="c43" type="text" required maxlength="1"></div>
  <div class="c44"><input class="inp" name="c44" id="c44" type="text" required maxlength="1"></div>
  <div class="c45"><input class="inp" name="c45" id="c45" type="text" required maxlength="1"></div>
  <div class="c31"><input class="inp" name="c31" id="c31" type="text" required maxlength="1"></div>
</div>

<p class="n-partie">Deuxième partie :</p>
<p class="consignes">Consignes : </p>
<div style="padding-bottom: 15px;">
<p class="details-consignes ">- Ordonnez les mots en remplissant les blancs avec les chiffres correspondants.</p>
<p class="details-consignes ">- S'il y a une erreur, toute la deuxième parrie sera considérée comme fausse.</p>
</div>

<div  class="flex-deuxieme-partie">
<input class="in" type="text" required maxlength="1" id="case1"name="case1">
<input class="in" type="text" required maxlength="1" id="case2"name="case2">
<input class="in" type="text" required maxlength="1" id="case3"name="case3">
<input class="in" type="text" required maxlength="1" id="case4"name="case4">
<input class="in" type="text" required maxlength="1" id="case5"name="case5">
<input class="in" type="text" required maxlength="1" id="case6"name="case6">
<input class="in" type="text" required maxlength="1" id="case7"name="case7">
<input class="in" type="text" required maxlength="1" id="case8"name="case8">
<input class="in" type="text" required maxlength="1" id="case9"name="case9">
</div>
<div style="padding: 20px 0 0 600px;">
<input class="envoie-reponses" type="submit" value="Envoyer mes réponses">
</div>

<?php require_once('./ressources/includes/footer.php'); ?>



</form>
          
            </main>
            
            </section>
            
              
                
            </body>
            </html>