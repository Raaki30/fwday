<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Flowers Day 2024</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="icon" type="image/x-icon" href="https://w7.pngwing.com/pngs/353/677/png-transparent-flower-favicon-pink-pink-flower-s-purple-blue-symmetry.png">

        <script src="https://app-sandbox.duitku.com/lib/js/duitku.js"></script>
    </head>
    <body>

        

        <script type="text/javascript">
            var submitted = false;
        </script>
        <iframe name="hiddenConfirm" id="hiddenConfirm" style="display: none" onload="if(submitted){window.location='submitted.html';}"></iframe>
        <h1 class="text-center">Flowers Day 2024</h1>
        <form onsubmit="submitted=true" id="form">
            
            <section id="pengirim-section">
                <h3 class="text-center">Data Pengirim</h3>
                <div class="data-pengirim">
                    <!-- <label for="nama-penerima">Nama Pengirim: </label> -->
                    <input type="text" placeholder="Nama Pengirim" id="namaPengirim" name="namaPengirim" required />
                    <span class="text-danger"> <br />*Isi "Anonymous" jika nama tidak ingin ditampilkan</span>
                </div>

                <div class="data-pengirim">
                    <!-- <label for="kelas-pengirim">Kelas: </label> -->
                    <select id="kelasPengirim" name="kelasPengirim">
                        <option value="Anonymous">Anonymous</option>
                        <option value="X-1">X-1</option>
                        <option value="X-2">X-2</option>
                        <option value="X-3">X-3</option>
                        <option value="X-4">X-4</option>
                        <option value="X-5">X-5</option>
                        <option value="X-6">X-6</option>
                        <option value="X-7">X-7</option>
                        <option value="X-8">X-8</option>
                        <option value="X-9">X-9</option>
                        <option value="XI-1">XI-1</option>
                        <option value="XI-2">XI-2</option>
                        <option value="XI-3">XI-3</option>
                        <option value="XI-4">XI-4</option>
                        <option value="XI-5">XI-5</option>
                        <option value="XI-6">XI-6</option>
                        <option value="XI-7">XI-7</option>
                        <option value="XI-8">XI-8</option>
                        <option value="XI-9">XI-9</option>
                        <option value="XII-1">XII-1</option>
                        <option value="XII-2">XII-2</option>
                        <option value="XII-3">XII-3</option>
                        <option value="XII-4">XII-4</option>
                        <option value="XII-5">XII-5</option>
                        <option value="XII-6">XII-6</option>
                        <option value="XII-7">XII-7</option>
                        <option value="XII-8">XII-8</option>
                    </select>
                    <span class="text-danger"> <br />*Isi dengan kelasmu jika tidak dikirim secara anonim</span>
                </div>
                <div class="data-pengirim">
                    <!-- <label for="email-pengirim">Email Pengirim:</label> -->
                    <input type="email" name="emailPengirim" id="emailPengirim" placeholder="Email Pengirim" required />
                </div>
                <div class="data-pengirim">
                    <!-- <label for="nomor-telepon-pengirim"></label> -->
                    <input type="number" name="nomorTeleponPengirim" id="nomorTeleponPengirim" placeholder="No HP Pengirim" required />
                </div>
                <div class="data-pengirim" onclick="checkFieldsAndShowSection()">
                    <div class="tombol-next"  style="display: block">Next</div>
                </div>
            </section>
            <section id="penerima-section" style="display: none">
            <button id="tambah-penerima-btn" onclick="addPenerima()" class="btn btn-warning" style="display: none">+ tambah penerima</button> 
                <table class="" id="all-penerima">
                    <tbody class="overflow-scroll text-center" onchange="showHargaKeseluruhan()">
                        <tr>
                            <th>Nama Penerima</th>
                            <th>Kelas Penerima</th>
                            <th>
                                Paket A <br />
                                (20.000)
                            </th>
                            <th>
                                Paket B <br />
                                (25.000)
                            </th>
                            <th>
                                Bouquet <br />
                                (15.000)
                            </th>
                            <th>
                                Batangan <br />
                                (10.000)
                            </th>
                            <th>
                                Kartu Ucapan <br />
                                (5.000)
                            </th>
                            <th>Total Harga <br /></th>
                            <th>Ket.</th>
                        </tr>
                        <tr id="penerima-1" onchange="showHarga('penerima-1')">
                            <td>
                                <input type="text" placeholder="Ketik nama di sini" id="nama-penerima" name="namaPenerima1" required />
                            </td>
                            <td>
                                <select id="kelas-penerima" name="kelasPenerima1">
                                    <option value="X-1">X-1</option>
                                    <option value="X-2">X-2</option>
                                    <option value="X-3">X-3</option>
                                    <option value="X-4">X-4</option>
                                    <option value="X-5">X-5</option>
                                    <option value="X-6">X-6</option>
                                    <option value="X-7">X-7</option>
                                    <option value="X-8">X-8</option>
                                    <option value="X-9">X-9</option>
                                    <option value="XI-1">XI-1</option>
                                    <option value="XI-2">XI-2</option>
                                    <option value="XI-3">XI-3</option>
                                    <option value="XI-4">XI-4</option>
                                    <option value="XI-5">XI-5</option>
                                    <option value="XI-6">XI-6</option>
                                    <option value="XI-7">XI-7</option>
                                    <option value="XI-8">XI-8</option>
                                    <option value="XI-9">XI-9</option>
                                    <option value="XII-1">XII-1</option>
                                    <option value="XII-2">XII-2</option>
                                    <option value="XII-3">XII-3</option>
                                    <option value="XII-4">XII-4</option>
                                    <option value="XII-5">XII-5</option>
                                    <option value="XII-6">XII-6</option>
                                    <option value="XII-7">XII-7</option>
                                    <option value="XII-8">XII-8</option>
                                </select>
                            </td>
                            <td>
                                <input type="checkbox" name="paketAPenerima1" id="paket-A" value="1" />
                            </td>
                            <td>
                                <input type="checkbox" name="paketBPenerima1" id="paket-B" value="1" />
                            </td>
                            <td>
                                <input type="checkbox" name="bouquetPenerima1" id="bouquet" value="1" />
                            </td>
                            <td>
                                <input type="checkbox" name="batanganPenerima1" id="batangan" value="1" />
                            </td>
                            <td>
                                <textarea type="text" name="pesanPenerima1" placeholder="Ketik pesanmu di sini" id="pesan" disabled></textarea>
                            </td>
                            <td><span id="harga">-</span></td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="">Total Harga:<span id="total-harga-keseluruhan">-</span></h3>
                <input type="hidden" name="amount" id="amount" value="">
                <label>Pilih Metode Pembayaran</label>
					<select id="paymentMethod" class="form-control">
						<option value="SP">QRIS + biaya transaksi Rp. 0</option>
						<option value="BC">VA BCA + biaya transaksi Rp. 5000</option>
                        <option value="M2">VA MANDIRI + biaya transaksi Rp. 3000</option>
                        <option value="I1">VA BNI + biaya transaksi Rp. 3000</option>
                        <option value="B1">VA CIMB NIAGA + biaya transaksi Rp. 3000</option>
                        
					</select>
                    <input type="checkbox" id="terms" name="terms" value="agree" required>
                    <label for="terms">Saya telah menyetujui seluruh syarat dan ketentuan yang berlaku</label>
                    <input type="hidden" name="reference" id="reference" value="">
                <button type="button" onclick="payment()" class="btn btn-primary w-100 my-2 shadow" id="purchase">Purchase</button>
                    <input type="submit" name="" id="tombol-submit" style="display: none" />
            </section>
        </form>
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <script type="text/javascript">
                   
                   
            var submitted = false;

            
            

            function payment() {
                var namaPengirim = document.getElementById('namaPengirim').value;
                var nomorTeleponPengirim = document.getElementById('nomorTeleponPengirim').value;
                var emailPengirim = document.getElementById('emailPengirim').value;
                var paymentMethod = document.getElementById('paymentMethod').value;
                var paymentUi = 1;
                
                
                var termsCheckbox = document.getElementById('terms');

                // Check if the terms checkbox is checked
                if (!termsCheckbox.checked) {
                    alert('Anda harus menyetujui syarat dan ketentuan untuk melanjutkan pembayaran.');
                    return;
                }

                $.ajax({
				type: "POST",
				data: {
					
					paymentMethod: paymentMethod, 
					hargaTotal: hargaTotal,
                    email: emailPengirim,
                    nomorTelepon: nomorTeleponPengirim,
                    namaPengirim: namaPengirim
				},
				url: 'Invoice.php',
				dataType: "json",
				cache: false,
				success: function (result) {
					console.log(result.reference);
					console.log(result);

					

					checkout.process(result.reference, {
						successEvent: function (result) {
							// begin your code here
							console.log('success');
							console.log(result);
                            document.getElementById('reference').value = result.merchantOrderId;
                            $('#purchase').attr('disabled', true); // Disable the button
                            $('#purchase').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'); // Change button text to indicate loading
							if (result.resultCode === '00') {
                                

                                // Collect form data
                                var reference = $('input[name="reference"]').val();
                                var namaPengirim = $('input[name="namaPengirim"]').val();
                                var kelasPengirim = $('select[name="kelasPengirim"]').val();
                                var emailPengirim = $('input[name="emailPengirim"]').val();
                                var nomorTeleponPengirim = $('input[name="nomorTeleponPengirim"]').val();


                                var jsonData = [];


                                var namaPenerima1 = $('input[name="namaPenerima1"]').val();
                                var kelasPenerima1 = $('select[name="kelasPenerima1"]').val();
                                var paketAPenerima1 = $('input[name="paketAPenerima1"]').is(':checked') ? "1" : "";
                                var paketBPenerima1 = $('input[name="paketBPenerima1"]').is(':checked') ? "1" : "";
                                var bouquetPenerima1 = $('input[name="bouquetPenerima1"]').is(':checked') ? "1" : "";
                                var batanganPenerima1 = $('input[name="batanganPenerima1"]').is(':checked') ? "1" : "";
                                var pesanPenerima1 = $('textarea[name="pesanPenerima1"]').val();

                                var namaPenerima2 = $('input[name="namaPenerima2"]').val();
                                var kelasPenerima2 = $('select[name="kelasPenerima2"]').val();
                                var paketAPenerima2 = $('input[name="paketAPenerima2"]').is(':checked') ? "1" : "";
                                var paketBPenerima2 = $('input[name="paketBPenerima2"]').is(':checked') ? "1" : "";
                                var bouquetPenerima2 = $('input[name="bouquetPenerima2"]').is(':checked') ? "1" : "";
                                var batanganPenerima2 = $('input[name="batanganPenerima2"]').is(':checked') ? "1" : "";
                                var pesanPenerima2 = $('textarea[name="pesanPenerima2"]').val();

                                var namaPenerima3 = $('input[name="namaPenerima3"]').val();
                                var kelasPenerima3 = $('select[name="kelasPenerima3"]').val();
                                var paketAPenerima3 = $('input[name="paketAPenerima3"]').is(':checked') ? "1" : "";
                                var paketBPenerima3 = $('input[name="paketBPenerima3"]').is(':checked') ? "1" : "";
                                var bouquetPenerima3 = $('input[name="bouquetPenerima3"]').is(':checked') ? "1" : "";
                                var batanganPenerima3 = $('input[name="batanganPenerima3"]').is(':checked') ? "1" : "";
                                var pesanPenerima3 = $('textarea[name="pesanPenerima3"]').val();

                                var namaPenerima4 = $('input[name="namaPenerima4"]').val();
                                var kelasPenerima4 = $('select[name="kelasPenerima4"]').val();
                                var paketAPenerima4 = $('input[name="paketAPenerima4"]').is(':checked') ? "1" : "";
                                var paketBPenerima4 = $('input[name="paketBPenerima4"]').is(':checked') ? "1" : "";
                                var bouquetPenerima4 = $('input[name="bouquetPenerima4"]').is(':checked') ? "1" : "";
                                var batanganPenerima4 = $('input[name="batanganPenerima4"]').is(':checked') ? "1" : "";
                                var pesanPenerima4 = $('textarea[name="pesanPenerima4"]').val();

                                var namaPenerima5 = $('input[name="namaPenerima5"]').val();
                                var kelasPenerima5 = $('select[name="kelasPenerima5"]').val();
                                var paketAPenerima5 = $('input[name="paketAPenerima5"]').is(':checked') ? "1" : "";
                                var paketBPenerima5 = $('input[name="paketBPenerima5"]').is(':checked') ? "1" : "";
                                var bouquetPenerima5 = $('input[name="bouquetPenerima5"]').is(':checked') ? "1" : "";
                                var batanganPenerima5 = $('input[name="batanganPenerima5"]').is(':checked') ? "1" : "";
                                var pesanPenerima5 = $('textarea[name="pesanPenerima5"]').val();

                                // Menggunakan data yang telah diambil dari masing-masing input
                                // Anda dapat melakukan apa pun yang diperlukan dengan data ini



                                
                                        var penerimaData = {
                                            "reference": reference,
                                            "namaPengirim": namaPengirim,
                                            "kelasPengirim": kelasPengirim,
                                            "emailPengirim": emailPengirim,
                                            "nomorTeleponPengirim": nomorTeleponPengirim,

                                            "namaPenerima1": namaPenerima1,
                                            "kelasPenerima1": kelasPenerima1,
                                            "paketAPenerima1": paketAPenerima1,
                                            "paketBPenerima1": paketBPenerima1,
                                            "bouquetPenerima1": bouquetPenerima1,
                                            "batanganPenerima1": batanganPenerima1,
                                            "pesanPenerima1": pesanPenerima1,

                                            "namaPenerima2": namaPenerima2,
                                            "kelasPenerima2": kelasPenerima2,
                                            "paketAPenerima2": paketAPenerima2,
                                            "paketBPenerima2": paketBPenerima2,
                                            "bouquetPenerima2": bouquetPenerima2,
                                            "batanganPenerima2": batanganPenerima2,
                                            "pesanPenerima2": pesanPenerima2,

                                            "namaPenerima3": namaPenerima3,
                                            "kelasPenerima3": kelasPenerima3,
                                            "paketAPenerima3": paketAPenerima3,
                                            "paketBPenerima3": paketBPenerima3,
                                            "bouquetPenerima3": bouquetPenerima3,
                                            "batanganPenerima3": batanganPenerima3,
                                            "pesanPenerima3": pesanPenerima3,

                                            "namaPenerima4": namaPenerima4,
                                            "kelasPenerima4": kelasPenerima4,
                                            "paketAPenerima4": paketAPenerima4,
                                            "paketBPenerima4": paketBPenerima4,
                                            "bouquetPenerima4": bouquetPenerima4,
                                            "batanganPenerima4": batanganPenerima4,
                                            "pesanPenerima4": pesanPenerima4,

                                            "namaPenerima5": namaPenerima5,
                                            "kelasPenerima5": kelasPenerima5,
                                            "paketAPenerima5": paketAPenerima5,
                                            "paketBPenerima5": paketBPenerima5,
                                            "bouquetPenerima5": bouquetPenerima5,
                                            "batanganPenerima5": batanganPenerima5,
                                            "pesanPenerima5": pesanPenerima5
                                        };

                                        jsonData.push(penerimaData);
                                    


                                if (jsonData.length > 0) { // Kirim data hanya jika jsonData tidak kosong
                                    var jsonString = JSON.stringify(jsonData);

                                    $.ajax({
                                        url: 'https://script.google.com/macros/s/AKfycbxSA9qZqd3gC-u38q9xDzHvVUcv_gLhyZvbSyHZBMHOeKl29YvnCPQv0Vlm-dABi_Dw/exec',
                                        method: 'POST',
                                        data: { jsonData: jsonString },
                                        dataType: 'json',
                                        success: function(response) {
                                            console.log('Success:', response);

                                            console.log(penerimaData);
                                            window.location.href = 'success.php';
                                            
                                        },
                                        error: function(jqXHR, textStatus, errorThrown) {
                                            console.log('Error:', textStatus, errorThrown);
                                            console.log(penerimaData)
                                            window.location.href = 'failed.php';
                                        }
                                    });
                                } else {
                                    alert('Gagal memproses data. Hubungi Support');
                                }
                            
                        }
                            
                        
						},
						pendingEvent: function (result) {
							// begin your code here
							console.log('pending');
							console.log(result);
							alert('Menunggu Pembayaran');
						},
						errorEvent: function (result) {
							// begin your code here
							console.log('error');
							console.log(result);
							alert('Pembayaran Gagal atau Bermasalah. Hubungi Tim Kami');
						},
						closeEvent: function (result) {
							// begin your code here
							console.log('customer closed the popup without finishing the payment');
							console.log(result);
							alert('Pembayaran Dibatalkan');
						}
					});

				},
			});

                
            }








   
            

        </script>   
           
    </body>
    <template id="template-penerima">
        <tr id="penerima" onchange="showHarga('penerima')">
            

            <td>
                <input type="text" placeholder="Ketik nama di sini" id="nama-penerima" name="entry.1336288915" required />
            </td>
            <td>
                <select id="kelas-penerima" required name="entry.1967255455">
                    <option value="X-1">X-1</option>
                    <option value="X-2">X-2</option>
                    <option value="X-3">X-3</option>
                    <option value="X-4">X-4</option>
                    <option value="X-5">X-5</option>
                    <option value="X-6">X-6</option>
                    <option value="X-7">X-7</option>
                    <option value="X-8">X-8</option>
                    <option value="X-9">X-9</option>
                    <option value="XI-1">XI-1</option>
                    <option value="XI-2">XI-2</option>
                    <option value="XI-3">XI-3</option>
                    <option value="XI-4">XI-4</option>
                    <option value="XI-5">XI-5</option>
                    <option value="XI-6">XI-6</option>
                    <option value="XI-7">XI-7</option>
                    <option value="XI-8">XI-8</option>
                    <option value="XI-9">XI-9</option>
                    <option value="XII-1">XII-1</option>
                    <option value="XII-2">XII-2</option>
                    <option value="XII-3">XII-3</option>
                    <option value="XII-4">XII-4</option>
                    <option value="XII-5">XII-5</option>
                    <option value="XII-6">XII-6</option>
                    <option value="XII-7">XII-7</option>
                    <option value="XII-8">XII-8</option>
                </select>
            </td>
            <td><input type="checkbox" name="entry.851185307" id="paket-A" value="Paket A" class="paket-penerima" /></td>
            <td><input type="checkbox" name="entry.851185307" id="paket-B" value="Paket B" class="paket-penerima" /></td>
            <td><input type="checkbox" name="entry.851185307" id="bouquet" value="Bouquet" /></td>
            <td><input type="checkbox" name="entry.851185307" id="batangan" value="Batangan" /></td>
            <td>
                <textarea type="text" name="entry.1519282563" placeholder="Ketik pesanmu di sini" id="pesan" disabled></textarea>
            </td>
            <td><span id="harga">-</span></td>
            <td>
                <button id="remove-button" class="btn btn-danger" onlick="removePenerima('penerima')">Hapus</button>
            </td>
        </tr>
    </template>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>


