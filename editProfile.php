<?php
    require_once('init.php');     
    
    $nome = $_REQUEST['nome_utente'];
    $cognome = $_REQUEST['cognome_utente'];
    $email = $_REQUEST['email_utente'];
    $password = $_REQUEST['password_utente'];

    $query = "UPDATE `utenti` SET `utente_nome`='".$nome."',`utente_cognome`='".$cognome."', `utente_email`='".$email."',`utente_password`='".$password."' WHERE utente_id='".$_SESSION['utente_id']."';";
		
        if (mysqli_query($link, $query)) 
        {
            header('Location: strutture.php?insert=ok');
        }
        else
        {
            echo "errore: --> " . $query . "<br>" . mysqli_error($link);
		}
    mysqli_close($link);
?>