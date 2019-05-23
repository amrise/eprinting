<?php
require ('connection.php');


// array label
$result = mysqli_query($conn, "SELECT staffusername FROM custorder WHERE statusorder='4' GROUP BY staffusername");
	
while($row = mysqli_fetch_array($result))
{
    $data_pointsclr = array( $row['staffusername'] );
}
echo json_encode($data_pointsclr, JSON_NUMERIC_CHECK);

// array data
$result1 = mysqli_query($conn, "SELECT COUNT(custorderID) AS nilai FROM custorder WHERE statusorder='4' GROUP BY staffusername");

while($row = mysqli_fetch_array($result1))
{
    $data_pointsclr1 = array( $row['nilai'] );
}
echo json_encode($data_pointsclr1, JSON_NUMERIC_CHECK);

?>