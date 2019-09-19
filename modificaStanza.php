<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php'); 
    $scelta_struttura = $_GET['scelta_struttura']; 
    $idstanza = $_GET['stanza_id']; 
    $stanze = getStanze($scelta_struttura, $link);

    $query = "SELECT * FROM stanze WHERE stanza_id = $idstanza && stanza_en=1;";
    $ris = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($ris); 

    $nomeStanza = $row['stanza_nome'];
    $prezzo = $row['stanza_prezzo'];
    $mat = $row['stanza_matrimoniali'];
    $sin = $row['stanza_singoli'];
    $note = $row['stanza_note'];
    
    $url = "stanze.php?scelta_struttura=$scelta_struttura";
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
            Modifica stanza
            <br/><br/>
    </h1>

    <div id="riquadro">
        <form role="form" method="post" action="editStanza.php?struttura_id=<?php echo $scelta_struttura ?>&stanza_id=<?php echo $idstanza ?>" id="form_stanza">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Nome: </h3>
                        <input type="text" id="nome_stanza" class="form-control input-sm" value="<?php echo $nomeStanza ?>" name="nome_stanza" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Prezzo: </h3>
                        <input type="number" id="prezzo_stanza" class="form-control input-sm" value="<?php echo $prezzo ?>" name="prezzo_stanza" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Letti matrimoniali: </h3>
                        <input type="number" id="matrimoniali" class="form-control input-sm" value="<?php echo $mat ?>" name="matrimoniali" required>
                    </div>
                </div>
                                
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <h3>Letti singoli: </h3>
                        <input type="number" id="singoli" class="form-control input-sm" value="<?php echo $sin ?>" name="singoli" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <h3>Note: </h3>
                        <input type="text" id="note" class="form-control input-sm" value="<?php echo $note ?>" name="note" required><br/><br/>
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