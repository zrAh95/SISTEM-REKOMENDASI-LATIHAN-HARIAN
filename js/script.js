// script.js

document.getElementById('form-rekomendasi').addEventListener('submit', function(event) {
    const usia = document.getElementById('usia').value;
    const tingkatKebugaran = document.getElementById('tingkat_kebugaran').value;
    const tujuan = document.getElementById('tujuan').value;

    if (!usia || !tingkatKebugaran || !tujuan) {
        alert('Silakan isi semua field sebelum mengirim.');
        event.preventDefault(); // Mencegah pengiriman formulir
    }
});