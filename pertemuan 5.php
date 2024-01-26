<?php 
// 5
    // LATIHAN / CONTOH
    // function tabungan($jumlah, $bulan) {
    //     $total = $jumlah + ($jumlah = $bulan / 100); 
    //     return "Rp." . number_format($total,0,'.','.') ;
    // }

    // tabungan(4250000, 10);


// SOAL 1
//     function imt($tb, $bb) {
//     $beni = $bb / $tb ** 2;
//     if($beni >= 18.5 && $beni <= 22.9){
//         echo  $beni . " normal";
//     }elseif($beni >= 22.9 && $beni <= 24.9){
//         echo $beni . "berat badan lebih";
//     }elseif($beni >= 25){
//         echo "obesitas";
//     }else{
//         echo "kurang";
//     }
// }
//     imt(1.48, 44);

// SOAL 2
   function day($date){
        $day = date('l', strtotime($date));
        if($day == 'Monday'){
            echo "Senin";
        }
        elseif($day == 'Tuesday'){
            echo "Selasa";
        }
        elseif($day == 'Wednesday'){
            echo "Rabu";
        }
        elseif($day == 'Thursday'){
            echo "Kamis";
        }
        elseif($day == 'Friday'){
            echo "Jumat";
        }
        elseif($day == 'Saturday'){
            echo "Sabtu";
        }
        else{
            echo "Minggu";
        }
       
    }
    day('2024-01-28');
?>