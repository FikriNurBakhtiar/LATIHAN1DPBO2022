<?php

include "Data.php";

//Menginput data
$mahasiswa = new daftarMahasiswa(2001123, "Muhamad Fikri Nur Bakhtiar", "Ilmu Komputer", 4);

//Menampilkan data
echo "DATA MAHASISWA"."<br>";
echo "<br>";
echo "NIM                   : ". $mahasiswa->getNIM() . "<br>";
echo "Nama                  : ". $mahasiswa->getnama() . "<br>";
echo "Program Studi         : ". $mahasiswa->getprodi() . "<br>";
echo "Semester              : ". $mahasiswa->getSMT() . "<br>";

?>