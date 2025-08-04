# Basis Pengetahuan
latihan = {
    "kardio": [
        {"nama": "Lari", "durasi": 30, "frekuensi": 3},
        {"nama": "Bersepeda", "durasi": 30, "frekuensi": 3},
        {"nama": "HIIT", "durasi": 20, "frekuensi": 4},
    ],
    "kekuatan": [
        {"nama": "Push-Up", "durasi": 10, "frekuensi": 2},
        {"nama": "Squat", "durasi": 10, "frekuensi": 2},
        {"nama": "Deadlift", "durasi": 15, "frekuensi": 2},
        {"nama": "Plank", "durasi": 5, "frekuensi": 3},
        {"nama": "Pull-Up", "durasi": 10, "frekuensi": 2},
    ],
}

# Aturan Rekomendasi
def rekomendasi(tingkat_kebugaran, tujuan):
    if tingkat_kebugaran == "Pemula":
        if tujuan == "Penurunan Berat Badan":
            return [
                latihan["kardio"][0],  # Lari
                latihan["kekuatan"][0],  # Push-Up
                latihan["kekuatan"][1],  # Squat
            ]
        elif tujuan == "Kebugaran Umum":
            return [
                latihan["kardio"][1],  # Bersepeda
                latihan["kekuatan"][0],  # Push-Up
            ]
    elif tingkat_kebugaran == "Menengah":
        if tujuan == "Pembentukan Otot":
            return [
                latihan["kekuatan"][2],  # Deadlift
                latihan["kardio"][2],  # HIIT
                latihan["kekuatan"][4],  # Pull-Up
            ]
    elif tingkat_kebugaran == "Lanjutan":
        if tujuan == "Kebugaran Umum":
            return [
                latihan["kardio"][2],  # HIIT
                latihan["kekuatan"][3],  # Plank
                latihan["kekuatan"][1],  # Squat
            ]
    return []

# Fungsi untuk menampilkan rekomendasi
def tampilkan_rekomendasi(rekomendasi_latihan):
    print("Rekomendasi Latihan:")
    for item in rekomendasi_latihan:
        print(f"- {item['nama']} selama {item['durasi']} menit, {item['frekuensi']} kali seminggu")

# Input Pengguna
usia = int(input("Masukkan usia Anda: "))
tinggi_badan = float(input("Masukkan tinggi badan Anda (cm): "))
berat_badan = float(input("Masukkan berat badan Anda (kg): "))
tingkat_kebugaran = input("Masukkan tingkat kebugaran (Pemula/Menengah/Lanjutan): ")
tujuan = input("Masukkan tujuan latihan (Penurunan Berat Badan/Pembentukan Otot/Kebugaran Umum): ")

# Mendapatkan rekomendasi
rekomendasi_latihan = rekomendasi(tingkat_kebugaran, tujuan)

# Menampilkan rekomendasi
if rekomendasi_latihan:
    tampilkan_rekomendasi(rekomendasi_latihan)
else:
    print("Tidak ada rekomendasi yang sesuai untuk input Anda.")