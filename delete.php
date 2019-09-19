<?php

//delete.php

if(isset($_POST["id"]))
{
    $connect = new PDO('mysql:host=localhost;dbname=bbooking', 'root', '');
    $query = "
    DELETE from prenotazioni WHERE prenotazione_id=:id
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
    array(
    ':id' => $_POST['id']
    )
    );
}

?>
