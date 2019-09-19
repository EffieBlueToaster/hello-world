<?php

require_once('init.php'); 

function getPrenotazioni($email, $link) 
{
    $ret = FALSE;
    $prenotazioni = array();
    $query = "SELECT * FROM prenotazioni WHERE prenotazione_fkutenteid = '".$_SESSION['utente_id']."' && prenotazione_en=1;";
    
    
    if (!$rs = mysqli_query($link, $query)) 
    {
        echo "errore";
        $ret = $prenotazioni;
        return $ret;
	}

    $i = 0;

    while ($row = mysqli_fetch_assoc($rs)) 
    {
        $prenotazioni[$i]['id'] = $row['prenotazione_id'];
        $prenotazioni[$i]['id_stanza'] = $row['prenotazione_fkstanzaid'];
        $prenotazioni[$i]['arrivo'] = $row['prenotazione_arrivo'];
        $prenotazioni[$i]['partenza'] = $row['prenotazione_partenza'];
        $prenotazioni[$i]['en'] = $row['prenotazione_en'];
        $prenotazioni[$i]['nome'] = $row['prenotazione_clienteNome'];
        $prenotazioni[$i]['cognome'] = $row['prenotazione_clienteCognome'];
        $prenotazioni[$i]['fiscale'] = $row['prenotazione_clienteFiscale'];
        $prenotazioni[$i]['email'] = $row['prenotazione_clienteEmail'];
        $prenotazioni[$i]['telefono'] = $row['prenotazione_clienteTelefono'];
        $prenotazioni[$i]['note'] = $row['prenotazione_note'];
        $i++;
    }

   $ret = $prenotazioni;
    return $ret;
}

function getStanze($idstruttura, $link) 
{
    $ret = FALSE;
    $stanze = array();
    
    $query = "SELECT * FROM stanze WHERE stanza_fkstrutturaid = $idstruttura && stanza_en=1;";
    
    if (!$rs = mysqli_query($link, $query)) 
    {
       $ret_zero = 0;
       return $ret_zero;
        
	}
    
    $i = 0;
    while ($row = mysqli_fetch_assoc($rs)) {
        $stanze[$i]['id'] = $row['stanza_id'];
        $stanze[$i]['nome'] = $row['stanza_nome'];
        $stanze[$i]['note'] = $row['stanza_note'];
        $stanze[$i]['fkstrutturaid'] = $idstruttura;
        $stanze[$i]['prezzo'] = $row['stanza_prezzo'];
        $stanze[$i]['matrimoniali'] = $row['stanza_matrimoniali'];
        $stanze[$i]['singoli'] = $row['stanza_singoli'];
        $stanze[$i]['en'] = $row['stanza_en'];
        $i++;
    }
    
    $ret = $stanze;
    return $ret;
}

function getStrutture($email, $link) 
{
	$ret = FALSE;             
	$strutture = array();
	
	$query = "SELECT * FROM strutture WHERE struttura_fkutenteid = '".$_SESSION['utente_id']."' && struttura_en=1;";  
	
	if (!$rs = mysqli_query($link, $query)) 
	{
        $ret_zero = 0;
        return $ret_zero;
	}

	$i = 0;
	while ($row = mysqli_fetch_assoc($rs)) 
	{
		$strutture[$i]['id'] = $row['struttura_id'];
		$strutture[$i]['nome'] = $row['struttura_nome'];
		$strutture[$i]['citta'] = $row['struttura_citta'];
		$strutture[$i]['via'] = $row['struttura_via'];
		$strutture[$i]['note'] = $row['struttura_note'];
		$strutture[$i]['en'] = $row['struttura_en'];
		$i++ ;
	}
	
	$ret = $strutture;
	return $ret;
}

function getUtente($conn) 
{
    $ret = FALSE;
    $utenti = array();

    $query = "SELECT * FROM `utenti` WHERE utente_email = '".$_SESSION['email']."';";
    
    $rs=mysqli_query($conn, $query);
    
    if (!$rs) 
    {
        echo "Errore!: --> " . $query . "<br>" . mysqli_error($conn);
    }
            
    $i = 0;
    while ($row = mysqli_fetch_assoc($rs)) 
    {
        $utente[$i]['id'] = $row['utente_id'];
        $utente[$i]['nome'] = $row['utente_nome'];
        $utente[$i]['cognome'] = $row['utente_cognome'];
        $utente[$i]['email'] = $row['utente_email'];
        $utente[$i]['password'] = $row['utente_password'];
        $i++ ;
    }

    $ret = $utente;
    return $ret;
}

function getCliente($email, $conn) 
{
    $ret = FALSE;
    $cliente = array();

    $query = "SELECT * FROM clienti WHERE cliente_fkutenteid = '".$_SESSION['utente_id']."'&& cliente_en=1;";  
    
    $rs = mysqli_query($conn, $query);
    
    if (!$rs) 
    {
        $ret_zero = 0;
        return $ret_zero;
    }
            
    $i = 0;
    while ($row = mysqli_fetch_assoc($rs)) 
    {
        $cliente[$i]['id'] = $row['cliente_id'];
        $cliente[$i]['nome'] = $row['cliente_nome'];
        $cliente[$i]['cognome'] = $row['cliente_cognome'];
        $cliente[$i]['fiscale'] = $row['cliente_fiscale'];
        $cliente[$i]['email'] = $row['cliente_email'];
        $cliente[$i]['telefono'] = $row['cliente_telefono'];
        $i++ ;
    }

    $ret = $cliente;
    return $ret;
}

?>