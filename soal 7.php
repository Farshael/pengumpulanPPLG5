<?php 
$student = [
        [
            "nama" => "Andi",
            "rombel" => "PPLG XI - 1",
            "rayon" => "Ciawi 4",
            "jk" => "L"
        ], 
        [
            "nama" => "Sasa",
            "rombel" => "PPLG XI - 6",
            "rayon" => "Sukasari 1",
            "jk" => "P"
        ],
        [
            "nama" => "Lala",
            "rombel" => "PPLG XI - 3",
            "rayon" => "Cisarua 3",
            "jk" => "P"
        ],
        [
            "nama" => "Beni",
            "rombel" => "PPLG XI - 2",
            "rayon" => "Cicurug 2",
            "jk" => "L"
        ],
       
    ]?>

   <?php foreach( $student as $std) : ?>
    <br>   <b>Nama = </b><?= $std["nama"]?>
    <br>   <b>Rombel = </b><?= $std ["rombel"]; ?>
    <br>   <b>Rayon = </b><?= $std ["rayon"]; ?>
    <br>   <b>Jk = </b><?= $std ["jk"]; ?>
    <br>
    <?php endforeach ;  ?>
