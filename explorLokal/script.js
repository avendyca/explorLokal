function submitForm() {
    const form = document.getElementById("contact-form");
    // const name = form.elements["name"].value;
    const email = form.elements["email"].value;
    // const message = form.elements["message"].value;

    // Lakukan logika pengiriman data ke server atau tampilkan pesan konfirmasi
    // console.log("Nama: " + name);
    console.log("Email: " + email);
    // console.log("Pesan: " + message);

    // Tambahkan logika pengiriman data ke server di sini jika diperlukan
    alert("Pesan berhasil dikirim!");
    
}