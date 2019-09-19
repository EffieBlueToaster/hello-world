<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=bbooking', 'root', '');

$data = array();

$query = "SELECT * FROM prenotazioni ORDER BY prenotazione_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["prenotazione_id"],
  'title'   => $row["prenotazione_clienteCognome"],
  'start'   => $row["prenotazione_arrivo"],
  'end'   => $row["prenotazione_partenza"]
 );
}

echo json_encode($data);

?>