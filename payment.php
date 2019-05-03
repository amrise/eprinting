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