<?php
require_once('init.php');

$struttura_id = $_GET['scelta_struttura'];
$stanza_id = $_GET['stanza_id'];

//CANCELLA PER TEST
$query = "UPDATE stanze SET " . "stanza_en = 0" . " WHERE stanza_id='" . $stanza_id . "';" ;

// CANCELLA DAVVERO
//$query = "DELETE FROM `strutture` WHERE struttura_id='".$struttura_id."';";

if ($rs = mysqli_query($link, $query)) 
{
    header("Location:stanze.php?scelta_struttura=$struttura_id");
}

mysqli_close($link);
?>        



