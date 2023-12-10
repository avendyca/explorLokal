function redirectToWhatsApp() {
    const nomorTelepon = '6287830654982'; // Ganti dengan nomor telepon tujuan
    const pesan = 'Halo, saya ingin melanjutkan pembayaran.';

    const url = `https://wa.me/${nomorTelepon}?text=${encodeURIComponent(pesan)}`;
    window.location.href = url;
}


function showPayment() {
    document.getElementById('paymentSection').style.display = 'block';
}

function completeOrder() {
    alert('Pesanan selesai. Terima kasih!');
}

document.getElementById('orderForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const nama = document.getElementById('nama').value;
    const namaPaket = document.getElementById('nama_paket').value;
    const noTelepon = document.getElementById('no_telepon').value;
    const alamat = document.getElementById('alamat').value;

    if (!nama || !namaPaket || !noTelepon || !alamat) {
        alert('Harap isi semua bidang formulir!');
        return;
    }

    document.getElementById('orderSentNotification').style.display = 'block';
});

document.getElementById('continueToWhatsApp').addEventListener('click', function() {
    redirectToWhatsApp();
});
