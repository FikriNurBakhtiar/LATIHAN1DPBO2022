<?php

include "Data.php";

$klub1 = new DaftarClub("Persikabo", "Bogor", 1988, "Andika", "Inggris", 0);
echo "DATA TIM PERTAMA"."<br>";
echo "<br>";
echo "Nama Klub         : ". $klub1->getnamaClub(). "<br>";
echo "Asal Klub         : ". $klub1->getnegaraAsal(). "<br>";
echo "Tahun berdiri     : ". $klub1->gettahunBerdiri(). "<br>";
echo "Nama Kapten       : ". $klub1->getnamaPemain(). "<br>";
echo "Asal Negara       : ". $klub1->getasalPemain(). "<br>";
echo "Nomor Punggung    : ". $klub1->getnopung(). "<br>". "<br>";

$klub2 = new DaftarClub("Persija", "Jakarta", 1978, "Putera", "Arab", 21);

echo "DATA TIM KEDUA"."<br>";
echo "<br>";
echo "Nama Klub         : ". $klub2->getnamaClub(). "<br>";
echo "Asal Klub         : ". $klub2->getnegaraAsal(). "<br>";
echo "Tahun berdiri     : ". $klub2->gettahunBerdiri(). "<br>";
echo "Nama Kapten       : ". $klub2->getnamaPemain(). "<br>";
echo "Asal Negara       : ". $klub2->getasalPemain(). "<br>";
echo "Nomor Punggung    : ". $klub2->getnopung(). "<br>". "<br>". "<br>";

echo "BIG MATCH MALAM INI ADALAH". "<br>";
echo $klub1->getnamaClub(). " VS ". $klub2->getnamaClub(). "<br>";

?>