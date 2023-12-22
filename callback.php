<?php


require_once dirname(__FILE__) . '\duitku-php\Duitku.php';

$duitkuConfig = new \Duitku\Config("eb8516616dbff70da5757e7176366487", "DS17543"); // 'YOUR_MERCHANT_KEY' and 'YOUR_MERCHANT_CODE'
$duitkuConfig->setSandboxMode(true);
// $duitkuConfig->setDuitkuLogs(false);

try {
    $callback = \Duitku\Pop::callback($duitkuConfig);

    header('Content-Type: application/json');
    $notif = json_decode($callback);

    // var_dump($callback);

    if ($notif->resultCode == "00") {
        session_start();
        $_SESSION['payment_successful'] = true;
    } else if ($notif->resultCode == "01") {
        // Action Failed
    }
} catch (Exception $e) {
    http_response_code(400);
    echo $e->getMessage();
}
