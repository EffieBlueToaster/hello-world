<!DOCTYPE html>
<html lang="it">

<head>
    <title>B&Booking</title>
    <meta charset="UTF-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/navstyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/footstyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link rel="stylesheet" type="text/css" href="css/pianistyle.css">
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
                    <a class="nav-link active" href="piano.php">Piani</a>
                    </li>
                </ul>

    <?php require('navbar.php'); ?>

    <!--parte centrale -->
    <div style="text-align: center">
            <h1 class="titolitab" style="text-align: center; margin-left: 0px; margin-top: 45px; margin-bottom: 50px">
            Scegli il tuo piano
            </h1>

    <div class="container" style="padding-bottom: 50px;">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="blocks">
                        <div class="block-header">
                            <h4>GRATIS</h4>
                        </div>
                        <div class="block-container">
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>1 Struttura</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>1 Stanza</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Profilo personalizzabile</p>
                            <p><span class="glyphicon glyphicon-remove" data-unicode="e013" style="color:red;"> </span>No assistenza</p>
                            <p><span class="glyphicon glyphicon-remove" data-unicode="e013" style="color:red;"> </span>No Calendario</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>No costi aggiuntivi</p>
                            <p class="price"><i style="font-size: 40px;">€</i>0<sub><small class="renew-price"></small></sub></p>
                        </div>
                        <div class="block-footer">
                            <a class="order-now" href="#">Prova ora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="blocks active-block">
                        <div class="block-header">
                            <h4>BEGINNER</h4>
                        </div>
                        <div class="block-container">
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Strutture illimitate</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Stanze illimitate a pagamento</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Profilo personalizzabile</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Prima assistenza gratuita</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Calendario disponibile</p>
                            <p><span class="glyphicon glyphicon-remove" data-unicode="e013" style="color:red;"> </span>Costi aggiuntivi</p>
                            <p class="price"><i style="font-size: 40px;">€</i>5<sub><small class="renew-price">a stanza</small></sub></p>
                        </div>
                        <div class="block-footer">
                            <a class="order-now" href="#">Prova ora</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="blocks">
                        <div class="block-header">
                            <h4>PROFESSIONAL</h4>
                        </div>
                        <div class="block-container">
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Strutture illimitate</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Stanze illimitate gratuite</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Profilo Personalizzabile</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Assistenza gratuita</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Calendario disponibile</p>
                            <p><span class="glyphicon glyphicon-ok" data-unicode="e013" style="color:#45BA76;"> </span>Nessun Costo aggiuntivo</p>
                            <p class="price"><i style="font-size: 40px;">€</i>20<sub><small class="renew-price">al mese</small></sub></p>
                        </div>
                        <div class="block-footer">
                            <a class="order-now" href="#">Prova ora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pushfooter"></div>
    </div>

<div id="footer">
    <?php require('footer2.php'); ?>
</div>

</body>
</html>