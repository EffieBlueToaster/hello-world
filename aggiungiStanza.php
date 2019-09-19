<?php
    require_once('init.php');  
    $scelta_struttura = $_GET['scelta_struttura'];       
    $stanze = getStanze($scelta_struttura, $link);     
    $numerostanze = count($stanze);   
    $msg = FALSE;

    if (isset($_REQUEST['ok']) == 'ok') 
    {
        $nomeStanza = $_REQUEST['stanza_nome'];
        $note = $_REQUEST['stanza_note'];
        $prezzo = $_REQUEST['stanza_prezzo'];
        $matrimoniali = $_REQUEST['matrimoniali'];
        $singoli = $_REQUEST['singoli'];

        $query = 'INSERT INTO `stanze` (`stanza_nome`, `stanza_note`, `stanza_fkstrutturaid`, `stanza_prezzo`, `stanza_matrimoniali`, `stanza_singoli`, `stanza_en`)
        VALUES ("'.$nomeStanza.'", "'.$note.'", "'.$scelta_struttura.'", "'.$prezzo.'", "'.$matrimoniali.'", "'.$singoli.'", 1);';

        if ($rs = mysqli_query($link, $query)) 
        {
            echo '<script src="js/modal.js"></script>';
            echo '<script type="text/javascript">', 'closeModal();','</script>';
            header("Location:stanze.php?scelta_struttura=$scelta_struttura");
        }   
        else 
        {
            $msg = TRUE;
        }
    }
        
    if ($msg) 
    { echo "errore: --> " . $query . "<br>" . mysqli_error($link); } 
?>