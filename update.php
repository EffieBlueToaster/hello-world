<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=bbooking', 'root', '');

if(isset($_POST["id"]))
{
    $query = "
    UPDATE prenotazioni 
    SET prenotazione_clienteCognome=:title, prenotazione_arrivo=:start_event, prenotazione_partenza=:end_event 
    WHERE prenotazione_id=:id
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
    array(
    ':title'  => $_POST['title'],
    ':start_event' => $_POST['start'],
    ':end_event' => $_POST['end'],
    ':id'   => $_POST['id']
    )
    );
}

?>