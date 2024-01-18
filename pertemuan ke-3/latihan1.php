<?php 
$program ="<h3>=== Program Biodata Sederhana Function ===</h3>";
echo "$program";


$namaLengkap = "Virda Nuraini (魈 main)";
$kelas = "X RPL 2";
$umur = "16 tahun";
$tempat_tanggalLahir = "Jakarta, 08 Agustus 2007";
$no = "0816-4685-4768";
$alamat = "JL.Budi Mulia No.33";


function biodata( ){
    global $namaLengkap, $umur, $kelas, $tempat_tanggalLahir, $no, $alamat;
    echo "Nama Lengkap : $namaLengkap <br/>";
    echo "Umur : $umur <br/>";
    echo "Kelas : $kelas <br/>";
      echo "Tempat/Tanggal lahir : $tempat_tanggalLahir <br/>";
      echo "No WhatsApp : $no <br/>";
      echo "Alamat : $alamat <br/>";
}

echo biodata();




?>