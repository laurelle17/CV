<?php session_start()?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="index.css"/>
  </head>
<body>
            <center>
                <h3>send mail</h3>
            
                <form method="POST" action="sent.php">
                    <div class="container">
                        <label>Email:</label>
                        <input type="email"placeholder="Entrez votre email" name="email" required="required"/>
                        <br>
                        <label>Subject</label>
                        <input type="text" placeholder="le suject du mail" name="subject" required="required"/>
                    </div>
                    <!--<div class="form-group">
                        <label>Message</label>
                        <input type="text" class="form-control" name="message" required="required"/>
                    </div>
    -->
                    <center>
                        <button  name="send">Envoie</button>
                        <button  onclick="location.href='index.php'"  type="button" class="cancelbtn">Annuler</button>
                    </center>
                </form>
            </center>
      <br />
      <?php
        if(ISSET($_SESSION['status'])){
          if($_SESSION['status'] == "ok"){
      ?>
            <div class="alert alert-info"><?php echo $_SESSION['result']?></div>
      <?php
          }else{
      ?>
            <div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
      <?php
          }
          
          unset($_SESSION['result']);
          unset($_SESSION['status']);
        }
      ?>
    </div>
  </div>
</body>
</html>