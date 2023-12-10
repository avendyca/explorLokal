// script.js

function redirectToWhatsApp(jenisPaket) {
    // Ganti nomor telepon dengan nomor WhatsApp yang diinginkan
    var nomorTelepon = "+6287830654982";
    
    // Tentukan pesan berdasarkan jenis paket
    var pesan = "Halo, saya tertarik dengan paket " + jenisPaket + " di EksplorLokal. Bisa dibantu?";

    // Buat URL WhatsApp
    var urlWhatsApp = "https://wa.me/" + nomorTelepon + "/?text=" + encodeURIComponent(pesan);

    // Arahkan ke WhatsApp
    window.location.href = urlWhatsApp;
}
