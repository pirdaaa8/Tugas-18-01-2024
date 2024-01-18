<?php
function lampu($nolampu, $kondisiterminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, $kt8, $kt9, $kt10 ){
 
   for($nolampu; $nolampu <= $kondisiterminasi; $nolampu++){
    if($nolampu == $kt1 || $nolampu == $kt2 || $nolampu == $kt3 || $nolampu == $kt4 || $nolampu == $kt5){
        echo "lampu lalu lintas no - $nolampu tidak lancar <br/>";
    }else if($nolampu == $kt6 || $nolampu == $kt7 || $nolampu == $kt8 || $nolampu == $kt9){
        echo "lampu lalu lintas no - $nolampu tidak berfungsi <br/>";
    }else if($nolampu == $kt10){
        echo "lampu lalu lintas no - $nolampu sedang diperbaiki <br/>";
    }else{
        echo "lampu lalu lintas no - $nolampu lancar <br/>";
    }
    
   }
}
echo lampu(1, 20, 2, 4, 10, 12, 18, 5, 11, 13, 14,16)

?>