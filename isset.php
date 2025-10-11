<?php
$data = array("nama" => "Jane", "usia" => 25);

if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}

if (isset($data["usia"]) && $data["usia"] >= 18) {
    echo "<br>Anda sudah dewasa.";
} else {
    echo "<br>Anda belum dewasa atau variabel 'usia' tidak ditemukan";
}
?>