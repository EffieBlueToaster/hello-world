<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php'); 
    $prenotazioni = getPrenotazioni($_SESSION['utente_id'], $link);
    $scelta_prenotazione = $_GET['prenotazione_id'];

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

    $url = "prenotazioni.php";
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
            Modifica prenotazione
            <br/><br/>
    </h1>

    <div id="riquadro">
        <form role="form" method="post" action="editPrenotazione.php?prenotazione_id=<?php echo $scelta_prenotazione ?>" id="form_pren">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Nome: </h4>
                        <input type="text" id="nome" class="form-control input-sm" value="<?php echo $nome ?>" name="nome" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Cognome: </h4>
                        <input type="text" id="cognome" class="form-control input-sm" value="<?php echo $cognome ?>" name="cognome" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Telefono: </h4>
                        <input type="text" id="telefono" class="form-control input-sm" value="<?php echo $tel ?>" name="telefono" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Codice fiscale: </h4>
                        <input type="text" id="fiscale" class="form-control input-sm" value="<?php echo $fiscale ?>" name="fiscale" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Stanza: </h4>
                        <select class="browser-default custom-select" name="stanza" id="stanza" required>
                            <?php
                            $strutture = getStrutture($_SESSION['email'], $link); 
                            $numerostrutture = count($strutture);

                            for($j = 0; $j < $numerostrutture; $j++)
                            {
                                $stanze = getStanze($j, $link);
                                $max = count($stanze);
                                for ($i = 0; $i < $max; $i++) 
                                { ?>
                                    <option value="<?php echo $stanze[$i]['id']; ?>"><?php echo $stanze[$i]['nome']; ?></option> <?php echo $_REQUEST['stanza'];
                                }
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Email: </h4>
                        <input type="email" id="email" class="form-control input-sm" value="<?php echo $email ?>" name="email" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Arrivo: </h4>
                        <input type="date" id="da" class="form-control input-sm" value="<?php echo $arrivo ?>" name="da" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h4>Partenza: </h4>
                        <input type="date" id="a" class="form-control input-sm" value="<?php echo $partenza ?>" name="a" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                <h4>Note: </h4>
                    <input type="text" id="note" class="form-control input-sm" value="<?php echo $note ?>" name="note"><br/><br/>
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