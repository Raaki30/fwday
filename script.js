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
    // define element penerima
    var elementPenerima = document.getElementById(IDPenerima);

    // fetch all child  in element penerima
    var paketAchecked = elementPenerima.querySelector("#paket-A").checked;
    var paketBchecked = elementPenerima.querySelector("#paket-B").checked;
    var bouquetChecked = elementPenerima.querySelector("#bouquet").checked;
    var batanganChecked = elementPenerima.querySelector("#batangan").checked;
    var pesan = elementPenerima.querySelector("#pesan");

    var harga = elementPenerima.querySelector("#harga");

    var hargaSatuPenerima = 0;

    if (paketAchecked) {
        hargaSatuPenerima += hargaPaketA;
    }
    if (paketBchecked) {
        hargaSatuPenerima += hargaPaketB;
    }
    if (bouquetChecked) {
        hargaSatuPenerima += hargaBouquet;
    }
    if (batanganChecked) {
        hargaSatuPenerima += hargaBatangan;
    }

    if (paketAchecked || paketBchecked || bouquetChecked || batanganChecked) {
        pesan.removeAttribute("disabled");
    }
    if (!paketAchecked && !paketBchecked && !bouquetChecked && !batanganChecked) {
        pesan.setAttribute("disabled", "");
    }
    if (pesan.value != "") {
        hargaSatuPenerima += hargaPesan;
        // hargaTotal += hargaPesan;
    }

    // console.log(hargaTotal);
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

