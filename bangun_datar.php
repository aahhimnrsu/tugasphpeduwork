<?php

// Menghitung luas persegi
function luasPersegi($sisi) {
  return $sisi * $sisi;
}

// Menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
  return $panjang * $lebar;
}

// Menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
  return 0.5 * $alas * $tinggi;
}

// Menghitung luas trapesium
function luasTrapesium($sisiAtas, $sisiBawah, $tinggi) {
  return 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
}

// Menghitung luas lingkaran
function luasLingkaran($jari) {
  return 3.14 * $jari * $jari;
}

// Contoh penggunaan fungsi-fungsi di atas
echo "Luas persegi dengan sisi 5 adalah: " . luasPersegi(5) . "<br>";
echo "Luas persegi panjang dengan panjang 5 dan lebar 3 adalah: " . luasPersegiPanjang(5, 3) . "<br>";
echo "Luas segitiga dengan alas 6 dan tinggi 8 adalah: " . luasSegitiga(6, 8) . "<br>";
echo "Luas trapesium dengan sisi atas 5, sisi bawah 9, dan tinggi 4 adalah: " . luasTrapesium(5, 9, 4) . "<br>";
echo "Luas lingkaran dengan jari-jari 7 adalah: " . luasLingkaran(7) . "<br>";

?>