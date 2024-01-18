<?php 

// built in fuction
// fungsi yg sudah disediakan oleh PHP
// echo "Hello world";

//date_default_timezone_set("Asia/Jakarta");
//$tanggal = date("d-m-Y");
//$waktu = date("H:i:s");

//echo "Di jakarta hari ini tanggal : $tanggal <br /> 
//Jam di jakarta : $waktu";

// user defined fuction
// fungsi yg kita buat sendiri

//function namaSaya($nama , $umur){
    //$namaLengkap = "Nama saya adalah $nama;
//    $umurSaya = "Umur saya adalah : $umur";
//   return $namaSaya;
//}
//function jumlahDUaBIlangan($a, $b){
//    $total = $a + $b;
//    return $total;
//}
//echo namaSaya("Hu Tao" , 100);
//echo jumlahDuaBilangan(5, 3);

//$a = 10;
//function nilaiSaya(){
  //  global $a;
    //echo $a;
//}
 //echo nilaiSaya();


 function pengulanganBuku($noBuku, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2){
    for($noBuku; $noBuku <= $kondisiTerminasi; $noBuku++){
        if($noBuku <= $kondisiTerminasi1){
            echo "Buku no - $noBuku tersedia <br/>";
        }else if($noBuku <= $kondisiTerminasi2){
            echo "Buku no - $noBuku sedang dipinjam <br/>";
        }else{
            echo "Buku No - $noBuku tidak tersedia <br/>";
        }
    }    
}

 echo pengulanganBuku(1, 15, 6, 10);
?>