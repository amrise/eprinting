<?php
    session_start();
    include('connection.php'); 
    if(isset($_POST['submit'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = md5($_POST['password']);

    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $account = "";
    
    $stmt = $conn->prepare("SELECT username, password, account FROM users WHERE username=? AND password=? LIMIT 1");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $password, $account);
    $stmt->store_result();
    if($stmt->num_rows == 1)  //To check if the row exists
        {
            if($stmt->fetch()) //fetching the contents of the row
            {
               if ($account == '0') 
               {
                $_SESSION['Logged'] = 0;
                $_SESSION['username'] = $username;
                echo '<script language="javascript">';
			    echo 'window.location.href="customer/custorder.php";';
			    echo '</script>'; 
               } 
               else if ($account == '1') 
               {
                   $_SESSION['Logged'] = 1;
                   $_SESSION['username'] = $username;
                   echo '<script language="javascript">';
			       echo 'window.location.href="administrator/orderlist.php";';
			       echo '</script>'; 
               }
               else if ($account == '2') 
               {
                   $_SESSION['Logged'] = 2;
                   $_SESSION['username'] = $username;
                   echo '<script language="javascript">';
			       echo 'window.location.href="staff/printinglist.php";';
			       echo '</script>'; 
               }
               else
               {
                   echo 'Fail to Login!';
               }
           }
    }
    else {
        echo "INVALID USERNAME/PASSWORD Combination!";
    }
    $stmt->close();
}
else 
{   
}
$conn->close();
?> 