<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php');  
    require('aggiungiUtente.php');
?>
<head>
    <title>B&Booking</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/footstyle.css"> 
    
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
#login .container #login-row #login-column #login-box 
{
  margin-top: 40px;
  border: 1px solid #003580;
  background-color: #EAEAEA;
  padding: 30px;
}

.btn{
    background: #003580;
    border: 1px solid #003580;
}
    </style>
</head>

<body>
<div id="wrapper">
    <div id="login">
    <div style="text-align:center">
        <img class="img-responsive" id=im_logo src="img/logo.png" alt="Logo"/> </div>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12"  style="border-radius: 1em;">
                     <h3 class="text-center">Registrazione</h3>


                        <form id="login-form" class="form" action="registrazione.php?ok=ok" method="post">
                            <div class="form-group">
                                <label for="email">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Cognome:</label><br>
                                <input type="text" name="cognome" id="cognome" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Password:</label><br>
                                <input type="password" name="pw1" id="pw1" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Conferma Password:</label><br>
                                <input type="password" name="pw2" id="pw2" class="form-control" required>
                            </div>

                            <div class="form-group">                                
                                <div style="text-align:center">
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Registrati">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pushfooter"></div>
</div>

<div class="footer" id="barra">
  <h6 style="color: white; padding-top: 5px">Copyright © 2019 B&Booking</h6>
</div>
</div>
</html>
