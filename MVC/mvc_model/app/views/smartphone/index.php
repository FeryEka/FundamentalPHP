<div class="container py-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Smartphone</h3>

                <?php foreach($data['smartphones'] as $smartphone): ?>
                    <ul>
                        <li><?= $smartphone['nama']; ?></li>
                        <li><?= $smartphone['merek']; ?></li>
                        <li><?= $smartphone['chipset']; ?></li>
                        <li><?= $smartphone['ram']; ?></li>
                        <li><?= $smartphone['harga']; ?></li>
                        <li><img src="../public/img/<?= $smartphone['gambar']; ?>" alt="" srcset=""></li>
                    </ul>
                <?php endforeach; ?>
        </div>
    </div>
</div>