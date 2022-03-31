<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=helperland_db', 'root', 'Hinal22@tc');

$data = array();

$impid =  $this->getSession('Userid');

$query = "SELECT ServiceRequestId, ExtraServices, ServiceStartDate, SUBSTRING_INDEX(`ServiceStartDate`, ' ', 1) as 'date', endTime FROM servicerequest where Serviceproviderid = $impid";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["ServiceRequestId"],
  'title'   => $row["ServiceStartDate"],
  'start'   => $row["ServiceStartDate"],
  'end'   => $row["date"]. ' ' .$row["endTime"]
 );
}

echo json_encode($data);
// print_r($data);
 // echo $this->getSession('Userid');

?>