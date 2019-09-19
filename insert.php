<?php


$connect = new PDO('mysql:host=localhost;dbname=bbooking', 'root', '');

if(isset($_POST["title"])&&isset($_POST["start"])&&isset($_POST["end"]))
{
    $query = "
    INSERT INTO prenotazioni 
    (prenotazione_clienteCognome, prenotazione_arrivo, prenotazione_partenza) 
    VALUES (:title, :start_event, :end_event)
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
    array(
    ':title'  => $_POST['title'],
    ':start_event' => $_POST['start'],
    ':end_event' => $_POST['end']
    )
    );
}


?>
