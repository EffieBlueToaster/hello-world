<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php');  
    require('aggiungiPrenotazione.php');
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
    <link rel="stylesheet" type="text/css" href="css/prenstyle.css"> 
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
        <h1 class="titolitab">
            Le tue prenotazioni
            <button class="button aggiungi" data-toggle="modal" data-target="#aggiungiPrenotazione">Aggiungi</button>
            <br/><br/>
        </h1>

        <!-- popup -->
        <div class="modal fade" id="aggiungiPrenotazione">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"  style="background: #003580; color: white; text-align:center;">
                        <a href="#" data-dismiss="modal" class="class"><span class="glyphicon glyphicon-remove"></span></a>
                        <h3 class="modal-title" style="margin-right: 85px">Aggiungi una prenotazione</h3>
                    </div>

                    <div class="modal-body" style="padding:35px">
                        <form role="form" method="post" action="prenotazioni.php?ok=ok" id="form_prenotazioni">
                            <div>
                                <h3>Dati Cliente</h3>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nome_cliente" id="nome_cliente" class="form-control input-sm" placeholder="Nome">
                                        </div>
                                    </div>
                                
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cognome_cliente" id="cognome_cliente" class="form-control input-sm" placeholder="Cognome">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                        <input type="text" name="telefono_cliente" id="telefono_cliente" class="form-control input-sm" placeholder="Telefono">
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="fiscale_cliente" id="fiscale_cliente" class="form-control input-sm" placeholder="Codice Fiscale">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="email" name="email_cliente" id="email_cliente" class="form-control input-sm" placeholder="Email">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h3><br/>Dati Prenotazione</h3>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            &nbsp;&nbsp;Da: <input type="date" name="da" id="da" class="form-control input-sm" placeholder="Da">
                                        </div>
                                    </div>
                            
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            &nbsp;&nbsp;A:<input type="date" name="a" id="a" class="form-control input-sm" placeholder="A">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label>Stanza: </label>
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
                                            <label>Note: </label>
                                            <input type="text" name="note" id="note" class="form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="text-align: center; margin-bottom: 30px;">
                                <button type="submit" class="btn btn-primary"><span style="font-size: 8px" class="glyphicon glyphicon-plus"></span> Aggiungi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- lista prenotazioni -->
        <?php
            $prenotazioni = getPrenotazioni($_SESSION['email'], $link); 
            $stanze = getStanze($_SESSION['email'], $link); 
            $numeroprenotazioni = count($prenotazioni);

            if($prenotazioni != NULL) 
            {
                for ($i=0; $i<$numeroprenotazioni; $i++) 
                {
                    if ($prenotazioni[$i]['en'] == 1) 
                    {
                        $idstanza = $prenotazioni[$i]['id_stanza'];
                        $nome = $prenotazioni[$i]['nome'];
                        $cognome = $prenotazioni[$i]['cognome'];

                        $query = "SELECT * FROM stanze WHERE stanza_id = $idstanza && stanza_en=1;";
                        $ris = mysqli_query($link, $query);
                        $row = mysqli_fetch_assoc($ris);
                        $nomeStanza = $row['stanza_nome']; 
                        

                        $scelta_prenotazione = $prenotazioni[$i]['id'];
                        $url = "infoPrenotazione.php?prenotazione_id=".$scelta_prenotazione;
                        $url2 = "cancellaPrenotazione.php?prenotazione_id=".$scelta_prenotazione;
                        $url3 = "modificaPrenotazioni.php?prenotazione_id=".$scelta_prenotazione;?>

                        <div class="row prenotazioni" style="width: 75%; margin-left: 100px;">
                            <a href="<?php echo $url ?>" class="col container riga" style="width: 70%;">
                                <div class="row">
                                    <div class="col-3">
                                        <p>Stanza: <?php echo $nomeStanza ?></p>
                                    </div>

                                    <div class="col-3">
                                        <p>Arrivo: <?php echo $prenotazioni[$i]['arrivo'];?></p>
                                    </div>

                                    <div class="col-3">
                                        <p>Partenza: <?php echo $prenotazioni[$i]['partenza'];?></p>
                                    </div>

                                    <div class="col-auto">
                                        <p>Cliente: <?php echo $nome;?> <?php echo $cognome;?></p>
                                    </div>
                                </div>
                            </a>
                                
                            <a href="<?php echo $url3?>" class="button bottone col-auto" id="modifica">Modifica</a>
                            <a href="<?php echo $url2?>" class="button bottone col-auto" onclick="return confirm('Sei sicuro?')" id="elimina">Elimina</a>
                        </div>
                    <?php
                    }
                }
            }
            else
            {
                echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Aggiungi la tua prima prenotazione!";
            } 
        ?>
</div>


</body>
</html>