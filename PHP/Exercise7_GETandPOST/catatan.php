<?php
    // Variable Scope / lingkup variabel
    // local scope
    $x = 10;
    function tampilX(){
        // function scope
        // scope pada function hanya terbatas pada function tersebut
        // agar bisa memanggil variabel x di luar function menggunakan global
        global $x;
        echo $x; 
    }
    tampilX();


    // SUPERGLOBALS
    // variabel global milik PHP
    // merupakan Array Associtative
    // $_GET
    $_GET["nama"] = "Rykara";
    $_GET["nrp"] = 171111117;
    
?>