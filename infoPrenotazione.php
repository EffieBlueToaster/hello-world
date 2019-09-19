<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php'); 
    $scelta_prenotazione = $_GET['prenotazione_id'];
    $prenotazioni = getPrenotazioni($_SESSION['utente_id'], $link);

    $query = " SELECT * FROM prenotazioni WHERE prenotazione_id = $scelta_prenotazione && prenotazione_en=1;";
    $ris = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($ris);

    $nome = $row['prenotazione_clienteNome'];
    $cognome = $row['prenotazione_clienteCognome'];
    $fiscale = $row['prenotazione_clienteFiscale'];
    $email = $row['prenotazione_clienteEmail'];
    $tel = $row['prenotazione_clienteTelefono'];
    $arrivo = $row['prenotazione_arrivo'];
    $partenza = $row['prenotazione_partenza'];
    $note = $row['prenotazione_note'];
    $stanzaid = $row['prenotazione_fkstanzaid'];

    $query2 = " SELECT * FROM stanze WHERE stanza_id = $stanzaid && stanza_en=1;";
    $ris2 = mysqli_query($link, $query2);
    $row2 = mysqli_fetch_assoc($ris2);
    $nomeStanza = $row2['stanza_nome'];

    $url2 = "cancellaPrenotazione.php?prenotazione_id=".$scelta_prenotazione;
    $url3 = "modificaPrenotazioni.php?prenotazione_id=".$scelta_prenotazione;
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
    <link rel="stylesheet" type="text/css" href="css/strustyle.css"> 
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
                        <li class="nav-item active">
                        <a class="nav-link" href="prenotazioni.php">Prenotazioni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="piano.php">Piani</a>
                        </li>
                    </ul>

        <?php require('navbar.php'); ?>

        <!--parte centrale -->
        
        <h1 class="titolitab" style="margin-left: 50px;">
            <button type="button" class="btn" style="background-color: #003580;" onclick="location.href='prenotazioni.php'">
                <span style="color: white;" class="glyphicon glyphicon-arrow-left"></span>
            </button>
            Info Prenotazione<br/><br/>
        </h1>

        <div>
            <div id="riquadro" style="float: left; padding-left: 60px; width: 50%">
                <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Nome: <?php echo $nome ?></h3>
                            </div>
                        </div>
                                        
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Cognome: <?php echo $cognome ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Telefono: <?php echo $tel ?></h3>
                            </div>
                        </div>
                                        
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Codice fiscale: <?php echo $fiscale ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Stanza: <?php echo $nomeStanza;?></h3>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Email: <?php echo $email ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Arrivo: <?php echo $arrivo ?></h3>
                            </div>
                        </div>
                                        
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <h3>Partenza: <?php echo $partenza ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <h3>Note: <?php echo $note ?></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row prenotazioni">
                <a href="<?php echo $url3?>" class="button bottone col-md-3" style="margin-left: 60px" id="modifica">Modifica</a>
                <a href="<?php echo $url2?>" class="button bottone col-md-3" style="margin-left: 60px" onclick="return confirm('Sei sicuro?')" id="elimina">Elimina</a>
            </div>
        </div>

    </div>
</body>
</html>