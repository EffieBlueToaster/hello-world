<?php
    require_once('init.php');     
     
    $idprenotazione = $_GET['prenotazione_id'];

    $utenteid = $_SESSION['utente_id'];
    $nome = $_REQUEST['nome'];
    $cognome = $_REQUEST['cognome'];
    $fiscale = $_REQUEST['fiscale'];
    $telefono = $_REQUEST['telefono'];
    $email = $_REQUEST['email'];
    $arrivo = $_REQUEST['da'];
    $partenza = $_REQUEST['a'];
    $stanzaid = $_REQUEST['stanza'];
    $note = $_REQUEST['note'];

    $query = "UPDATE `prenotazioni` SET `prenotazione_fkutenteid`='".$utenteid."', `prenotazione_fkstanzaid`='".$stanzaid."', `prenotazione_arrivo`='".$arrivo."', `prenotazione_partenza`='".$partenza."', `prenotazione_note`='".$note."',
                    `prenotazione_clienteNome`='".$nome."', `prenotazione_clienteCognome`='".$cognome."', `prenotazione_clienteFiscale`='".$fiscale."', `prenotazione_clienteEmail`='".$email."', `prenotazione_clienteTelefono`='".$telefono."'
            WHERE prenotazione_id='" .$idprenotazione."';";



    if (mysqli_query($link, $query)) 
    {
        header('Location: prenotazioni.php?insert=ok');
    }
    else
    {
        echo "errore: --> " . $query . "<br>" . mysqli_error($link);
    }
    mysqli_close($link);
?>

