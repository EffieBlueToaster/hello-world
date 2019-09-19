<?php
    require_once('init.php');    
    $idstruttura = $_GET['struttura_id']; 
    $nome = $_REQUEST['nome_struttura'];
    $citta = $_REQUEST['citta'];
    $via = $_REQUEST['via'];
    $note = $_REQUEST['note'];

    $query = "UPDATE `strutture` SET `struttura_nome`='".$nome."',`struttura_citta`='".$citta."', `struttura_via`='".$via."',`struttura_note`='".$note."' 
    WHERE struttura_id='" .$idstruttura."';";
		
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