<?php
require_once('init.php');

$prenotazione_id = $_GET['prenotazione_id'];

//CANCELLA PER TEST
$query = "UPDATE prenotazioni SET " . "prenotazione_en = 0" . " WHERE prenotazione_id='" . $prenotazione_id . "';" ;

// CANCELLA DAVVERO
//$query = "DELETE FROM `strutture` WHERE struttura_id='".$struttura_id."';";

if ($rs = mysqli_query($link, $query)) 
{
    header("Location:prenotazioni.php");
}

mysqli_close($link);
?>        



