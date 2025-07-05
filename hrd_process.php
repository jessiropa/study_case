<?php
// 1. membuat array yang menampung data karyawan 

// array asosiatif
$karyawan1 = [
    "nama" => "Jessi", 
    "posisi" => "Website developer",
    "departemen" => "IT",
    "gaji" => "7000000",
    "aktif" => true
];

$karyawan2 = [
    "nama" => "Nuel", 
    "posisi" => "Product Manager",
    "departemen" => "Product Manager",
    "gaji" => "10000000",
    "aktif" => false
];
$karyawan3 = [
    "nama" => "Dian", 
    "posisi" => "KOL Specialist",
    "departemen" => "Marketing",
    "gaji" => "7000000",
    "aktif" => true
];

$data_karyawan = [$karyawan1, $karyawan2, $karyawan3];

// var_dump($data_karyawan);
$data = "";
// 2. Menampilkan daftar karyawan 
$data .="DAFTAR KARYAWAN : <br>";
foreach($data_karyawan as $kyn){
     $data .= "<p>";
    $data .= "Nama : ".$kyn['nama']." <br> ";
    $data .= "Posisi : ".$kyn['posisi']." <br> ";
    $data .= "Gaji : Rp.".number_format($kyn['gaji'],0,',','.')." <br> ";
    $data .= "<p>";
}

// latihan menggunakan kondisi 
// 3. analisis karyawan 

$data .= "Analisis Karyawan : <br>";

foreach($data_karyawan as $analis){
    $data .= "<p><strong>".$analis['nama']." : </strong></p>";

    if($analis['gaji'] > 7000000){
        $data .= "- Status Gaji : Gaji Tinggi <br>";
    }else{
        $data .= "- Status Gaji : Gaji Pas-pasan <br>";
    }

    if($analis['posisi'] == 'Website Developer'){
        $data .= "- Kategori : Developer <br>";
    }else{
        $data .= "- Kategori : Bukan Developer <br>";
    }

    if($analis['aktif'] == false){
        $data .= "- Status karyawan : Karyawan tidak aktif <br>";
    }else{
        $data .= "- Status karyawan : Karyawan aktif <br>";
    }
}

// Agregasi Data Sederhana (Perulangan & Variabel Akumulator)
// 4. menghitung gaji dan total karyawan aktif
$totalgaji = 0;
$jumlahkaryawanaktif = 0;

foreach($data_karyawan as $dt){
    if($dt['aktif'] == true){
        $totalgaji += $dt['gaji'];
        $jumlahkaryawanaktif++;
    }
}
$data .= "<p> Total gaji karyawan : Rp.".number_format($totalgaji,0,',','.')."</p>";
$data .= "<p> Total karyawan secara keseluruhan : ".$jumlahkaryawanaktif." orang </p>";

echo $data;



?>