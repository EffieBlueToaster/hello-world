<?php
    require_once('init.php');       
    $strutture = getStrutture($_SESSION['email'], $link);     
    $numerostrutture = count($strutture);   
    $idutente = $_SESSION['utente_id'];
    $msg = FALSE;

    if (isset($_REQUEST['ok']) == 'ok') 
    {
        $nomestruttura = $_REQUEST['nome_struttura'];
        $note = $_REQUEST['note_struttura'];
        $citta = $_REQUEST['citta'];
        $via = $_REQUEST['via'];
        
        $query = 'INSERT INTO `strutture` (`struttura_fkutenteid`, `struttura_nome`, `struttura_citta`, `struttura_via`, `struttura_note`, `struttura_en`)
        VALUES ("'.$idutente.'", "'.$nomestruttura.'", "'.$citta.'", "'.$via.'", "'.$note.'", 1);';

        if ($rs = mysqli_query($link, $query)) 
        {
            echo '<script src="js/modal.js"></script>';
            echo '<script type="text/javascript">', 'closeModal();','</script>';
            header("Location:strutture.php");
        }   
        else 
        {
            $msg = TRUE;
        }
    }
        
    if ($msg) 
    { echo "ERRORE"; } 
?>