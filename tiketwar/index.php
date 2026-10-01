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

    // contoh ambil konser pertama (buat logic tambahan)
    $hargaAsli = $daftarKonser[0]["harga"];
    $persenDiskon = 20;
    $hargaSetelahDiskon = $hargaAsli - ($hargaAsli * $persenDiskon / 100);

    $sisaTiket = $daftarKonser[0]["harga"] > 0 ? 15 : 0; 

    if ($sisaTiket > 10) {
        $statusTiket = "Masih Banyak";
    } elseif ($sisaTiket > 0) {
        $statusTiket = "Sisa Dikit, Buruan!";
    } else {
        $statusTiket = "Sold Out";
    }

    $kategori = $daftarKonser[0]["kategori"];
    switch ($kategori) {
        case "Festival": $badge = "Festival Pass"; break;
        case "VIP": $badge = "VIP Access"; break;
        case "Reguler": $badge = "Reguler"; break;
        default: $badge = "Kategori tidak dikenali";
    }
?>

<h2>Daftar Konser War Tiket Minggu Ini</h2>

<?php foreach ($daftarKonser as $konser) { ?>
    <div style="border: 1px solid #ccc; padding: 12px; margin-bottom: 8px;">
        <h3><?php echo $konser["nama"]; ?></h3>
        <p>Tanggal: <?php echo $konser["tanggal"]; ?></p>
        <p>Kategori: <?php echo $konser["kategori"]; ?></p>
        <p>Harga: Rp <?php echo number_format($konser["harga"], 0, ",", "."); ?></p>
    </div>
<?php } ?>

<hr>

<h3>Info Konser Terdekat</h3>
<p>Nama: <?php echo $daftarKonser[0]["nama"]; ?></p>
<p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>
<p>Harga asli: Rp <?php echo number_format($hargaAsli, 0, ",", "."); ?></p>
<p>Setelah diskon <?php echo $persenDiskon; ?>%: Rp <?php echo number_format($hargaSetelahDiskon, 0, ",", "."); ?></p>
<p>Status Tiket: <?php echo $statusTiket; ?></p>
<p>Kategori: <?php echo $badge; ?></p>

<?php 
    echo "<p>Selamat datang di TiketWar - war tiket konser paling gacorr!</p>"; 
?>

</body> 
</html>