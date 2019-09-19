<!DOCTYPE html>
<html lang="it">

<?php
    require_once('init.php');
    require('aggiungiStanza.php');
    //require('eliminaStanza.php');
?>

<head>
    <title>B&Booking</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/navstyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/footstyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>

function coloreRandom()
{
	$colori = array('#FF6633', '#FF33FF', '#ffff66', '#00B3E6', '#1AB399',
						'#E6B333', '#3366E6', '#33ff33', '#B34D4D', '#4DB3FF', 
						'#80B300', '#6680B3', '#B366CC', '#4D8000', '#B33300', 
						'#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC', '#991AFF',
						'#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
						'#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF',
						'#E666B3', '#33991A', '#00E680', '#1AFF33', 'red', 'lightblue', 'teal', 'cyan', 'turquoise');
    $colore = $colori[array_rand($colori)];
	return colore;
}

</script>

</head>

<body>

<div id="wrapper">
    <!-- navbar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <a class="navbar-brand" id="bb" style="border-right: 1px solid white">B&Booking</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
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
    <h1 class="titolitab" style="margin-left: 50px;">
            <button type="button" class="btn" style="background-color: #003580;" onclick="location.href='strutture.php'">
                <span style="color: white;" class="glyphicon glyphicon-arrow-left"></span>
            </button>
            Le tue stanze
            <button class="button aggiungi" data-toggle="modal" data-target="#aggiungiStanze">Aggiungi</button>
            <br/><br/>
    </h1>

    <div class="modal fade" id="aggiungiStanze" >
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header"  style="background: #003580; color: white; text-align:center;">
                    <a href="#" data-dismiss="modal" class="class"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="modal-title" style="margin-right: 125px">Aggiungi una stanza</h3>
                </div>

                <div class="modal-body" style="padding:35px">
                    <form role="form" method="post" action="stanze.php?scelta_struttura=<?php echo $scelta_struttura?>&ok=ok" id="form_stanza">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="stanza_nome" id="stanza_nome" class="form-control input-sm" placeholder="Nome Stanza" required>
                                </div>
                            </div>
                                
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="stanza_prezzo" id="stanza_prezzo" class="form-control input-sm" placeholder="Prezzo" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="matrimoniali" id="matrimoniali" class="form-control input-sm" placeholder="Letti Matrimoniali" required>
                                </div>
                            </div>
                        
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="singoli" id="singoli" class="form-control input-sm" placeholder="Letti singoli" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" name="stanza_note" id="stanza_note" class="form-control input-sm" placeholder="Note">
                            </div>
                        </div>
                        <br/>

                        <div style="text-align: center;">
                            <button type="submit" name="submit" class="btn btn-primary"><span style="font-size: 8px" class="glyphicon glyphicon-plus"></span> Aggiungi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
    <div style="float:left; margin-left: 100px; width:90% ">
        <div class="row">
            <?php
            if($stanze != NULL) 
            {
                for ($i=0; $i<$numerostanze; $i++) 
                {
                    if ($stanze[$i]['en'] == 1) 
                    { 
                        $scelta_struttura = $_GET['scelta_struttura']; 
                        $scelta_stanza = $stanze[$i]['id'];

                        $url1 = "cancellaStanza.php?scelta_struttura=$scelta_struttura&stanza_id=$scelta_stanza";
                        $url2 = "modificaStanza.php?scelta_struttura=$scelta_struttura&stanza_id=$scelta_stanza"; ?>
                        <div class="col-sm-">
                            <div class="casella">
                                <div class="sopra" style="background-image: url(img/porta.png);">
                                    <h3><?php echo $stanze[$i]['nome']; ?></h3>
                                </div>
                
                                <div class="sotto" style="text-align: center;">
                                    <span style="text-align: left;">
                                    <br/>Prezzo: €<?php echo $stanze[$i]['prezzo']; ?><br/>Note: <?php echo $stanze[$i]['note']; ?></span>
                                    <br/><br/>
                                    <a class="btn btn-outline-success" href="<?php echo $url2 ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </a>	

                                    <a class="btn btn-outline-danger"  onclick="return confirm('Sei sicuro?')" href="<?php echo $url1 ?>">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                    </a>	
                                </div>
                            </div>

                            <h3 style="text-align: center; margin-right: 27px; margin-bottom: 50px; margin-top:0px;">
                                <img src="img/doppio.png" alt="matrimoniali">: <?php echo $stanze[$i]['matrimoniali']; ?>
                                <img src="img/singolo.png" alt="singoli" height="20px">: <?php echo $stanze[$i]['singoli']; ?>
                            </h3>
                        </div>
                    <?php                       
                    }
                }
            }
    else
    {
        echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Aggiungi la tua prima stanza!";
    } ?>
    </div>
</div>
</div>


</body>
</html>
 