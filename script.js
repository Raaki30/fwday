// HARGA ALL ITEMS
var hargaPaketA = 20000;
var hargaPaketB = 25000;
var hargaBouquet = 15000;
var hargaBatangan = 10000;
var hargaPesan = 5000;

var jumlahPenerima = 1;

// var GFormsPengirimName = {
// //     // Data Pengirim
//     emailPengirim: "entry.1592840593",
//     nomorTeleponPengirim: "entry.812587699",
//     namaPengirim: "entry.287391154",
//     kelasPengirim: "entry.2133329921",

// //     // Data Penerima 1
// //     namaPenerima1: "entry.1336288915",
// //     kelasPenerima1: "entry.1967255455",
// //     paketPenerima1: "entry.851185307",
// //     pesanPenerima1: "entry.1519282563",

// //     // Data Penerima 2
// //     namaPengirim2: "entry.1352286003",
// //     kelasPengirim2: "entry.508962244",
// //     namaPenerima2: "entry.1016256525",
// //     kelasPenerima2: "entry.821868320",
// //     paketPenerima2: "entry.1083087706",
// //     pesanPenerima2: "entry.551598349",

// //     // Data Penerima 3
// //     namaPengirim3: "entry.1978832972",
// //     kelasPengirim3: "entry.1235934584",
// //     namaPenerima3: "entry.148643492",
// //     kelasPenerima3: "entry.1810191057",
// //     paketPenerima3: "entry.938679024",
// //     pesanPenerima3: "entry.1776113027",

// //     // Data Penerima 4
// //     namaPengirim4: "entry.747980189",
// //     kelasPengirim4: "entry.376659577",
// //     namaPenerima4: "entry.165216699",
// //     kelasPenerima4: "entry.1379831424",
// //     paketPenerima4: "entry.1701338243",
// //     pesanPenerima4: "entry.659937213",

// //     // Data Penerima 5
// //     namaPengirim5: "entry.2135190722",
// //     kelasPengirim5: "entry.1892512620",
// //     namaPenerima5: "entry.515182497",
// //     kelasPenerima5: "entry.866986164",
// //     paketPenerima5: "entry.61340545",
// //     pesanPenerima5: "entry.734914188",
// };

function checkFieldsAndShowSection() {
    // Dapatkan elemen input dan section
    var namaPengirim = document.getElementById("namaPengirim");
    var kelasPengirim = document.getElementById("kelasPengirim");
    var emailPengirim = document.getElementById("emailPengirim");
    var nomorTeleponPengirim = document.getElementById("nomorTeleponPengirim");
    var penerimaSection = document.getElementById("penerima-section");
    
    

    // Periksa apakah semua field telah diisi
    if (namaPengirim.value !== "" && kelasPengirim.value !== "" && emailPengirim.value !== "" && nomorTeleponPengirim.value !== "") {
        // Jika semua field telah diisi, tampilkan section penerima
        penerimaSection.style.display = "";
        document.querySelector(".tombol-next").style.display = "none";
        document.querySelector("#tombol-submit").style.display = "";
        document.querySelector("#tambah-penerima-btn").style.display = "";
        
       

        
    } else {
        // Jika tidak, beri peringatan kepada pengguna
        alert("Harap isi semua field data pengirim sebelum melanjutkan.");
    }
}


// var elementPenerima = document.getElementById(IDPenerima);
// var namaPenerimaValue = document.getElementById("nama-penerima").value;
// var kelasPenerimaValue = document.getElementById("kelas-penerima").value;
// var paketAchecked = elementPenerima.querySelector("#paket-A").checked;
// var paketBchecked = elementPenerima.querySelector("#paket-B").checked;
// var paketCchecked = elementPenerima.querySelector("#paket-C").checked;
// var pesanValue = document.getElementById("pesan").value;
// var hargaElement = elementPenerima.querySelector("#harga");
var hargaTotal = 0;

