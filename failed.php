<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gagal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://w7.pngwing.com/pngs/353/677/png-transparent-flower-favicon-pink-pink-flower-s-purple-blue-symmetry.png">
</head>
<body>
<div class="vh-100 d-flex justify-content-center align-items-center">
            <div>
                <div class="mb-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="75" height="75" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
    <path d="M8 1a7 7 0 1 1 0 14A7 7 0 0 1 8 1zM4.177 4.177a.75.75 0 0 0-1.06 1.06L7 8.061l-2.82 2.82a.75.75 0 0 0 1.06 1.06L8 9.061l2.82 2.82a.75.75 0 0 0 1.06-1.06L9.061 8l2.82-2.82a.75.75 0 0 0-1.06-1.06L8 6.939 5.18 4.12z" />
</svg>

                </div>
                <div class="text-center">
                    <h1>Gagal !</h1>
                    <p>Transaksi anda mengalami kendala. Silahkan hubungi kami</p>
                    <p>Order ID: <span id="orderReference"></span></p>
                    <a href="mailto:support@fwday.com">
                        <button class="btn btn-primary" href>Kontak Kami</button>
                    </a>
                    <a href="index.html">
                        <button class="btn btn-primary" href>Back Home</button>
                    </a>
                    
                </div>
            </div>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const reference = urlParams.get('reference');

    document.addEventListener('DOMContentLoaded', function() {
        // Tampilkan reference pada elemen dengan ID 'orderReference'
        document.getElementById('orderReference').innerText = reference;
    });
</script>            
</body>
</html>