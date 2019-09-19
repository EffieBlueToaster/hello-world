<?php
require_once('init.php');     
$id = $_GET['avatar'];
$utenteid = $_SESSION['utente_id'];

$query = "UPDATE `utenti` SET `utente_img`='".$id."' WHERE utente_id='".$_SESSION['utente_id']."';";

if (mysqli_query($link, $query)) 
        {
            header('Location: profilo.php?insert=ok');
        }
        else
        {
            echo "errore: --> " . $query . "<br>" . mysqli_error($link);
		}
    mysqli_close($link);

?>