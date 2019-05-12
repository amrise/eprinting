<?php
require ('connection.php');


    $data_points = array();
    
    $stmt = $conn->prepare("SELECT MONTHNAME(tarikh) AS label, SUM(payamount) AS y FROM paymentcust GROUP BY MONTH(tarikh) ");
    $stmt->execute();
    $result = $stmt -> get_result();

   /* fetch values */
   while ($row = $result->fetch_assoc()) 
    {
        $data_points[] = $row;

        // $point = array("label" => $tarikh5 , "y" => $total5);
        // array_push($data_points, $point);     
    }

    echo json_encode($data_points);
    
    $stmt->close();
    $conn->close();



// {
//     $data_points = array();
    
//     $result = mysqli_query($conn,"SELECT MONTHNAME(tarikh) AS MONTH, SUM(payamount) AS Total FROM paymentcust GROUP BY MONTH(tarikh)");
    
//     while($row = mysqli_fetch_array($result))
//     {        
//         $point = array("label" => $row["MONTH"] , "y" => $row["Total"]);
//         array_push($data_points, $point);        
//     }
    
//     echo json_encode($data_points, JSON_NUMERIC_CHECK);
// }
?>