function showHarga(IDPenerima) {
    var elementPenerima = document.getElementById(IDPenerima);

    var paketAVal = parseInt(elementPenerima.querySelector("#paket-A").value);
    var paketBVal = parseInt(elementPenerima.querySelector("#paket-B").value);
    var bouquetVal = parseInt(elementPenerima.querySelector("#bouquet").value);
    var batanganVal = parseInt(elementPenerima.querySelector("#batangan").value);
    var pesan = elementPenerima.querySelector("#pesan");

    var harga = elementPenerima.querySelector("#harga");

    var hargaSatuPenerima = 0;

    hargaSatuPenerima += paketAVal * hargaPaketA;
    hargaSatuPenerima += paketBVal * hargaPaketB;
    hargaSatuPenerima += bouquetVal * hargaBouquet;
    hargaSatuPenerima += batanganVal * hargaBatangan;

    if (pesan.value !== "") {
        
        hargaSatuPenerima += hargaPesan;
    }

    if (hargaSatuPenerima > 0) {
        pesan.removeAttribute("disabled");
    } else {
        pesan.setAttribute("disabled", "");
    }

    harga.textContent = `${hargaSatuPenerima}`;
}




function showHargaKeseluruhan() {
    hargaTotal = 0;
    var totalHargaElement = document.querySelector("#total-harga-keseluruhan");
    var hargaElements = document.querySelectorAll("#harga");
    for (var i = 0; i < hargaElements.length; i++) {
        // Pastikan elemen "harga" berisi angka
        if (!isNaN(hargaElements[i].textContent)) {
            hargaTotal += Number(hargaElements[i].textContent);
        }
    }
    totalHargaElement.textContent = ` Rp.${hargaTotal.toLocaleString("id-ID")}`;
}

// Gunakan loop for untuk menjumlahkan semua elemen "harga"

function addPenerima() {
    if (jumlahPenerima < 5) {
        jumlahPenerima += 1;
        console.log(jumlahPenerima);
        // Dapatkan referensi ke elemen template
        var template = document.querySelector("#template-penerima");

        // Gunakan metode cloneNode untuk mengkloning konten template
        var clone = template.content.cloneNode(true);

        // Tambahkan kloningan ke dokumen
        var allPenerima = document.getElementById("all-penerima");
        var tableBody = allPenerima.querySelector("tbody");
        tableBody.appendChild(clone);
        // Dapatkan referensi ke elemen tr yang baru ditambahkan
        var newTr = tableBody.querySelector(`#penerima`);

        // Ubah atribut onchange dan id dari elemen tr
        newTr.setAttribute("onchange", `showHarga('penerima-${jumlahPenerima}')`);
        newTr.setAttribute("id", `penerima-${jumlahPenerima}`);

        // Dapatkan referensi ke elemen removeButton yang baru ditambahkan
        var removeButton = newTr.querySelector("#remove-button");

        // Ubah atribut onclick dan id dari elemen removeButton
        removeButton.setAttribute("onclick", `removePenerima('penerima-${jumlahPenerima}')`);
        removeButton.setAttribute("id", `remove-button-${jumlahPenerima}`);

        // GOOGLE FORMS THINGY WITH THE NAME


        var namaPenerima = newTr.querySelector("#nama-penerima");
        var kelasPenerima = newTr.querySelector("#kelas-penerima");
        var paketPenerimaA = newTr.querySelector("#paket-A");
        var paketPenerimaB = newTr.querySelector("#paket-B");
        var bouquetPenerima = newTr.querySelector("#bouquet");
        var batanganPenerima = newTr.querySelector("#batangan");
        var pesanPenerima = newTr.querySelector("#pesan");

        // Testing in console


        // console.log(namaPenerima);
        // console.log(kelasPenerima);
        // console.log(paketPenerimaA);
        // console.log(paketPenerimaB);
        // console.log(bouquetPenerima);
        // console.log(batanganPenerima);
        // console.log(pesanPenerima);
        // EDIT ATTRIBUTE NAME


        namaPenerima.setAttribute("name", [`namaPenerima${jumlahPenerima}`]); //
        kelasPenerima.setAttribute("name", [`kelasPenerima${jumlahPenerima}`]); //
        paketPenerimaA.setAttribute("name", [`paketAPenerima${jumlahPenerima}`]); //
        paketPenerimaB.setAttribute("name", [`paketBPenerima${jumlahPenerima}`]); //
        bouquetPenerima.setAttribute("name",[`bouquetPenerima${jumlahPenerima}`]); //
        batanganPenerima.setAttribute("name", [`batanganPenerima${jumlahPenerima}`]); //
        pesanPenerima.setAttribute("name", [`pesanPenerima${jumlahPenerima}`]); //




    } else if (jumlahPenerima >= 5) {
        alert("Maaf, jumlah penerima setiap transaksi maksimal sebanyak 5 orang. Silahkan selesaikan transaksi ini terlebih dahulu, lalu ulangi lagi dari awal dengan penerima yang berbeda.");
    }
}

