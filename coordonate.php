<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="coordonate" id="coordonate">
        <div class="Buttonsent" id="Buttonsent">
            <center>
                <img src="image/icons8_sent.ico" alt="" class="sent">
            </center>
        </div> 
        <div class="birthday" id="birthday">
            <img src="image/birthday_cake_24px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infodate['date'] ?></div>
                <div class="textany"><?php echo $infoorigine['origine'] ?></div>
                <div class="textany"><?php echo $infosituation['situation'] ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="address" id="address">
            <img src="image/location_filled_50px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infolieu['lieu'] ?> </div>
                <div class="textany"><?php echo $infoville['ville'] ?></div>
                <div class="textany"><?php echo $infomap['map'] ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="telephone" id="telephone">
            <img src="image/phone_24px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infonumero['numero'] ?></div>
                <div class="textany"><?php echo $infoapp['app'] ?></div>
                <div class="bottomLine"></div>
            </div>
        </div>
        <div class="mail" id="mail">
            <img src="image/filled_message_24px.png" alt="" class="leftIcon">
            <div style="margin-left: 20px; width:100%;">
                <div class="textany"><?php echo $infoemail['email'] ?></div>
                <div class="textany"><?php echo $infosite['site'] ?></div>
            </div>
        </div>
        <div class="informationproject" id="informationproject">
            <br>
            <div class="textany"><?php echo $infoproject['projet'] ?></div>
            <div class="textany"><?php echo $infocontact['contact'] ?></div>
            <div class="textany"><?php echo $infoexperience['experience'] ?></div>
        </div>
    </div> 
</body>
</html>