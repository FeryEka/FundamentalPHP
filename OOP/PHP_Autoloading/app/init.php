<?php
    // require_once 'Produk/InfoProduk.php';
    // require_once 'Produk/Produk.php';
    // require_once 'Produk/Komik.php';
    // require_once 'Produk/Game.php';
    // require_once 'Produk/CetakInfoProduk.php';
    
    //spl adalah standart php library
    // sintaks dibawah untuk require secara otomatis setiap ada file baru.
    spl_autoload_register(function( $class ){
        require_once __DIR__ . '/Produk/' . $class . '.php';
    });
?>