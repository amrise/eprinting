<!-- set kan status customer to DONE -->
<?php
 require ('connection.php');
 
 $id = intval($_GET['id']);

$stmt = $conn->prepare("UPDATE custorder SET statusorder='4' WHERE rombak='$id' ");
$stmt->execute();
$stmt->close();
$conn->close();
?>


<!-- buatkan complete task papar di table complete print -->
<?php
 require ('connection.php');

$stmt = $conn->prepare("UPDATE taskprint SET statusprint='1' WHERE rombak='$id' ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("Customer Print is DONE!!");';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Submit Failed!!");';
    echo '</script>'; }

$stmt->close();
$conn->close();
?>


<!-- select email dari customer -->
<?php
    require ('connection.php');

      $stmt = $conn->prepare("SELECT email FROM taskprint WHERE rombak='$id' ");
      $stmt->execute();
      $stmt->bind_result($email);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $email1 = $email;
      }
      $stmt->close();
      $conn->close();
?>      




<!-- hantar email ke customer  -->
<?php
 require '../php-mailer-master/PHPMailerAutoload.php';
 
  if(filter_var($email1, FILTER_VALIDATE_EMAIL) === false){
    echo "<script type='text/javascript'>alert('The email input is invalid.')</script>";
  }
  else{
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'eprintingofficial@gmail.com';                 // SMTP username
    $mail->Password = 'Psmprinting19';                           // SMTP password
    $mail->SMTPSecure = false;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('eprintingofficial@gmail.com', 'ePrintingOfficial');     // Add a recipient
    $mail->addAddress($email1);               // Name is optional
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Printing Notification';
    $mail->Body    = 'Your document is already finished.<br/>
                          We keep your document at our printing centre. You can take your document at our location.<br/>
                          Thank you for choosing us for your print document. We hope to see you again!! <br/><br/>
                          <strong>Printing Centre</strong>.<br/>
                          No. 52, Jalan TU 42,<br/>
                          75450 Ayer Keroh,<br/>
                          Melaka ';
    
    $mail->AltBody = 'Your document is already finished.<br/>
                        We keep your document at our printing centre. You can take your document at our location.<br/>
                        Thank you for choosing us for your print document. We hope to see you again!! <br/><br/>
                        <strong>Printing Centre</strong>.<br/>
                        No. 52, Jalan TU 42,<br/>
                        75450 Ayer Keroh,<br/>
                        Melaka ';

        if(!$mail->send()) {
          echo "<script type='text/javascript'>alert('Message could not be sent.')</script>";
          echo "<script type='text/javascript'>alert('Mailer Error: ' . $mail->ErrorInfo)</script>";
        } else {
          echo "<script type='text/javascript'>alert('Email has been sent')</script>";
        }
      }
  header("location: ../staff/printinglist.php");
?>
