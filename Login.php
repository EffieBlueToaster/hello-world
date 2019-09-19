<html>
<head>
    <title>B&Booking</title>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/footstyle.css"> 
    
    <style>
        #login .container #login-row #login-column #login-box 
        {
            margin-top: 40px;
            border: 1px solid #003580;
            background-color: #EAEAEA;
            padding: 30px;
        }

        .btn
        {
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
        <form action="checkLogin.php" method="post" class="needs-validation" novalidate>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12"  style="border-radius: 1em;">
                        
                            <h3 class="text-center ">Login</h3>
                            <div class="form-group">
                            <label for="email">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                                <div class="valid-feedback" id='validatore'>Valido!</div>
                                <div class="invalid-feedback" id='validatore'>Inserisci l'email corretta!</div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                                <div class="valid-feedback" id='validatore'>Valido!</div>
                                <div class="invalid-feedback" id='validatore'>Inserisci l'email corretta!</div>
                                
                                <div id="register-link">
                                <a href="pwdimenticata.php" style="color: #003580">Hai dimenticato la tua password?</a>
                                </div>
                            </div>
                            <div class="form-group">                                
                                <div style="text-align:center">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Accedi">
                                </div>
                            </div>
                            <div id="register-link" style="text-align:center">
                                <h5>Non hai ancora un account? Registrati subito!</h5><br>
                                <a href="registrazione.php" class="btn btn-info">Registrati</a>
                            </div>
                            
                        
                        <?php include_once 'feedbackForm.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        </form>


    </div>
    <div class="pushfooter"style="height:10px;"></div>
</div>

<div class="footer" id="barra">
  <h6 style="color: white; padding-top: 5px">Copyright © 2019 B&Booking</h6>
</div>

</div>
</body>
</html>