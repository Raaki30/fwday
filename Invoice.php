<?php

$email = $_POST['email'];
$nomorTelepon = $_POST['nomorTelepon'];
$namaPengirim = $_POST['namaPengirim'];
$hargaTotal = $_POST['hargaTotal'];
$paymentMethod = $_POST['paymentMethod'];
$orderid = rand();

require_once dirname(__FILE__) . '\duitku-php\Duitku.php';

$duitkuConfig = new \Duitku\Config("eb8516616dbff70da5757e7176366487", "DS17543"); // 'YOUR_MERCHANT_KEY' and 'YOUR_MERCHANT_CODE'
$duitkuConfig->setSandboxMode(true);
// $duitkuConfig->setDuitkuLogs(false);


// $paymentMethod      = $paymentMethod; 
$paymentAmount      = $hargaTotal; // Amount
// $email              = $email; // your customer email
$phoneNumber        = $nomorTelepon; // your customer phone number (optional)
$productDetails     = "Flowers Day";
$merchantOrderId    = $orderid; // from merchant, unique   
$additionalParam    = ''; // optional
$merchantUserInfo   = ''; // optional
$customerVaName     = $namaPengirim; // display name on bank confirmation display
$callbackUrl        = 'http://localhost:8080/fwday/callback.php'; // url for callback
$returnUrl          = 'http://localhost:8080/fwday/return.php'; // url for redirect
$expiryPeriod       = 60; // set the expired time in minutes

// Customer Detail
$firstName          = $namaPengirim;
$lastName           = "";

// Address
$alamat             = "";
$city               = "Bandung";
$postalCode         = "";
$countryCode        = "ID";

$address = array(
    'firstName'     => $firstName,
    'lastName'      => $lastName,
    'address'       => $alamat,
    'city'          => $city,
    'postalCode'    => $postalCode,
    'phone'         => $phoneNumber,
    'countryCode'   => $countryCode
);

$customerDetail = array(
    'firstName'         => $firstName,
    'lastName'          => $lastName,
    'email'             => $email,
    'phoneNumber'       => $phoneNumber,
    'billingAddress'    => $address,
    'shippingAddress'   => $address
);


// Item Details
$item1 = array(
    'name'      => $productDetails,
    'price'     => $paymentAmount,
    'quantity'  => 1
);


$itemDetails = array(
    $item1
);

$params = array(
    'paymentMethod'     => $paymentMethod,
    'paymentAmount'     => $paymentAmount,
    'merchantOrderId'   => $merchantOrderId,
    'productDetails'    => $productDetails,
    'additionalParam'   => $additionalParam,
    'merchantUserInfo'  => $merchantUserInfo,
    'customerVaName'    => $customerVaName,
    'email'             => $email,
    'phoneNumber'       => $phoneNumber,
    'itemDetails'       => $itemDetails,
    'customerDetail'    => $customerDetail,
    'callbackUrl'       => $callbackUrl,
    'returnUrl'         => $returnUrl,
    'expiryPeriod'      => $expiryPeriod
);

try {
    // createInvoice Request
    $responseDuitkuPop = \Duitku\Pop::createInvoice($params, $duitkuConfig);

    header('Content-Type: application/json');
    echo $responseDuitkuPop;
} catch (Exception $e) {
    echo $e->getMessage();
}



