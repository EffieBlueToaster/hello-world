<?php
	require_once('init.php');  

	$loginOk = checkLogin($_REQUEST['email'], $_REQUEST['password'], $link);
	
	if ($loginOk) 
	{
		$_SESSION['isLogged'] = TRUE;
		$_SESSION['email'] = $_REQUEST['email'];
		header('Location: strutture.php');
	}
	
	else 
	{
		header('Location: login.php?login=false');
	}


function checkLogin($email, $password, $link) 
{
	$ret = FALSE;
	
	$query = "SELECT * FROM utenti WHERE utente_email='".$email."' AND utente_password='".$password."';";
	if (!$rs = mysqli_query($link, $query)) 
	{
		echo "errore";                            
		exit;
	}
	
	$num_row = mysqli_num_rows($rs);                  
	
	if ($num_row == 1) 
	{                              
		$ret = TRUE;                                  
		$row = mysqli_fetch_assoc($rs);               
		$_SESSION['utente_id'] = $row['utente_id'];  
		
	}
	mysqli_close($link);
	
	return $ret;
}

?>
