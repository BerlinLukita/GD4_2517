<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>TiketWar</title> 
</head> 
<body> 

<?php 
   $daftarKonser = [
    [
        "nama" => "Coldplay - Music of the Spheres",
        "tanggal" => "2026-03-15",
        "kategori" => "Festival",
        "harga" => 1500000
    ],
    [
        "nama" => "Dewa 19 Reunion Show",
        "tanggal" => "2026-04-02",
        "kategori" => "VIP",
        "harga" => 2500000
    ],
    [
        "nama" => "NCT Dream World Tour",
        "tanggal" => "2026-05-20",
        "kategori" => "Reguler",
        "harga" => 900000
    ],
 ];
    
    $hargaTiket = 1500000; 
    $sisaTiket = 25; 
    $sudahSoldOut = false; 
    $kategoriTiket = "Festival";
?>

<p>Nama Konser: <?php echo $daftarKonser[0]['nama']; ?></p> 
<p>Harga Tiket: Rp <?php echo number_format($daftarKonser[0]['harga'], 0, ',', '.'); ?></p> 
<p>Sisa Tiket: <?php echo $sisaTiket; ?></p> 
<p>Kategori Tiket: <?php echo $daftarKonser[0]['kategori']; ?></p> 
<p>Konser terdekat: <?php echo $daftarKonser[0]["nama"]; ?></p>
<p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>

<?php 
    echo "Selamat datang di TiketWar - war tiket konser paling gacorr!"; 
?>

</body> 
</html>