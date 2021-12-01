<?php
    //regroupons les information en groupe de div!! à l'aide des tableau multi dimentionelle(des tableau dans des tableau dans des tableau 
    
    $paersonalinformation = [
        ['nom' => 'JUNIOR ESSONO'],
        ['metier' => 'Architecte logiciel / DevOps']
    ];
    
    $infoNom = $paersonalinformation[0];
    $infometier =  $paersonalinformation[1];

    $coordonatebirthday = [
        ['date' => 'Ne le 20 Octobre 1986'],
        ['origine' => 'Originaire du sud Cameroun'],
        ['situation' => 'Marié, 03 enfants - Sante RAS']
    ];
    $infodate = $coordonatebirthday[0];
    $infoorigine = $coordonatebirthday[1];
    $infosituation = $coordonatebirthday[2];

    $coordonateaddress = [
        ['lieu' => 'Resident à Ndogbong'],
        ['ville' => 'DOUALA - Cameroun'],
        ['map' => 'Map : 4.87544 6.85744']
    ];
    $infoville = $coordonateaddress[1];
    $infolieu = $coordonateaddress[0];
    $infomap = $coordonateaddress[2];

    $coordonatetelephone = [
        ['numero' => '(+237) 674 053 258 '],
        ['app' => 'Mobile, Telegram, Whatsapp']
    ];
    $infonumero = $coordonatetelephone[0];
    $infoapp = $coordonatetelephone[1];
    
    $coordonatmail = [
        ['email' => 'junioressono@gmail.com'],
        ['site' => 'Google, Twitter, Linkedin, Github']
    ];
    $infoemail = $coordonatmail[0];
    $infosite = $coordonatmail[1];

    $informationproject = [
        ['projet' => '+41 projets'],
        ['contact' => '+31 contrats'],
        ['experience' => '+12 ans d Exp']
    ];
    $infoproject = $informationproject[0];
    $infocontact = $informationproject[1];
    $infoexperience = $informationproject[2];

    $detailinformation = [
        ['detailA1' => 'Développement front-end'],
        ['detailA2' => 'HTML5, SASS, VueJS, Angular, JavaFX'],
        ['detailB1' => 'Developpement back-end'],
        ['detailB2' => 'NodeJS,Dru pal 8,Laravel,Kotlin,Java EE 7'],
        ['detailC1' => 'Developpement mobile '],
        ['detailC2' => 'Android Kotlin, IOS Swift, Cordova, Flutter'],
        ['detailD1' => 'UI / UX Design'],
        ['detailD2' => 'Photoshop CC, Adobe XD, Material Design'],
        ['detailE1' => 'Base de donnees & Big Data'],
        ['detailE2' => 'Oracle 11g, PostgreSQL, Hadoop, Talend DI'],
        ['detailF1' => 'Outils / Environnements'],
        ['detailF2' => ' Visual Paradigm, Git, Docker, K8s, Linux ']
    ];
    $detailA1 = $detailinformation[0];
    $detailA2 = $detailinformation[1];
    $detailB1 = $detailinformation[2];
    $detailB2 = $detailinformation[3];
    $detailC1 = $detailinformation[4];
    $detailC2 = $detailinformation[5];
    $detailD1 = $detailinformation[6];
    $detailD2 = $detailinformation[7];
    $detailE1 = $detailinformation[8];
    $detailE2 = $detailinformation[9];
    $detailF1 = $detailinformation[10];
    $detailF2 = $detailinformation[11];


    $titleProfessionalExp = [
        'Expérience Professionnelle'
    ];
    $titleProfessionalExp[0];

    $bigscrollOne = [
        ['listeA1' => 'Chef des projets technologiques -', 'listeA1A' => ' @Ets. M DE M'],
        ['listeA2' => 'De juillet 2019 à ce jour - http://mdem.cm'],
        ['listeA3' => 'Chef du projet annuaire-universel.cm de l ART'],
        ['listeB1' => 'Fondateur & DT  - ', 'listeB1A' => ' @Ets. M DE M'],
        ['listeB2' => 'De Octobre 2011 ace jour - http://istdi.net '],
        ['listeB3' => 'Realisation de plusieurs sites web et applications web et mobiles'],
        ['listeC1' => 'Enseignant  - ', 'listeC1A' => '@lnstitut Universitaire de la Cote'],
        ['listeC2' => 'De juillet 2019 à ce jour - http://mdem.cm'],
        ['listeC3' => 'Analyse. UML & MERISE"; "BD/SQL. ORACLE & MySQL'.'; "Dev. iOS &'],
        ['listeC4' => 'Android"; "Bl & Big Data Talend DI & Hadoop". 7 ere, 2eme et 4eme annee'],
        ['listeD1' => 'Developpeur en chef - ','listeD1A' => ' @Kayroual group'],
        ['listeD2' => 'De Mai 2013 a Juin 2015 - http://khayroual.com'],
        ['listeD3' => 'Realisation de multiples projets logiciels et web, lnfographie, .. '],
        ['listeE1' => 'Responsable commercial','listeE1A' => ' @BAO Sari'],
        ['listeE2' => 'De Decembre 2012 a Juin 2013 - http://bao-sarl.com'],
        ['listeE3' => 'Definition des strategies commerciales, Controle de qualite, suivi .']
    ];
    $listeA1 = $bigscrollOne[0];
    $listeA2 = $bigscrollOne[1];
    $listeA3 = $bigscrollOne[2];
    $listeB1 = $bigscrollOne[3];
    $listeB2 = $bigscrollOne[4];
    $listeB3 = $bigscrollOne[5];
    $listeC1 = $bigscrollOne[6];
    $listeC2 = $bigscrollOne[7];
    $listeC3 = $bigscrollOne[8];
    $listeC4 = $bigscrollOne[9];
    $listeD1 = $bigscrollOne[10];
    $listeD2 = $bigscrollOne[11];
    $listeD3 = $bigscrollOne[12];
    $listeE1 = $bigscrollOne[13];
    $listeE2 = $bigscrollOne[14];
    $listeE3 = $bigscrollOne[15];

    $academicTitle = [
        'Cursus Academique'
    ];
    $academicTitle[0];

    $bigscroll = [
        ['listeA1' => 'DIPET 2 Electro-technique - ', 'listeA1A' => ' @ENSET de DOUALA'],
        ['listeA2' => 'Août 2016 - '],
        ['listeA3' => 'Gestion de l éclairage d une maison (Android + Arduino)'],
        ['listeB1' => 'Oracle Certified Associate - ', 'listeB1A' => ' @Kentnix Sari '],
        ['listeB2' => 'Mars 2009 '],
        ['listeB3' => 'Oracle Database 17g Administration '],
        ['listeC1' => 'Oracle SQL Certified - ', 'listeC1A' => '@Kentnix Sari '],
        ['listeC2' => 'Decembre 2008'],
        ['listeC3' => 'QL 2, SQL 3, XML'],
        ['listeD1' => 'Licence professionnelle','listeD1A' => '@Douala Institute of Tech '],
        ['listeD2' => 'Octobre 2008 - '],
        ['listeD3' => 'Telecommunication & Reseaux '],
        ['listeE1' => 'DEC/ BTS - ','listeE1A' => '@CCNB Dieppe - Canada '],
        ['listeE2' => 'Septembre 2007'],
        ['listeE3' => 'Programmation Appliquee Pour Internet ']
    ];
    $listeA11 = $bigscroll[0];
    $listeA21 = $bigscroll[1];
    $listeA31 = $bigscroll[2];
    $listeB11 = $bigscroll[3];
    $listeB21 = $bigscroll[4];
    $listeB31 = $bigscroll[5];
    $listeC11 = $bigscroll[6];
    $listeC21 = $bigscroll[7];
    $listeC31 = $bigscroll[8];
    $listeD11 = $bigscroll[9];
    $listeD21 = $bigscroll[10];
    $listeD31 = $bigscroll[11];
    $listeE11 = $bigscroll[12];
    $listeE21 = $bigscroll[13];
    $listeE31 = $bigscroll[14]; 

    //determinons du nombre d'anne d'experience professionnelle 
    @$datedebut = date('2012-12');
    @$datefin = date('2013-6');
    @$responsablecommercial = $datefin - $datedebut ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>My_cv</title>
</head>
<body>
    <div class="contentAll" id="contentAll">
        <div class="leftcontent" id="leftcontent">
            <?php 
                require 'imagecontent.php';
            ?>
            <?php 
                require 'coordonate.php';
            ?>
            <br>  
            <?php 
                require 'detailinformation.php';
            ?>
        </div>
        <div class="rigthBigOne" id="rigthBigOne">
            <?php 
                require 'titleProfessionalExp.php';
            ?>
            <?php 
                require 'bigscrollOne.php';
            ?>
            <?php 
                require 'doubleDiv.php';
            ?>
            <?php 
                require 'academicTitle.php';
            ?>
             <?php 
                require 'bigscroll.php';
            ?>
            <!-- <div class="academicCursus" id="academicCursus"> -->
            <!-- </div> -->
        </div>
    </div> 
</body>
</html>