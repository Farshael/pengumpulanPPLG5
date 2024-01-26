<?php 
    // 5.5.5
    // SOAL 1   
    // FOR
    // $a = "Wikrama";

    // $panjang = strlen($a);
    // for ($i = $panjang - 2 ;  $i <  $panjang  - 1; $i++) {
    //     echo $a[$i] ;
    // }

    // SUBSTR
    // echo substr("Wikrama", -2,1);

    // // SOAL 2
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "<br>";
    //     echo $i;
    // }

    // // SOAL 3
    // echo "<br>";
    // for ($i = 10; $i >= 1; $i--) {
    //     echo "<br>";
    //     echo $i;
    // }

    // // SOAL 4
    // for ($i = 1; $i <= 6; $i++) {
    //     echo "<h$i>tag $i</h$i>";
    // }

    // // SOAL 5
    // for($i = 30; $i >= 1 ; $i--){
    //     if($i % 4 == 0){
    //         echo $i .  "<br>";
    //     }
    // }

    // // SOAL 6
    // $hasil = 0;
    // for($i = 5; $i <= 25 ; $i+=5){
    //     if(225 % $i == 0){
    //         $hasil++;
    //     }

    // }
    // echo $hasil; 
    

    // SOAL 7
    // $student = [
    //     [
    //         "nama" => "Andi",
    //         "rombel" => "PPLG XI - 1",
    //         "rayon" => "Ciawi 4",
    //         "jk" => "L"
    //     ], 
    //     [
    //         "nama" => "Sasa",
    //         "rombel" => "PPLG XI - 6",
    //         "rayon" => "Sukasari 1",
    //         "jk" => "P"
    //     ],
    //     [
    //         "nama" => "Lala",
    //         "rombel" => "PPLG XI - 3",
    //         "rayon" => "Cisarua 3",
    //         "jk" => "P"
    //     ],
    //     [
    //         "nama" => "Beni",
    //         "rombel" => "PPLG XI - 2",
    //         "rayon" => "Cicurug 2",
    //         "jk" => "L"
    //     ],
       
    // ]

    // foreach( $student as $std) :
    // <br>   <b>Nama = </b><?= $std["nama"]
    // <br>   <b>Rombel = </b><?= $std ["rombel"]; 
    // <br>   <b>Rayon = </b><?= $std ["rayon"]; 
    // <br>   <b>Jk = </b><?= $std ["jk"]; 
    // <br>
    //  endforeach ; 


    

    // SOAL 8
    // $nilai = [ 75, 77, 87, 70, 90, 81, 69, 87, 66];

    // $k = [];
    // $bk = [];

    // foreach ($nilai as $n) {  
    //     if($n >= 75){
    //         $k[] = $n;
    //     }else{
    //         $bk[] = $n;
    //     }
    // }

    // echo "Kelompok nilai kompeten adalah " . implode (", ",$k);
    // echo "<br>";
    // echo "Kelompok nilai belum kompeten adalah " . implode (", ",$bk);


    // SOAL 9
    //  for ($i = 1; $i <= 3; $i++) {
    //     for ($j = 1; $j <= 10; $j++){
    //         echo " $i x $j =" . $i * $j . "<br>";
    //     }  
    // }


    // SOAL 10
    // $barang = [
    //     [
    //         'nama' => 'pasta gigi',
    //         'harga' => '18000',
    //         'jumlah' => '1',
    //     ],
    //     [
    //         'nama' => 'sabun mandi',
    //         'harga' => '5000',
    //         'jumlah' => '3',
    //     ],
    //     [
    //         'nama' => 'aloe vera sheet mask',
    //         'harga' => '15000',
    //         'jumlah' => '5',
    //     ],
    // ];

    // $totalBayar = 0;

    // foreach ($barang as $bayar) {
    //     $harga = $bayar['harga'];
    //     $jumlah = $bayar['jumlah'];
    //     $totalBayar += $harga * $jumlah;
    // }

    // echo "Total yang perlu dibayar oleh Beni adalah : Rp. " . number_format($totalBayar, 0, ',', '.');



    // // SOAL 11
    // $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    // $bil2 = [77, 99, 81, 45, 90, 98];

    // $kelompokSama = [];
    // $kelompokBeda = [];

    // foreach ($bil1 as $bilangan) {
    //     if (in_array($bilangan, $bil2)) {
    //         $kelompokSama[] = $bilangan;
    //     } else {
    //         $kelompokBeda[] = $bilangan;
    //     }
    // }

    // foreach ($bil2 as $bilangan) {
    //     if (!in_array($bilangan, $bil1)) {
    //         $kelompokBeda[] = $bilangan;
    //     }
    // }

    // echo "Kelompok yang terdapat di kedua variabel: " . implode(', ', $kelompokSama) . "<br>";
    // echo "Kelompok yang hanya terdapat di satu variabel saja: " . implode(', ', $kelompokBeda);


    // //  SOAL 12
    // $barang = [
    //     [
    //         'nama' => 'Ban', 'diskon' => '10'
    //     ],
    //     [
    //         'nama' => 'oli mesin'
    //     ],
    //     [
    //         'nama' => 'kampas rem'
    //     ],
    //     [
    //         'nama' => 'busi', 'diskon' => '9'
    //     ],
    //     [
    //         'nama' => 'akumulator', 'diskon' => '7'
    //         ]
    // ];

    // foreach ($barang as $item) {
    //     if (isset($item['diskon'])) {
    //         echo "Nama Barang : " . $item['nama'] . ", Diskon: " . $item['diskon'] . "<br>";
    //     }
    // }


    // // SOAL 14
    // $students = [
    //     [
    //         'nama' => 'Andi',
    //         'nilai' => [80, 78, 82, 78, 88],
    //     ],
    //     [
    //         'nama' => 'Beni',
    //         'nilai' => [86, 70, 80, 85, 81],
    //     ],
    //     [
    //         'nama' => 'Danii',
    //         'nilai' => [83, 91, 70, 73, 81],
    //     ],
    //     [
    //         'nama' => 'Eko',
    //         'nilai' => [89, 85, 84, 86, 88],
    //     ],
    // ];

    // foreach ($students as $student) {
    //     $nama = $student['nama'];
    //     $nilai = $student['nilai'];
        
    //     $totalNilai = array_sum($nilai);

    //     echo "Nama: $nama, Jumlah Nilai: $totalNilai<br>";
    // }


?> 
