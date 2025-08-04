<?php
// Mengambil data dari form
$usia = $_POST['usia'];
$tingkat_kebugaran = $_POST['tingkat_kebugaran'];
$tujuan = $_POST['tujuan'];

// Basis Pengetahuan
$latihan = [
    "kardio" => [
        ["nama" => "Lari", "durasi" => 30, "frekuensi" => 3],
        ["nama" => "Bersepeda", "durasi" => 30, "frekuensi" => 3],
        ["nama" => "HIIT", "durasi" => 20, "frekuensi" => 4],
    ],
    "kekuatan" => [
        ["nama" => "Push-Up", "durasi" => 10, "frekuensi" => 2],
        ["nama" => "Squat", "durasi" => 10, "frekuensi" => 2],
        ["nama" => "Deadlift", "durasi" => 15, "frekuensi" => 2],
        ["nama" => "Plank", "durasi" => 5, "frekuensi" => 3],
        ["nama" => "Pull-Up", "durasi" => 10, "frekuensi" => 2],
    ],
];

// Aturan Rekomendasi
function rekomendasi($tingkat_kebugaran, $tujuan) {
    global $latihan;
    if ($tingkat_kebugaran == "Pemula") {
        if ($tujuan == "Penurunan Berat Badan") {
            return [$latihan["kardio"][0], $latihan["kekuatan"][0], $latihan["kekuatan"][1]]; // Lari, Push-Up, Squat
        } elseif ($tujuan == "Kebugaran Umum") {
            return [$latihan["kardio"][1], $latihan["kekuatan"][0]]; // Bersepeda, Push-Up
        }
    } elseif ($tingkat_kebugaran == "Menengah") {
        if ($tujuan == "Pembentukan Otot") {
            return [$latihan["kekuatan"][2], $latihan["kardio"][2], $latihan["kekuatan"][4]]; // Deadlift, HIIT, Pull-Up
        }
    } elseif ($tingkat_kebugaran == "Lanjutan") {
        if ($tujuan == "Kebugaran Umum") {
            return [$latihan["kardio"][2], $latihan["kekuatan"][3], $latihan["kekuatan"][1]]; // HIIT, Plank, Squat
        }
    }
    return []; // Jika tidak ada rekomendasi
}

// Mendapatkan rekomendasi
$rekomendasi_latihan = rekomendasi($tingkat_kebugaran, $tujuan);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Rekomendasi Latihan</title>
</head>
<body>
    <header>
        <h1>Rekomendasi Latihan Gym</h1>
    </header>
    <main>
        <h2>Hasil Rekomendasi</h2>
        <?php if (!empty($rekomendasi_latihan)): ?>
            <ul>
                <?php foreach ($rekomendasi_latihan as $lat): ?>
                    <li><?php echo $lat['nama']; ?> selama <?php echo $lat['durasi']; ?> menit, <?php echo $lat['frekuensi']; ?> kali seminggu</li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Tidak ada rekomendasi yang sesuai untuk input Anda.</p>
        <?php endif; ?>
        <a href="index.html">Kembali</a>
    </main>
    <footer>
        <p>&copy; 2025 Sistem Pakar Gym</p>
    </footer>
</body>
</html>