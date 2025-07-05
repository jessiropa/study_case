<?php
// 1. membuat array yang menampung data karyawan 

// array asosiatif
$karyawan1 = [
    "nama" => "Jessi", 
    "posisi" => "Website developer",
    "departemen" => "IT",
    "gaji" => 7000000,
    "aktif" => true,
    "rating" => 4.3
];

$karyawan2 = [
    "nama" => "Nuel", 
    "posisi" => "Product Manager",
    "departemen" => "IT",
    "gaji" => 10000000,
    "aktif" => false,
    "rating" => 0,
];
$karyawan3 = [
    "nama" => "Dian", 
    "posisi" => "KOL Specialist",
    "departemen" => "Marketing",
    "gaji" => 7000000,
    "aktif" => true,
    "rating" => 4.5
];
$karyawan4 = [
    "nama" => "Marthin", 
    "posisi" => "Finance",
    "departemen" => "Finance",
    "gaji" => 7500000,
    "aktif" => true,
    "rating" => 3
];
$karyawan5 = [
    "nama" => "Farhan", 
    "posisi" => "Desain Grafis & Video Editing",
    "departemen" => "Marketing",
    "gaji" => 8000000,
    "aktif" => true,
    "rating" => 3.8
];
$karyawan6 = [
    "nama" => "Fanny", 
    "posisi" => "Manager Finance",
    "departemen" => "Finance",
    "gaji" => 10000000,
    "aktif" => true,
    "rating" => 4.3
];

$data_karyawan = [$karyawan1, $karyawan2, $karyawan3, $karyawan4, $karyawan5, $karyawan6];

// var_dump($data_karyawan);
$data = "";
// 2. Menampilkan daftar karyawan 
$data .="DAFTAR KARYAWAN : <br>";
foreach($data_karyawan as $kyn){
    // karyawan aktif saja
    if($kyn['aktif'] == true){
        $data .= "<p>";
        $data .= "Nama : ".$kyn['nama']." <br> ";
        $data .= "Posisi : ".$kyn['posisi']." <br> ";
        $data .= "Gaji : Rp.".number_format($kyn['gaji'],0,',','.')." <br> ";
        $data .= "<p>";
    }
    
}

// latihan menggunakan kondisi 
// 3. analisis karyawan 

$data .= "Analisis Karyawan : <br>";

foreach($data_karyawan as $analis){
    // tampilkan data hanya karyawan aktif
    if($analis['aktif'] == true){
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

$data .="=========================================================================<br><br>";
// mencari siapa yang memiliki rating tertinggi 
$data .="<b> DAFTAR KARYAWAN TERBAIK BULAN JUNI : </b><br><br>";

// sort data 

// foreach($data_karyawan as $key => $value){
//    $rating[$key] = $value['rating'];
// }

// array_multisort($rating, SORT_DESC, $data_karyawan);
array_multisort(array_column($data_karyawan, 'rating'), SORT_DESC, $data_karyawan);

foreach($data_karyawan as $srt){
    if($srt['aktif'] == true){
       $data .= "Nama : ".$srt['nama']." <br> ";
       $data .= "Departemen : ".$srt['departemen']." <br> ";
        $data .= "Rating Bulan Juni : ".$srt['rating']." <br> <br>";
    }
}

// Hitung gaji rata-rata karyawan 
// rumus rata-rata gaji : jumlah seluruh gaji / jumlah seluruh karyawan
$avg = $totalgaji / $jumlahkaryawanaktif;
$data .= "Rata-rata gaji karyawan : Rp.".number_format($avg,0,',','.')." <br> <br> ";

// menampilkan karyawan yang gajinya di atas rata-rata gaji
$data .="<b> DAFTAR KARYAWAN DENGAN GAJI DIATAS RATA-RATA : </b><br><br>";

foreach($data_karyawan as $gaji){
    if($gaji['gaji'] > $avg && $gaji['aktif'] == true){
       $data .= "Nama : ".$gaji['nama']." <br>";
       $data .= "Departemen : ".$gaji['departemen']." <br> <br>";
    }
}

// menghitung jumlah karyawan dari setiap departemen
$marketing = 0;
$it = 0;
$finance = 0;
$total_rating = 0;
$jumlahKaryawanMemilikiRating = 0;

foreach($data_karyawan as $count){
    if($count['aktif'] == true){
       if($count['departemen'] == 'Marketing'){
            $marketing++;
       }else if($count['departemen'] == 'IT'){
            $it++;
       }else if($count['departemen'] == 'Finance'){
            $finance++;
       }

    //    $avg_rating += $count['rating'];
    if($count['aktif'] == true && $count['rating'] > 0){ // Hanya hitung jika aktif dan rating > 0
        $total_rating += $count['rating'];
        $jumlahKaryawanMemilikiRating++;
    }
       
    }
}



$data .= "<p> Total karyawan departemen Marketing : ".$marketing." orang </p>";
$data .= "<p> Total karyawan departemen IT : ".$it." orang </p>";
$data .= "<p> Total karyawan departemen Finance : ".$finance." orang </p>";
if($jumlahKaryawanMemilikiRating > 0){
    // $totalRatingSemuaKaryawan / $jumlahKaryawanMemilikiRating;
    $data .= "<p> Total rata-rata rating karyawan bulan juni : ".$total_rating / $jumlahKaryawanMemilikiRating."</p>";
}



echo $data;



?>