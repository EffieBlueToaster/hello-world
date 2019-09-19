<?php
    require_once('init.php');
    $idstanza = $_GET['stanza_id'];   
    $idstruttura = $_GET['struttura_id'];     
    $nome = $_REQUEST['nome_stanza'];
    $prezzo = $_REQUEST['prezzo_stanza'];
    $mat = $_REQUEST['matrimoniali'];
    $sin = $_REQUEST['singoli'];
    $note = $_REQUEST['note'];

    $query = "UPDATE `stanze` SET `stanza_nome`='".$nome."', `stanza_prezzo`='".$prezzo."',`stanza_matrimoniali`='".$mat."',`stanza_singoli`='".$sin."' 
    WHERE stanza_id='" .$idstanza."';";
		
        if (mysqli_query($link, $query)) 
        {
            header('Location: stanze.php?scelta_struttura=' . $idstruttura . '&insert=ok');
        }
        else
        {
            echo "errore: --> " . $query . "<br>" . mysqli_error($link);
        }
        
    mysqli_close($link);
?>


