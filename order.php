<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Flowers Day 2024</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
        <link rel="stylesheet" href="styles.css" />
        <link rel="icon" type="image/x-icon" href="bunga.png">

        <script src="https://app-sandbox.duitku.com/lib/js/duitku.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.auto.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
        <meta name="apple-mobile-app-capable" content="yes">
        <meta name="apple-mobile-app-status-bar-style" content="black">
        
    </head>
    <body>

        

       
        <br><br>
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
                    <input type="number" name="nomorTeleponPengirim" id="nomorTeleponPengirim" placeholder="No HP Pengirim" required minlength="7" maxlength="15" />
                </div>
                <div class="data-pengirim" onclick="checkFieldsAndShowSection()">
                    <div class="tombol-next"  style="display: block">Next</div>
                </div>
            </section>
            <br><br>
            <section id="penerima-section" style="display: none">
            <button id="tambah-penerima-btn" onclick="addPenerima()" class="btn btn-warning" style="display: none">+ tambah penerima</button> 
            
                <table class="" id="all-penerima" >
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
                        <!-- <tr id="penerima-1" onchange="showHarga('penerima-1')">
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
                                <select name="paketAPenerima1" id="paket-A">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td>
                                <select name="paketBPenerima1" id="paket-B">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td>
                                <select name="bouquetPenerima1" id="bouquet">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>
                            <td>
                                <select name="batanganPenerima1" id="batangan">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </td>


                            <td>
                                <textarea type="text" name="pesanPenerima1" placeholder="Ketik pesanmu di sini" id="pesan" disabled maxlength="250"></textarea>
                            </td>
                            <td><span id="harga">-</span></td>
                            <td>-</td>
                        </tr> -->
                    </tbody>
                </table>
            
                <br>
                <h3 class="">Total Harga:<span id="total-harga-keseluruhan">-</span></h3>
                <input type="hidden" name="amount" id="amount" value="">
                <label>Pilih Metode Pembayaran</label>
					<select id="paymentMethod" class="form-control">
                        <option value="">Pilih Metode Pembayaran</option>
						<option value="SP">QRIS + biaya transaksi Rp. 0</option>
						<option value="BC">VA BCA + biaya transaksi Rp. 5000</option>
                        <option value="M2">VA MANDIRI + biaya transaksi Rp. 3000</option>
                        <option value="I1">VA BNI + biaya transaksi Rp. 3000</option>
                        <option value="B1">VA CIMB NIAGA + biaya transaksi Rp. 3000</option>
                        
					</select>
                    
                    <br>
                    <div class="checkbox-container" style="padding-left: 2px;">
                    <input type="checkbox" id="terms" name="terms" value="agree" required>
                    <label for="terms">Saya telah menyetujui seluruh syarat dan ketentuan yang berlaku</label>
                    </div>
                    <input type="hidden" name="reference" id="reference" value="">
                <button type="button" onclick="payment()" class="btn btn-primary w-100 my-2 shadow" id="purchase">Purchase</button>
                    <input type="submit" name="" id="tombol-submit" style="display: none" />
            </section>
        </form>
        <br><br>
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
        <script>
           
            document.getElementById('paymentMethod').addEventListener('change', function() {
                
                var additionalFee = 0;

                switch(this.value) {
                    case 'SP':
                        additionalFee = 0;
                        break;
                    case 'BC':
                        additionalFee = 5000;
                        break;
                    case 'I1':
                    case 'M2':
                    case 'B1':
                        additionalFee = 3000;
                        break;
                }
                var totalPrice = hargaTotal + additionalFee;
                var formattedTotalPrice = totalPrice.toLocaleString('id-ID', {minimumFractionDigits: 0});
                document.getElementById('total-harga-keseluruhan').innerText = ' Rp. ' + formattedTotalPrice;
            });
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
            <td>
                <select name="a" id="paket-A">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td>
                <select name="b" id="paket-B">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td>
                <select name="bb" id="bouquet">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>
            <td>
                <select name="bbbbb" id="batangan">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </td>

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


