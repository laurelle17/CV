<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class="imagecontent">
<div class="bacgroundimage" id="bacgroundimage">
    <div class="seachbar" id="seachbar">
        <img src="img/menu_50px.png" alt="menu_50px" class="imgprofil1" id="imgprofil1">
        <input class="textrecherche" id="textrecherche" type="text" placeholder="Besoin d'un chef de project ?">
        <img src="img/search_50px.png" alt="search_50px" class="imgprofil1" id="imgprofil1">
        <img src="img/vertical_line_24px.png" alt="vertical_line_24px" class="imgprofil1" id="imgprofil1">
        <img src="img/delete_50px.png" alt="delete_50px" class="imgprofil1" id="imgprofil1">
    </div>
    <div class="paersonalinformation" id="paersonalinformation">
        <img src="image/profil.jpg" alt="" class="profilimage">
        <div style="margin-left: 20px;">
            <div class="nom"> <b><?php echo $infoNom['nom'] ?> </b> </div>
            <div class="textany"><?php echo $infometier['metier'] ?></div>
        </div>
    </div>
</div>
</div>
</body>
</html>