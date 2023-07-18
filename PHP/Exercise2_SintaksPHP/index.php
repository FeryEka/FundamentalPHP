<?php
    // Note Exercise 2

    // -STANDART OUTPUT-
    // echo, print
    // print_r
    // var_dump

    // -VARIABEL AND TIPE DATA-
    // 1. VARIABEL
    // --rule variabel can not using number in awal kata, but can mengandung angka contoh $variabel1 = "value";
    $nama = "Fery";
    // using " can use the concept of interpolation
    // interpolasi it is for cek inside " there are variables exists or not 
    echo "Halo! Nama saya $nama ";
    // difference using '
    echo 'Halo! Nama saya $nama';

    // -OPERATOR-
    // Operator Aritmatika
    // + - * / %
    $x = 10;
    $y = 20;
    echo $x * $y;

    // penggabungan string / concatenation / concat
    // using .
    $nama_depan = "Fery";
    $nama_belakang = "Eka Mahendra";
    echo $nama_depan . " " . $nama_belakang;

    // Operator Assignment
    // =, +=, -=, *=, /=, %=, .=
    $a = 1;
    $a += 5;
    echo $a;

    $nama = "Fery";
    $nama .= " ";
    $nama .= "Eka Mahendra";
    echo $nama;

    // Operator Perbandingan
    // <, >, <=, >=, ==, !=
    var_dump(1 < 5);

    // Operator Identitas
    // ===, !==
    var_dump(1 === "1");

    // Operator Logika
    // &&, ||, !
    $i = 30;
    var_dump($i < 20 && $i % 2 == 0);

    // -SINTAKS PHP IN HTML-
    // 1. PHP inside HTML
    // 2. HTML inside PHP
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- PHP inside HTML -->
    <h1>Halo. Selamat Datang <?php echo "Fery Eka Mahendra" ?></h1>
    <!-- HTML inside PHP -->
    <!-- this sintaks Not Recommend cuz for seperate or differentiate sintaks php and sintaks html -->
    <?php
        echo "<h1>Halo, Selamat Datang Fery Eka Mahendra</h1>"
    ?>
</body>
</html>