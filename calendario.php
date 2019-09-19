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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="js/libreria.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
	<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-4529508631166774",
			enable_page_level_ads: true
		  });
	</script>
	
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/fullcalendar.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/locale/it.js"></script>

    <link rel="stylesheet" type="text/css" href="css/navstyle.css"> 
    <link rel="stylesheet" type="text/css" href="css/style.css">  
    <link rel="stylesheet" type="text/css" href="css/calstyle.css"> 

	<script>			
		$(document).ready(function() 
        {
			var calendar = $('#calendar').fullCalendar({
                locale:'it',
				editable:true,
				header:{
					left:'prev,next today',
					center:'title',
					right:'month,agendaWeek,agendaDay'
				},
				events: 'load.php',
				selectable:true,
				selectHelper:true,
                
                /* aggiunge prenotazione con cognome cliente
                select: function(start, end, allDay)
				{
					var title = prompt("Inserire cognome cliente");
					if(title)
					{
						var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
						var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
						$.ajax({
							url:"insert.php",
							type:"POST",
							data:{title:title, start:start, end:end},
							success:function()
							{
								calendar.fullCalendar('refetchEvents');
								alert("Prenotazione aggiunta");
							}
						})
					}
                },
                */

                // aggiunge tramite il modal
                select: function(start, end, allDay)
				{
                    var arrivo = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var partenza = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $('#aggiungiPrenotazione').modal("show");
                },

				editable:true,
				eventResize:function(event)
				{
					var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
					var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
					var title = event.title;
					var id = event.id;
					$.ajax({
						url:"update.php",
						type:"POST",
						data:{title:title, start:start, end:end, id:id},
						success:function(){
							calendar.fullCalendar('refetchEvents');
							alert('Event Update');
						}
					})
                },
                

				eventDrop:function(event)
				{
					var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
					var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
					var title = event.title;
					var id = event.id;
					$.ajax({
						url:"update.php",
						type:"POST",
						data:{title:title, start:start, end:end, id:id},
						success:function()
						{
							calendar.fullCalendar('refetchEvents');
							alert("Prenotazione aggiornata");
						}
					});
				},

				eventClick:function(event)
				{
					if(confirm("Sei sicuro di voler rimuovere la prenotazione?"))
					{
						var id = event.id;
						$.ajax({
							url:"delete.php",
							type:"POST",
							data:{id:id},
							success:function()
							{
								calendar.fullCalendar('refetchEvents');
								alert("Prenotazione rimossa");
							}
						})
					}
				},

			});
		});
			
	</script>

    <script>
        function toggleIcon(e)
        {
            $(e.target).prev('.panel-heading').find(".more-less").toggleClass('glyphicon-plus glyphicon-minus');
        } 

        $('.panel-group').on('hidden.bs.collapse',toggleIcon);$('.panel-group').on('shown.bs.collapse',toggleIcon);
    </script>
    
    <script>

        $(document).ready(function() 
        {
            var calendar = $('#calendar').fullCalendar(
                {
                    editable:true,
                    header:
                    {
                        left:'prev,next today',
                        center:'title',
                        right:'month,agendaWeek,agendaDay'
                    },
                    events: 'load.php',
                    selectable:true,
                    selectHelper:true,
                    select: function(start, end, allDay)
                    {
                    var title = prompt("Inserire prenotazione");
                    if(title)
                    {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax(
                        {
                            url:"insert.php",
                            type:"POST",
                            data:{title:title, start:start, end:end},

                            success:function()
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Prenotazione aggiunta con successo");
                            }
                        })
                    }
                },
                editable:true,
                eventResize:function(event)
                {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax(
                    {
                        url:"update.php",
                        type:"POST",
                        data:{title:title, start:start, end:end, id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Prenotazione Aggiornata');
                        }
                    })
                },

                eventDrop:function(event)
                {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    $.ajax(
                    {
                        url:"update.php",
                        type:"POST",
                        data:{title:title, start:start, end:end, id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Prenotazione Aggiornata");
                        }
                    });
                },

                eventClick:function(event)
                {
                    if(confirm("Sei sicuro di voler rimuovere la prenotazione?"))
                    {
                        var id = event.id;
                        $.ajax(
                        {
                            url:"delete.php",
                            type:"POST",
                            data:{id:id},
                            success:function()
                            {
                                calendar.fullCalendar('refetchEvents');
                                alert("Prenotazione Rimossa");
                            }
                        })
                    }
                },
            });
        });
   
  </script>

<style>
    .modal-backdrop 
    { 
        display: none;    
    }
</style>
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

                    <li class="nav-item active">
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
    <div style="width: 100%">
        <h1 class="titolitab" style="text-align: center; margin-left: 0px; margin-top: 45px; margin-bottom: 50px">
                  
        </h1>

        <div id='wrap' class="row" style="margin-bottom: 150px">
            <div id="calendar" class="col">
            </div>

            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-87739877-1', 'auto');
                ga('send', 'pageview');
            </script>
        </div>
    </div>



</div>

</body>


<div class="modal fade" id="aggiungiPrenotazione" role="dialog">
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
                                    &nbsp;&nbsp;Da: <input type="date" name="da" id="da" class="form-control input-sm" value="
                                    <script language='JavaScript'>document.write(arrivo);</script>" placeholder="Da">
                                </div>
                            </div>
                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    &nbsp;&nbsp;A:<input type="date" name="a" id="a" class="form-control input-sm" value="
                                    <script language='JavaScript'>document.write(partenza);</script>" placeholder="A">
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
</html>  