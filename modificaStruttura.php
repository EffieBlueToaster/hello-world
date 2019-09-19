<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php'); 
    $scelta_struttura = $_GET['struttura_id']; 
    $strutture = getStrutture($_SESSION['utente_id'], $link);
    $idutente = $_SESSION['utente_id'];

    $query = "SELECT * FROM strutture WHERE struttura_id = $scelta_struttura && struttura_en=1;";
    $ris = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($ris); 

    $url = "strutture.php";

    $nome = $row['struttura_nome'];
    $citta = $row['struttura_citta'];
    $via = $row['struttura_via'];
    $note = $row['struttura_note'];
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
    <h1 class="titolitab" style="margin-left: 50px;">
            <button type="button" class="btn" style="background-color: #003580;" onclick="location.href='<?php echo $url ?>'">
                <span style="color: white;" class="glyphicon glyphicon-arrow-left"></span>
            </button>
            Modifica struttura
            <br/><br/>
    </h1>

    <div id="riquadro">
        <form role="form" method="post" action="editStruttura.php?struttura_id=<?php echo $scelta_struttura?>" id="form_struttura">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Nome: </h3>
                        <input type="text" id="nome_struttura" class="form-control input-sm" value="<?php echo $nome ?>" name="nome_struttura" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Città: </h3>
                        <input type="text" id="citta" class="form-control input-sm" value="<?php echo $citta ?>" name="citta" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Indirizzo: </h3>
                        <input type="text" id="via" class="form-control input-sm" value="<?php echo $via ?>" name="via" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Note: </h3>
                        <input type="text" id="note" class="form-control input-sm" value="<?php echo $note ?>" name="note"><br/><br/>
                    </div>
                </div>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Salva Modifiche</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>