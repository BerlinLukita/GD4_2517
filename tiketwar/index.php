<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>TiketWar</title> 
</head> 
<body> 

<?php 
    $namaKonser = "Coldplay - Music of the Spheres"; 
    $hargaTiket = 1500000; 
    $sisaTiket = 25; 
    $sudahSoldOut = false; 
    $kategoriTiket = "Festival";
?>

<p>Nama Konser: <?php echo $namaKonser; ?></p> 
<p>Harga Tiket: Rp <?php echo number_format($hargaTiket, 0, ',', '.'); ?></p> 
<p>Sisa Tiket: <?php echo $sisaTiket; ?></p> 
<p>Kategori Tiket: <?php echo $kategoriTiket; ?></p> 

<?php 
    echo "Selamat datang di TiketWar - war tiket konser paling gacorr!"; 
?>

</body> 
</html>