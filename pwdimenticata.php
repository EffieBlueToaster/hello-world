<!DOCTYPE html>
<html>
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

        .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
 }

        .btn
        {
            background: #003580;
            border: 1px solid #003580;
        }
    </style>
    
<body>
<div id="wrapper">
    <div id="login">
    <div style="text-align:center">
        <img class="img-responsive" id=im_logo src="img/logo.png" alt="Logo"/> </div>
        
        <form action='login.php' method="post" class="needs-validation" novalidate>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12"  style="border-radius: 1em;">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center ">Password Dimenticata</h3>
                               <div id="register-link" style="text-align:center; width:80%; margin:auto; margin-top: 20px;">
                                <p style="font-size: 18px">Hai dimenticato la tua password? Inserisci qui la tua e-mail, e ti invieremo un link per impostarne una nuova.</p>
                            </div>
                            <div class="form-group" style="width:80%; margin:auto;">
                            <label for="email" style="font-size: 20px">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                                <div class="valid-feedback" id='validatore'>Valido!</div>
                                <div class="invalid-feedback" id='validatore'>Inserisci l'email corretta!</div>
                            </div>
                            <div class="form-group">                                
                                <div style="text-align: center; margin-top:30px">
                                    <input type="submit" name="submit" class="btn btn-info btn-md col-md-2" value="Invia" style="margin-right:20px;">
                                    <button type="button" class="btn btn-info btn-md col-md-2"  onclick="location.href='login.php'"style="margin-left:20px;">Indietro</button>
                                </div>
                            </div>
                        <?php include_once 'feedbackForm.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        </form>


    </div>

    <div class="pushfooter"></div>
</div>

<div class="footer" id="barra">
  <h6 style="color: white; padding-top: 5px">Copyright © 2019 B&Booking</h6>
</div>
</html>
