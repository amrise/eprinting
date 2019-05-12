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



<!-- insert information payment into database -->
<?php 
require ('database/connection.php');

$stmt = $conn->prepare("INSERT INTO paymentcust (payID, payamount, paycustomer, tarikh) VALUES (?, ?, ?, now())");
$stmt->bind_param("sss", $IDpay, $amountpay, $customerpay);
$stmt->execute();

$stmt->close();
$conn->close();
?>



<!-- update status customer to In Process -->
<?php
require ('database/connection.php');
$id = intval($_GET['id']);

$stmt = $conn->prepare("UPDATE custorder SET statusorder='2' WHERE custorderID='$id' ");
$stmt->execute();

if ($conn) {
    echo '<script language="javascript">';
    echo 'alert("You have paid your printing booking. TQ!!");';
    echo 'window.location.href="customer/statusorder.php";';
    echo '</script>'; }
    else {
    echo '<script language="javascript">';
    echo 'alert("Payment Error");';
    echo '</script>'; }

$stmt->close();
$conn->close();
?>