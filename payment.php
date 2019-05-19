<!-- query braintree payment -->
<?php
require ('boot.php');

if (empty($_POST['payment_method_nonce'])) {
    header('location: customer/payorder.php');
}

$result = Braintree_Transaction::sale([
    'amount' => $_POST['bayar'],
    'paymentMethodNonce' => $_POST['payment_method_nonce'],
    'customer' => [
        'firstName' => $_POST['namacust'],
    ],
    'options' => ['submitForSettlement' => true ]
]);

if ($result->success === true) {

} else
{
    print_r($result->errors);
    die();
}
?>


<!-- variable information payment of id, amount, customer name -->
<?php
$IDpay = $result->transaction->id;
$amountpay = $result->transaction->amount;
$customerpay = $result->transaction->customer['firstName'];
?>



<!-- amik information utk table payment history -->
<?php
      require ('database/connection.php');
      $id = intval($_GET['id']);

      $stmt = $conn->prepare("SELECT warna, binding, transparent, amount, rombak FROM custorder WHERE custorderID = '$id'; ");
      $stmt->execute();
      $stmt->bind_result($colour, $binding, $transparent, $amount, $rombak);

     /* fetch values */
     while ($stmt->fetch()) 
      {
      $colour2 = $colour;
      $binding2 = $binding;
      $transparent2 = $transparent;
      $amount2 = $amount;
      $rombak2 = $rombak;
      }
      $stmt->close();
      $conn->close();
?>      



<!-- insert information payment into database -->
<?php 
require ('database/connection.php');

$stmt = $conn->prepare("INSERT INTO paymentcust (payID, payamount, paycustomer, tarikh, colour, binding, transparent, printamount, rombak) VALUES (?, ?, ?, now(), ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiiiis", $IDpay, $amountpay, $customerpay, $colour2, $binding2, $transparent2, $amount2, $rombak2);
$stmt->execute();

$stmt->close();
$conn->close();
?>



<!-- update status customer to In Process -->
<?php
require ('database/connection.php');

$stmt = $conn->prepare("UPDATE custorder SET statusorder='2' WHERE custorderID='$id' ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("You have paid your printing booking. We are processing your printing order. It may takes 1 or 2 days.  We notify you by email when your document is finished. TQ!!");';
    echo 'window.location.href="customer/statusorder.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Payment Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();
?>