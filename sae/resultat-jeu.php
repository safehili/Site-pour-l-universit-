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

            <?php
            
            $c2=strtoupper($_POST['c2']);
            $c3=strtoupper($_POST['c3']) ; 
            $c4=strtoupper($_POST['c4']); 
            $c5=strtoupper($_POST['c5']) ; 
            $c7=strtoupper($_POST['c7']) ; 
            $c8=strtoupper($_POST['c8']) ; 
            $c10=strtoupper($_POST['c10']) ; 
            $c12=strtoupper($_POST['c12']) ; 
            $c13=strtoupper($_POST['c13']) ; 
            $c14=strtoupper($_POST['c14']) ; 
            $c15=strtoupper($_POST['c15']) ; 
            $c17=strtoupper($_POST['c17']) ; 
            $c18=strtoupper($_POST['c18']) ; 
            $c19=strtoupper($_POST['c19']) ; 
            $c20=strtoupper($_POST['c20']) ; 
            $c21=strtoupper($_POST['c21']) ; 
            $c22=strtoupper($_POST['c22']) ; 
            $c26=strtoupper($_POST['c26']) ; 
            $c27=strtoupper($_POST['c27']) ; 
            $c28=strtoupper($_POST['c28']) ; 
            $c29=strtoupper($_POST['c29']) ; 
            $c30=strtoupper($_POST['c30']) ; 
            $c31=strtoupper($_POST['c31']) ; 
            $c32=strtoupper($_POST['c32']) ; 
            $c33=strtoupper($_POST['c33']) ; 
            $c34=strtoupper($_POST['c34']) ; 
            $c36=strtoupper($_POST['c36']) ; 
            $c37=strtoupper($_POST['c37']) ; 
            $c39=strtoupper($_POST['c39']) ; 
            $c40=strtoupper($_POST['c40']) ; 
            $c41=strtoupper($_POST['c41']) ; 
            $c43=strtoupper($_POST['c43']) ; 
            $c44=strtoupper($_POST['c44']) ; 
            $c45=strtoupper($_POST['c45']) ; 
            $c46=strtoupper($_POST['c46']) ; 
            $case1= $_POST['case1'] ;
            $case2= $_POST['case2'] ;
            $case3= $_POST['case3'] ;
            $case4= $_POST['case4'] ;
            $case5= $_POST['case5'] ;
            $case6= $_POST['case6'] ;
            $case7= $_POST['case7'] ;
            $case8= $_POST['case8'] ;
            $case9= $_POST['case9'] ;

            ?>
            
            <?php
            if (
            $c2=="O" && 
            $c3=="U" &&
            $c4=="S" &&
            $c5=="I" &&
            $c7=="A" &&
            $c8=="P" &&
            $c10=="U" &&
            $c12=="I" &&
            $c13=="V" &&
            $c14=="E" &&
            $c15=="R" &&
            $c17=="I" &&
            $c18=="T" &&
            $c19=="C" &&
            $c20=="E" &&
            $c21=="R" &&
            $c22=="G" &&
            $c26=="U" &&
            $c27=="H" &&
            $c28=="A" &&
            $c29=="E" &&
            $c30=="E" &&
            $c31=="E" &&
            $c32=="B" &&
            $c33=="S" &&
            $c34=="C" &&
            $c36=="L" &&
            $c37=="A" &&
            $c39=="R" &&
            $c40=="E" &&
            $c41=="U" &&
            $c43=="E" &&
            $c44=="T" &&
            $c45=="E" &&
            $c46=="N"  
            ) 
            {
             $partie1=100;
            }
                else { 
                    /*var_dump($c2);
                    var_dump($c3);
                    var_dump($c4);
                    var_dump($c5);
                    var_dump($c7);
                    var_dump($c8);
                    var_dump($c10);
                    var_dump($c12);
                    var_dump($c13);
                    var_dump($c14);
                    var_dump($c15);
                    var_dump($c17);
                    var_dump($c18);
                    var_dump($c19);
                    var_dump($c20);
                    var_dump($c21);
                    var_dump($c22);
                    var_dump($c26);
                    var_dump($c27);
                    var_dump($c28);
                    var_dump($c29);
                    var_dump($c30);
                    var_dump($c31);
                    var_dump($c32);
                    var_dump($c33);
                    var_dump($c34);
                    var_dump($c36);
                    var_dump($c37);
                    var_dump($c39);
                    var_dump($c40);
                    var_dump($c41);
                    var_dump($c43);
                    var_dump($c44);
                    var_dump($c45);
                    var_dump($c46); */ 
                    $partie1=101; 
                }
            ?>

            <?php
               if (
               $case1==8 &&
               $case2==3 &&
               $case3==4 &&
               $case4==1 &&
               $case5==7 &&
               $case6==9 &&
               $case7==6 &&
               $case8==2 &&
               $case9==7 
               ) 
               { $partie2=200;
                ;
            }
                else { 
                $partie2=2001; 
                }

            ?>
<?php 
//var_dump($partie1);
//var_dump($partie2);
if ($partie1==100 && $partie2==200) {
        //require_once('./ressources/includes/bravo.php');
        ?>
<p class="bravo">BRAVO !</p>
<p style="font-size: 2rem; padding-left: 20px;">vous avez résolu le jeu!</p>
<a href="index.php"> <button class="aller-accueil " onclick="index.php" >Page d'accueil</button> </a> 
<a href="jeu.php"> <button class="aller-accueil " onclick= "jeu.php" >Rejouer</button></a>

        <?php
    }
    else {
        //require_once('./ressources/includes/echec.php');
        ?>
        
        <p class="echec">PAS DE CHANCE !</p>
        <p style="font-size: 2rem; padding-left: 20px;">vous n'avez pas résolu le jeu!</p>
        
            
        <a href="index.php"> <button class="aller-accueil " onclick="index.php" >Page d'accueil</button> </a>
        <a href="jeu.php"> <button class="aller-accueil " onclick= "jeu.php" >Rejouer</button></a>
        
        <?php
    }

    require_once('./ressources/includes/footer.php');
?>




            