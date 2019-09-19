<?php
    require_once('init.php');
    $msg = FALSE;

    if (isset($_REQUEST['ok']) == 'ok') 
    {
        $nome = $_REQUEST["nome"];
        $cognome = $_REQUEST["cognome"];
        $email = $_REQUEST["email"];
        $pw1 = $_REQUEST["pw1"];
        $pw2 = $_REQUEST["pw2"];

        $query = 'INSERT INTO   `utenti` (`utente_id`, `utente_nome`, `utente_cognome`, `utente_email`, `utente_password`)
                VALUES ("'.$id.'", "'.$nome.'", "'.$cognome.'", "'.$email.'");';

        if ($rs = mysqli_query($link, $query)) 
        {
            header("Location: login.php?reg=ok");
        }   
    }

    else 
    {
        $msg = TRUE;
    }
    
        
    if ($msg) 
    { echo "errore: --> " . $query . "<br>" . mysqli_error($link); } 
    mysqli_close($link);
        /*
        if($nome!="" && $cognome!="" && $email!="" && $pw1!="" && $pw2!="") 
        {
			if($pw1==$pw2)      
			{              
				$query = "SELECT utente_email FROM utenti WHERE utente_email='$email'"; 
                $ris = mysqli_query($link, $query);
                
                if(mysqli_num_rows($ris)>0)  
                {
                    header("location:registrazione.php?er=1");
                    $msg = TRUE;
                }
                else 
                {
                    $query1 = "SELECT MAX(utente_id) AS Id FROM utenti";
                    $result1 = mysqli_query($link, $query1);

            		if(mysqli_num_rows($result1)>0)  
                    {
                        $row = mysqli_fetch_array($result);
                        $query2 = "INSERT INTO utenti(utente_nome, utente_cognome, utente_email, utente_password) VALUES ('$nome','$cognome','$email','$pw1')";
                       	$result2 = mysqli_query($link, $query2);
            
                        if($result2)
                        {
                            header("location:login.php");
                        }
                        else
                        {
                            header("location:registrazione.php?er=2");
                            $msg = TRUE;
                        }
                    }
                }
            }

            else
            {
                header("location:registrazione.php?er=3");
                $msg = TRUE;
            }
        }
    }

    if ($msg) 
    { echo "errore: --> " . $query . "<br>" . mysqli_error($link); } 
    */
?>

