
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Success - Flowers Day 2024</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="https://w7.pngwing.com/pngs/353/677/png-transparent-flower-favicon-pink-pink-flower-s-purple-blue-symmetry.png">
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div>
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>Pesanan anda telah berhasil dibuat</p>
                    <p>Order ID: <span id="orderReference"></span></p>
                    <a href="http://localhost:8080/fwday">
                        <button class="btn btn-primary" href>Pesan Lagi</button>
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