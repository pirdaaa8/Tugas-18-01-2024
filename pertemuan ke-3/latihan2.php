<?php
function Angkot($noAngkot,  $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2, $kondisiTerminasi3,$kondisiTerminasi31,$kondisiTerminasi32, $kondisiTerminasi4, $kondisiTerminasi5,$kondisiTerminasi6, $kondisiTerminasi7){

for($noAngkot; $noAngkot <= $kondisiTerminasi; $noAngkot++){
    if($noAngkot <= $kondisiTerminasi1 || $noAngkot == $kondisiTerminasi3 || $noAngkot == $kondisiTerminasi31 ||$noAngkot == $kondisiTerminasi32 ){
        echo "Angkot no - $noAngkot tersedia <br/>";
    }else if($noAngkot <= $kondisiTerminasi2 || $noAngkot == $kondisiTerminasi5 || $noAngkot == $kondisiTerminasi6 || $noAngkot == $kondisiTerminasi7 ){
        echo "Angkot no - $noAngkot sedang diperbaiki<br/>";
    }

    else{
        echo "Angkot no - $noAngkot tidak tersedia <br/>";
    }

}
}
echo Angkot(1, 20, 1, 2,3,10,11, 4,9,12,17);
?>