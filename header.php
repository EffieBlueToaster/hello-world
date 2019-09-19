<!DOCTYPE html>
<html lang="it">
    <head>
        
        <?php 
            function titolo($tit){
                echo "<title>B&B Manager-$tit</title>";
                }
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="stile.css"> 	
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
                            
                            <script src="calendario.js"></script>
        
        <style>


.dropdown {
  position: relative;
  display: inline-block;
  left: 77%;
  top: 0px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

header{    
    background-color: #003580;
    height: 70px;
}


</style>
        
    </head>
    
    <body>
        <div class="container-fluid" id="cont_fluid">
            <div class="row">
                <div class="col-12">
                    <header style="text-align: center" >
                        <img class="img-responsive" id=im_logo src="img/logo.png" alt="Logo" style="padding-top:0">         
                    </header>
                </div>
            </div>