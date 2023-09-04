<?php

    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Genshin Impact", "Dawei", "Hoyoverse", 0, 50);
    $produk3 = new Game("Resident Evil 4 Remake", "Shinji Mikami dan Haruo Murata", "Capcom", 831000, 24);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk( $produk1 );
    $cetakProduk->tambahProduk( $produk2 );
    $cetakProduk->tambahProduk( $produk3 );
    echo $cetakProduk->cetak();

    echo "<br>";
    echo "<hr><br>";

    // menerapkan alias pada namespace

    use App\Service\user as ServiceUser;
    use App\Produk\user as ProdukUser;

    new ServiceUser();
    echo "<br>";
    new ProdukUser();
?>