function removePenerima(IDPenerima) {
    var penerima = document.getElementById(IDPenerima);
    var hargaPenerima = penerima.querySelector("#harga");
    hargaTotal -= Number(hargaPenerima.textContent);

    var totalHargaElement = document.querySelector("#total-harga-keseluruhan");
    totalHargaElement.textContent = ` Rp.${hargaTotal.toLocaleString("id-ID")}`;

    penerima.parentNode.removeChild(penerima);
    penerima.remove();
}

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
                                var paketAPenerima1 = $('select[name="paketAPenerima1"]').val();
                                var paketBPenerima1 = $('select[name="paketBPenerima1"]').val();
                                var bouquetPenerima1 = $('select[name="bouquetPenerima1"]').val();
                                var batanganPenerima1 = $('select[name="batanganPenerima1"]').val();
                                var pesanPenerima1 = $('textarea[name="pesanPenerima1"]').val();

                                var namaPenerima2 = $('input[name="namaPenerima2"]').val();
                                var kelasPenerima2 = $('select[name="kelasPenerima2"]').val();
                                var paketAPenerima2 = $('select[name="paketAPenerima2"]').val();
                                var paketBPenerima2 = $('select[name="paketBPenerima2"]').val();
                                var bouquetPenerima2 = $('select[name="bouquetPenerima2"]').val();
                                var batanganPenerima2 = $('select[name="batanganPenerima2"]').val();
                                var pesanPenerima2 = $('textarea[name="pesanPenerima2"]').val();


                                var namaPenerima3 = $('input[name="namaPenerima3"]').val();
                                var kelasPenerima3 = $('select[name="kelasPenerima3"]').val();
                                var paketAPenerima3 = $('select[name="paketAPenerima3"]').val();
                                var paketBPenerima3 = $('select[name="paketBPenerima3"]').val();
                                var bouquetPenerima3 = $('select[name="bouquetPenerima3"]').val();
                                var batanganPenerima3 = $('select[name="batanganPenerima3"]').val();
                                var pesanPenerima3 = $('textarea[name="pesanPenerima3"]').val();

                                var namaPenerima4 = $('input[name="namaPenerima4"]').val();
                                var kelasPenerima4 = $('select[name="kelasPenerima4"]').val();
                                var paketAPenerima4 = $('select[name="paketAPenerima4"]').val();
                                var paketBPenerima4 = $('select[name="paketBPenerima4"]').val();
                                var bouquetPenerima4 = $('select[name="bouquetPenerima4"]').val();
                                var batanganPenerima4 = $('select[name="batanganPenerima4"]').val();
                                var pesanPenerima4 = $('textarea[name="pesanPenerima4"]').val();

                                var namaPenerima5 = $('input[name="namaPenerima5"]').val();
                                var kelasPenerima5 = $('select[name="kelasPenerima5"]').val();
                                var paketAPenerima5 = $('select[name="paketAPenerima5"]').val();
                                var paketBPenerima5 = $('select[name="paketBPenerima5"]').val();
                                var bouquetPenerima5 = $('select[name="bouquetPenerima5"]').val();
                                var batanganPenerima5 = $('select[name="batanganPenerima5"]').val();
                                var pesanPenerima5 = $('textarea[name="pesanPenerima5"]').val();




                                
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
                                            window.location.href = 'success.php?reference=' + result.merchantOrderId;

                                            
                                        },
                                        error: function(jqXHR, textStatus, errorThrown) {
                                            console.log('Error:', textStatus, errorThrown);
                                            console.log(penerimaData)
                                            window.location.href = 'failed.php?reference=' + result.merchantOrderId;

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
