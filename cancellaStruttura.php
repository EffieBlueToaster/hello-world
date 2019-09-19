<?php
require_once('init.php');

$struttura_id=$_GET['struttura_id'];

//CANCELLA PER TEST
$query = "UPDATE strutture SET " . "struttura_en = 0" . " WHERE struttura_id='" . $struttura_id . "';" ;

// CANCELLA DAVVERO
//$query = "DELETE FROM `strutture` WHERE struttura_id='".$struttura_id."';";

if ($rs = mysqli_query($link, $query)) 
{
    header("Location:strutture.php");
}

mysqli_close($link);
?>        



