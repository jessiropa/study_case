# Latihan Logika PHP: Studi Kasus Pemrosesan Data Karyawan

Repositori ini berisi latihan studi kasus PHP untuk mengasah kemampuan logika dan dasar-dasar pemrograman PHP, termasuk penggunaan variabel, tipe data, array, kondisional (`if-else`), perulangan (`for`/`foreach`), dan fungsi-fungsi manipulasi array.

---

## Studi Kasus 1: "Mini HR Data Processor"

**Skenario:**

Anda diminta untuk membuat sebuah skrip PHP sederhana yang akan memproses data awal karyawan. Data ini belum disimpan di database, melainkan masih dalam bentuk array di dalam kode Anda. Skrip ini harus bisa:

1.  Menyimpan daftar karyawan beserta detailnya.
2.  Menampilkan informasi dasar setiap karyawan.
3.  Mengidentifikasi karyawan dengan kriteria tertentu (misal: gaji di atas rata-rata atau posisi tertentu).
4.  Menghitung total gaji atau jumlah karyawan.

**Tugas Anda:**

1.  **Bagian 1: Mendefinisikan Data Karyawan (Variabel, Tipe Data, Array)**

    - Buat sebuah variabel **array asosiatif** bernama `$karyawan1` yang menyimpan detail satu karyawan (nama, posisi, departemen, gaji, status_aktif).
    - Buat variabel `$karyawan2` dan `$karyawan3` dengan struktur yang sama, isi data yang berbeda.
    - Buat sebuah variabel **array multidimensi** bernama `$daftarKaryawan` yang berisi `$karyawan1`, `$karyawan2`, dan `$karyawan3`.

2.  **Bagian 2: Menampilkan Daftar Karyawan (Perulangan `foreach`)**

    - Gunakan perulangan `foreach` untuk mengiterasi `$daftarKaryawan`.
    - Di dalam perulangan, cetak nama, posisi, dan gaji setiap karyawan dengan format yang rapi.

3.  **Bagian 3: Kondisi Karyawan (Kondisional `if-else`)**

    - Gunakan perulangan `foreach` lagi untuk `$daftarKaryawan`.
    - Di dalam perulangan, cek kondisi dan cetak pesan yang sesuai:
      - Jika `gaji` karyawan lebih besar dari 7.000.000, cetak "Gaji Tinggi".
      - Jika `posisi` karyawan adalah "Software Engineer", cetak "Ini Developer!".
      - Jika `status_aktif` adalah `false`, cetak "Karyawan Tidak Aktif".

4.  **Bagian 4: Agregasi Data Sederhana (Perulangan & Variabel Akumulator)**
    - Hitung total gaji dari semua karyawan aktif.
    - Hitung berapa jumlah karyawan yang berstatus aktif.
    - Cetak hasilnya.

---

## Studi Kasus 2: "Karyawan Terbaik Bulan Ini" (Revisi)

**Skenario:**

Anda diminta untuk membantu departemen HR dalam mengidentifikasi "Karyawan Terbaik Bulan Ini" berdasarkan kriteria tertentu. Anda memiliki data karyawan dalam bentuk array PHP.

**Data Awal Anda:**

Bayangkan Anda memiliki daftar karyawan (seperti array `$daftarKaryawan` yang berisi beberapa karyawan, masing-masing dengan `nama`, `posisi`, `departemen`, `gaji`, dan `rating_kinerja_bulan_ini` dengan skala 1-5, bisa desimal).

_Contoh data satu karyawan:_
\*Karyawan:

\*Nama: "Doni Pratama"

\*Posisi: "Junior Developer"

\*Departemen: "IT"

\*Gaji: 7500000

\*Rating Kinerja Bulan Ini: 4.5 (skala 1-5)

_(Anda perlu membuat setidaknya 5 karyawan dengan data yang bervariasi.)_

**Tugas Anda (Apa yang Perlu Dilakukan dengan PHP):**

1.  **Siapkan Data Karyawan:**

    - Buat sebuah variabel **array multidimensi** yang berisi detail setidaknya **5 karyawan**. Setiap karyawan harus memiliki `nama`, `posisi`, `departemen`, `gaji`, dan `rating_kinerja_bulan_ini`.

2.  **Identifikasi Karyawan Terbaik Berdasarkan Rating Keseluruhan:**

    - Tentukan siapa (atau siapa saja) karyawan yang memiliki `rating_kinerja_bulan_ini` **tertinggi** dari **seluruh karyawan aktif di semua departemen**.
    - Cetak nama Karyawan (atau karyawan-karyawan) yang memiliki rating tertinggi tersebut.

3.  **Identifikasi Karyawan dengan Gaji di Atas Rata-rata Keseluruhan:**

    - Pertama, hitunglah **rata-rata gaji** dari **semua karyawan aktif** yang ada dalam data Anda.
    - Kemudian, identifikasi dan cetak nama karyawan-karyawan yang memiliki `gaji` **di atas rata-rata gaji keseluruhan** yang sudah Anda hitung sebelumnya.

4.  **Tampilkan Statistik Departemen dan Rating Keseluruhan:**
    - Cetak **jumlah total karyawan** per departemen (contoh: "Marketing", "IT", "Finance").
    - Cetak **rata-rata rating kinerja** dari **semua karyawan aktif** secara keseluruhan.

---
