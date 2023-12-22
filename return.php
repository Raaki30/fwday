<?php

$kode = $_GET['resultCode'];

if ($kode === '00') {
    echo "<script>
    window.close();
    if (window.opener && !window.opener.closed) {
        var form = window.opener.document.getElementById('form');
        if (form) {
            form.submit(); 
        }
    }
    </script>";
} else {
    
    echo "Payment failed. Redirecting you back";
    
    
}

?>