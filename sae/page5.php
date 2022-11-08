<?php

$couleur_bulle_classe = "vert";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>

    <link rel="stylesheet" href="ressources/css/reset.css">
    <link rel="stylesheet" href="ressources/css/global.css">
    <link rel="stylesheet" href="ressources/css/header.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
    <link rel="stylesheet" href="ressources/css/page5.css">

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
        <main class="conteneur-principal">

            <p class="titre">INSCRIPTION</p>
            <p class="sous-titre">Informations importantes :</p>
            <section>
                <p> Vous inscrivez pour la 1ère fois à CY Cergy Paris Université ? <span>Saisissez votre composé de 10 caractères :</span> </p>


                <section>
                    <p class="titre-gras">Identifiant Parcoursup :</p>
                    <p> P21 + numéro 7 chiffres du dossier Parcoursup</p>
                    <p>ou</p>
                    <p>P210 + numéro 6 chiffres du dossier Parcoursup </p>
                </section>

                <section>
                    <p class="titre-gras">Vous rencontrez des difficultés pour vous inscrire en ligne ?</p>
                    <p>Visionnez le tutoriel vidéo pour comprendre les étapes clés de votre inscription.</p>
                </section>

                <section>
                    <iframe class="video" width="727" height="409" src="https://www.youtube.com/embed/WKwur00x9hI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </section>

                <article class="flexbox">

                    <div class="gauche">
                        <section>
                            <p class="titre-gras"> Vous rencontrez des problèmes ?</p>
                            <p>Vous trouverez sûrement votre réponse dans <a href="https://www.pushaune.com" target="_blank">la Foire Aux Questions (FAQ)</a></p>
                        </section>

                        <section>
                            <p>Les agents de la scolarité restent à votre écoute pour vous aider par mail via le <a href="formulaire.php" target="_blank"> formulaire de contact</a></p>
                        </section>

                        <section>
                            <p>Il est fortement conseillé de rester en contact avec son établissement de formation et d’être attentif aux informations qui sont communiquées par mail, sur les sites internet des établissements et leurs réseaux sociaux officiels.</p>
                        </section>

                        <section>
                            <p class="titre-gras"> Bienvenue à CY Cergy Paris Université !</p>
                        </section>
                    </div>



                    <section class="bloc-droite">

                        <div class="droite">
                            <p class="titre-gras">Vous avez une question ?</p>

                            <a class="button-link" href="formulaire.php">Formulaire de contact</a>

                            <p class="titre-gras">Liens utiles:</p>
                            <a class="button-link" href="https://www.cyu.fr/inscriptions">Inscription en ligne</a>

                            <a class="button-link" href="https://www.cyu.fr/inscriptions">Réinscription en ligne</a>
                            <a class="button-link" href="https://www.cyu.fr/foire-aux-questions-faq">Foire Aux Questions (FAQ)</a>
                        </div>
                    </section>

                </article>
                <div style="text-align:center; padding-top: 50px;">
                <?php require_once('./ressources/includes/footer.php'); ?>
                </div>
</main>
</section>

</body>

</html>