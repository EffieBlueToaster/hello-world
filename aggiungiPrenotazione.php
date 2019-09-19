<?php
    require_once('init.php');     
    $prenotazioni = getPrenotazioni($_SESSION['utente_id'], $link);    
    $numeroprenotazioni = count($prenotazioni); 
    $msg = FALSE;

    if (isset($_REQUEST['ok']) == 'ok') 
    {
        $utenteid = $_SESSION['utente_id'];
        $nome = $_REQUEST['nome_cliente'];
        $cognome = $_REQUEST['cognome_cliente'];
        $fiscale = $_REQUEST['fiscale_cliente'];
        $telefono = $_REQUEST['telefono_cliente'];
        $email = $_REQUEST['email_cliente'];
        $arrivo = $_REQUEST['da'];
        $partenza = $_REQUEST['a'];
        $stanzaid = $_REQUEST['stanza'];
        $note = $_REQUEST['note'];
        
        $query = 'INSERT INTO   `prenotazioni` (`prenotazione_fkutenteid`, `prenotazione_fkstanzaid`, `prenotazione_arrivo`, `prenotazione_partenza`, `prenotazione_note`, `prenotazione_en`,
                                `prenotazione_clienteNome`, `prenotazione_clienteCognome`, `prenotazione_clienteFiscale`, `prenotazione_clienteEmail`, `prenotazione_clienteTelefono`)

                                VALUES ("'.$utenteid.'", "'.$stanzaid.'", "'.$arrivo.'", "'.$partenza.'", "'.$note.'", 1,  
                                        "'.$nome.'", "'.$cognome.'", "'.$fiscale.'", "'.$email.'", "'.$telefono.'");';

        if ($rs = mysqli_query($link, $query)) 
        {
            echo '<script src="js/modal.js"></script>';
            echo '<script type="text/javascript">', 'closeModal();','</script>';
            header("Location:prenotazioni.php");
        }   
        else 
        {
            $msg = TRUE;
        }
    }
        
    if ($msg) 
    { echo "errore: --> " . $query . "<br>" . mysqli_error($link); } 
?>