<?php
$couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link rel="stylesheet" href="ressources/css/reset.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link ref="stylesheet" href="ressources/css/footer.css">

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
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
                <ul class="liste-article">
                    <li class="article">

                        <img src="ressources/images/media" alt="">
                        <article class="article-texte">
                        <p class="titre-paragraphe"> La Fouine</p>
                        <p class="article_description">La Fouine, de son vrai nom Laouni Mouhid , né le 25 décembre 1981 à Trappes, dans les Yvelines , est un rappeur franco-marocain . Il quitte l'école à 14 ans pour se consacrer à la musique. Bien plus tard, La Fouine crée la Banlieue Sale, son propre label.</p>
                        </article>
                    </li>
                    <li>
                        <section class="article">
                            <img src="ressources/images/alpha-wann-nekfeu-1" alt="">
                            <article class="article-texte">
                            <p class="titre-paragraphe">Nekfeu</p>
                            <p class="article_description">Nekfeu, de son vrai nom Ken Samaras, né le 3 avril 1990 à La Trinité, dans les Alpes-Maritimes, est un rappeur (auteur-interprète) et acteur français. Il est aussi, dans une moindre mesure, réalisateur et directeur de photographie. Membre du groupe S-Crew et 1995, il appartient au collectif L'Entourage et a également fait partie du collectif 5 Majeur. </p> 
                            </article>
                        </section>
                    </li>
                    <li>
                        <section class="article">
                            <img src="ressources/images/bekar" alt="">
                            <article class="article-texte">
                            <p class="titre-paragraphe">Bekar</p>
                            <p class="article_description">Bekar, de son vrai nom Benjamin Karchen, né le 9 janvier 1998 à Madrid, issu de Roubaix et vie maintenant à Lille, est un jeune rappeur faisant partit du collectif NorthFace Records, composé de deux autres rappeurs, Balao et Salek, et Lucci le beatmaker. </p>
                            </article>
                        </section>
                </ul>
                <a class="jpo-banniere" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">

                    <section class="textes">
                        <p class="txt-petit">Journée portes <br /> ouvertes</p>
                        <p class="txt-grand">
                            12/02/2022, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>

            </section>
                <div style="text-align:center; padding-top: 50px;">  
            <?php require_once('./ressources/includes/footer.php'); ?>
            </div>   
        </main>
        
    </section>
</body>

</html>