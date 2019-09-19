<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php');  
?>

<head>
    <title>B&Booking</title>
    <meta charset="UTF-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/navstyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/prostyle.css">  
</head>

<body>

<div id="wrapper">
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <a class="navbar-brand" id="bb" style="border-right: 1px solid white">B&Booking</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="strutture.php">Le mie strutture</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="calendario.php">Calendario</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="prenotazioni.php">Prenotazioni</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="piano.php">Piani</a>
                    </li>
                </ul>

    <?php require('navbar.php'); ?>

    <!--parte centrale -->
    <h1 class="titolitab" >Modifica profilo<br/><br/></h1>

    <div id="riquadro" style="float: left; width: 35%">
        <form role="form" method="post" action="editProfile.php" id="form_profilo" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <h3>Nome: </h3>
                        <input type="text" id="nome_utente" class="form-control input-sm" value="<?php echo $utente[0]['nome'] ?>" name="nome_utente" required>
                    </div>
                </div>
                                
                <div class="col-sm-6">
                    <div class="form-group">
                        <h3>Cognome: </h3>
                        <input type="text" id="cognome_utente" class="form-control input-sm" value="<?php echo $utente[0]['cognome'] ?>" name="cognome_utente" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <h3>Email: </h3>
                        <input type="email" id="email_utente" class="form-control input-sm" value="<?php echo $utente[0]['email'] ?>" name="email_utente" required>
                    </div>
                </div>
                                
                <div class="col-sm-6">
                    <div class="form-group">
                        <h3>Password: </h3>
                        <input type="password" id="password_utente" class="form-control input-sm" value="<?php echo $utente[0]['password'] ?>" name="password_utente" required><br/><br/>
                    </div>
                </div>
            </div>

            <div style="text-align: center;" class="row-sm-6">
                <button type="submit" name="submit" onclick="return confirm('Sei sicuro?')" class=" btn btn-primary">Salva Modifiche</button>
            </div>
        </form>
    </div>
    
    <div id="riquadro" style="float: left; width: 40%; text-align: center;">
        <h3>Scegli il tuo avatar: </h3>
            <div class="row">
                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=1"><img alt="avatar" height="90" src="img/avatar/u1.png"></a>
                </div>

                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=2"><img alt="avatar" height="90" src="img/avatar/u2.png"></a>
                </div>
                
                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=3"><img alt="avatar" height="90" src="img/avatar/u3.png"></a>
                </div>

                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=4"><img alt="avatar" height="90" src="img/avatar/u4.png"></a>
                </div>
            </div>

            <div class="row">
                <div class=" avatar col-sm-2">
                    <a href="avatar.php?avatar=5"><img alt="avatar" height="90" src="img/avatar/d1.png"></a>
                </div>

                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=6"><img alt="avatar" height="90" src="img/avatar/d2.png"></a>
                </div>
                
                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=7"><img alt="avatar" height="90" src="img/avatar/d3.png"></a>
                </div>

                <div class="avatar col-sm-2">
                    <a href="avatar.php?avatar=8"><img alt="avatar" height="90" src="img/avatar/d4.png"></a>
                </div>
            </div>
		</div>
    </div>
</div>

</body>
</html>