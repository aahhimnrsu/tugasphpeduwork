<?php

// Menentukan jumlah baris
$baris = 8;

// Looping untuk menampilkan pola bintang bertingkat
for ($i = 1; $i <= $baris; $i++) {
  for ($j = 0; $j <= $i; $j++) {
    echo $j;
  }
  echo "<br>";
}

?>
