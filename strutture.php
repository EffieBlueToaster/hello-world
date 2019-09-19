<!DOCTYPE html>
<html lang="it">
<?php
    require_once('init.php');  
    require('aggiungiStruttura.php');
?>

<head>
    <title>B&Booking</title>
    <meta charset="UTF-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/navstyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/strustyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>

<body>

<div id="wrapper">
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <a class="navbar-brand" id="bb" style="border-right: 1px solid white">B&Booking</a>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
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
    <!--fai conto </div> -->            

    <!--parte centrale -->
    <h1 class="titolitab">
        Le tue strutture
        <button class="button aggiungi" data-toggle="modal" data-target="#aggiungiStrutture">Aggiungi</button>
        <br/><br/>
    </h1>

    <div class="modal fade" id="aggiungiStrutture">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"  style="background: #003580; color: white; text-align:center;">
                    <a href="#" data-dismiss="modal" class="class"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="modal-title" style="margin-right: 125px">Aggiungi una struttura</h3>
                </div>

                <div class="modal-body" style="padding:35px">
                    <form role="form" method="post" action="strutture.php?ok=ok" id="form_struttura">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nome_struttura" id="nome_struttura" class="form-control input-sm" placeholder="Nome Struttura">
                                </div>
                            </div>
                                
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="citta" id="citta" class="form-control input-sm" placeholder="Città">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" name="via" id="via" class="form-control input-sm" placeholder="Indirizzo">
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col">
                                <input type="text" name="note_struttura" id="note_struttura" class="form-control input-sm" placeholder="Note"><br/>
                            </div>
                        </div>
                        <br/>
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary"><span style="font-size: 8px" class="glyphicon glyphicon-plus"></span> Aggiungi</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>

    <!-- strutture-->
    <?php
    $strutture = getStrutture($_SESSION['email'], $link); 
    $numerostrutture = count($strutture);                 

    if($strutture != NULL) 
    {
        for ($i=0; $i<$numerostrutture; $i++) 
        {
            if ($strutture[$i]['en'] == 1) 
            {
                $scelta_struttura = $strutture[$i]['id'];
                $url1 = "stanze.php?scelta_struttura=".$scelta_struttura;   
                $url2 = "cancellaStruttura.php?struttura_id=".$scelta_struttura;
                $url3 = "modificaStruttura.php?struttura_id=".$scelta_struttura;
                ?>

                <div class="row" style="margin-left: 100px;width: 85%; padding-left:">
                    <a href="<?php echo $url1?>" class="col-auto container lista" style="width: 60%">
                        <div class="row">
                            <div class="col-auto">
                                <img src="img/hotel.png" height="120" width="auto" style="padding: 10px"/>
                            </div>
                                    
                            <div class="col">
                                <div>
                                    <h2><?php echo $strutture[$i]['nome']; ?></h2>
                                    <h4><?php echo $strutture[$i]['citta']; ?> , <?php echo $strutture[$i]['via']; ?></h4>
                                
                                </div>
                            </div>

                            <div class="col">
                                <div>
                                    <h4><br/><br/><?php echo $strutture[$i]['note']; ?></h4>
                                </div>
                            </div>
                        </div>
                    </a> 

                    <a href="<?php echo $url3?>" class="button col-sm" id="modifica" style="margin-left: 20px;">Modifica</a>
                    <a href="<?php echo $url2?>" class="button col-sm" onclick="return confirm('Sei sicuro?')" style="margin-left: 20px;" id="elimina">Elimina</a>
                    <a href="calendario.php?=" class="button col-sm" id="calendario" style="margin-left: 20px;">Calendario</a>   
                </div>
            <?php
            }
        }
    }

    else
    {
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Aggiungi la tua prima struttura!";
    } ?>
</div>

</body>
</html>