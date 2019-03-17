<?php
    include('connection.php'); 

    if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $account = "";
    

    $stmt = $conn->prepare("SELECT email, password, account FROM users WHERE email=? AND password=? LIMIT 1");
    $stmt->bind_param('ss', $email, $password);
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
                $_SESSION['password'] = $password;
                echo '<script language="javascript">';
			    echo 'window.location.href="customer/mainpage.php";';
			    echo '</script>'; 
               } 
               else if ($account == '1') 
               {
                   $_SESSION['Logged'] = 1;
                   $_SESSION['password'] = $password;
                   echo '<script language="javascript">';
			       echo 'window.location.href="administrator/mainpage.php";';
			       echo '</script>'; 
               }
               else if ($account == '2') 
               {
                   $_SESSION['Logged'] = 2;
                   $_SESSION['password'] = $password;
                   echo '<script language="javascript">';
			       echo 'window.location.href="staff/mainpage.php";';
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