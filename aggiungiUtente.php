<?php
    function phpAlert($messaggio) 
    {
        echo '<script type="text/javascript">alert("' . $messaggio . '")</script>';
    }

    require_once('init.php');
    $msg = FALSE;

    if (isset($_REQUEST['ok']) == 'ok') 
    {
        $nome = $_REQUEST["nome"];
        $cognome = $_REQUEST["cognome"];
        $email = $_REQUEST["email"];
        $pw1 = $_REQUEST["pw1"];
        $pw2 = $_REQUEST["pw2"];


        if($pw1==$pw2)      
		{
            $q = "SELECT utente_email FROM utenti WHERE utente_email='$email'"; 
            $r = mysqli_query($link, $q);
                
            if(mysqli_num_rows($r)>0)  
            {
                phpAlert("È già presente un account con questa mail");
                $msg = TRUE;
            }
                
            else 
            {
                $query = 'INSERT INTO  `utenti` (`utente_nome`, `utente_cognome`, `utente_email`, `utente_password`)
                        VALUES ("'.$nome.'", "'.$cognome.'", "'.$email.'", "'.$pw1.'");';

                if ($rs = mysqli_query($link, $query)) 
                {
                    phpAlert("Registrazione riuscita!");
                    header("Location: login.php");
                }   

                else 
                {
                    $msg = TRUE;
                }
            }
        }

        else { phpAlert("Inserisci la stessa password");}
    }
    
        
    if ($msg) 
    { echo "errore"; } 

?>

