<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["daftarWar"])) {
    $_SESSION["daftarWar"] = [];
}

$nama = $_POST["nama"];
$tanggal = $_POST["tanggal"];
$kategori = $_POST["kategori"];
$harga = $_POST["harga"];

$folderTujuan = "bukti_bayar/";

if (!is_dir($folderTujuan)) {
    mkdir($folderTujuan, 0777, true);
}

$namaFile = basename($_FILES["bukti"]["name"]);
$alamatFile = $folderTujuan . $namaFile;

if (move_uploaded_file($_FILES["bukti"]["tmp_name"], $alamatFile)) {

    $tiketBaru = [
        "nama" => $nama,
        "tanggal" => $tanggal,
        "kategori" => $kategori,
        "harga" => $harga,
        "bukti" => $alamatFile
    ];

    $_SESSION["daftarWar"][] = $tiketBaru;

    header("Location: dashboard.php");
    exit;

} else {

    echo "Gagal mengupload bukti tiket.";
    echo "<br><a href='tambahTiket.php'>Kembali</a>";

}
?>