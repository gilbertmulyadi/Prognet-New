// Seleksi elemen tombol "Contact Me" dan pop-up
const contactButton = document.getElementById("contactButton");
const contactPopup = document.getElementById("contactPopup");

// Munculkan pop-up saat tombol Contact Me diklik
contactButton.addEventListener("click", function() {
    contactPopup.style.display = "block";
});

// Tutup pop-up saat tombol close (x) diklik
document.getElementById("closeButton").addEventListener("click", function() {
    contactPopup.style.display = "none";
});

// Handle pengiriman formulir (Anda dapat menambahkan kode pengiriman formulir sesuai kebutuhan)
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Tambahkan logika pengiriman formulir di sini
});

// Sembunyikan pop-up secara default saat halaman dimuat
contactPopup.style.display = "none";
