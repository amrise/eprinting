<?php
 require 'php-mailer-master/PHPMailerAutoload.php';
 
  $email=$_POST['email'];
  echo $email;

  if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
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
    $mail->addAddress($email);               // Name is optional
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Printing Notification';
    $mail->Body    = 'Your document is already finished.<br/>
                          We keep your document at our printing centre. You can take your document at our location.<br/><br/>
                          <strong>Printing Centre</strong>.<br/>
                          No. 52, Jalan TU 42,<br/>
                          75450 Ayer Keroh,<br/>
                          Melaka ';
    
    $mail->AltBody = 'Your document is already finished.<br/>
                          We keep your document at our printing centre. You can take your document at our location.<br/><br/>
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


  //header("location: PARCEL.php");

?>
