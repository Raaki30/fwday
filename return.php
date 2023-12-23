<?php

$kode = $_GET['resultCode'];

if ($kode === '00') {
        
        echo "Payment success. Redirecting you back";
} else {
    
    echo "Payment failed. Redirecting you back";
    
    
}

?>