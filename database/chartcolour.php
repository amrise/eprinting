<?php
require ('connection.php');


// array colour
$data_pointsclr = array();
$result = mysqli_query($conn, "SELECT MONTHNAME(tarikh) AS tarikhbulan, COUNT(warna) AS warnapilih FROM taskprint WHERE warna='2' GROUP BY MONTH(tarikh)");
	
while($row = mysqli_fetch_array($result))
{
    $data_colour = array("label" => $row['tarikhbulan'] , "y" => $row['warnapilih']);
    array_push($data_pointsclr, $data_colour);
}


// array hitam
$data_pointsclr1 = array();
$result1 = mysqli_query($conn, "SELECT MONTHNAME(tarikh) AS tarikhbulan, COUNT(warna) AS warnapilih FROM taskprint WHERE warna='1' GROUP BY MONTH(tarikh)");

while($row = mysqli_fetch_array($result1))
{
    $data_black = array("label" => $row['tarikhbulan'] , "y" => $row['warnapilih']);
    array_push($data_pointsclr1, $data_black);
}


//     $data_points = array();
    
//     $stmt = $conn->prepare("SELECT MONTHNAME(tarikh) AS label, COUNT(warna) AS y FROM taskprint WHERE warna='2' GROUP BY MONTH(tarikh)");
//     $stmt->execute();
//     $result = $stmt -> get_result();

//    while ($row = $result->fetch_assoc()) 
//     {
//         $data_points[] = $row;
   
//     }

//     echo json_encode($data_points);









    
    // $data_points = array();

    // $sql = "SELECT MONTHNAME(tarikh) AS tarikhbulan, COUNT(warna) AS warnapilih FROM taskprint WHERE warna='2' GROUP BY MONTH(tarikh);";
    // $sql .= "SELECT MONTHNAME(tarikh) AS tarikhbulan, COUNT(warna) AS warnapilih FROM taskprint WHERE warna='1' GROUP BY MONTH(tarikh)";

    // if (mysqli_multi_query($conn, $sql)) {
    //     do {
    //         /* store first result set */
    //         if ($result = mysqli_store_result($conn)) {
    //             while($row = mysqli_fetch_array($result))
	//             {
    //                 $points = array("label" => $row['tarikhbulan'] , "y" => $row['warnapilih']);
    //                 array_push($data_points, $points);
    //             }
    //             echo json_encode($data_points, JSON_NUMERIC_CHECK);
    //             mysqli_free_result($result);
    //         }  
    //         } while (mysqli_next_result($conn));
    //         }

?>
	
	