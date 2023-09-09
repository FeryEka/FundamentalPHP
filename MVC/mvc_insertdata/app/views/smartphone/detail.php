<div class="container py-5">
    <div class="card" style="width: 18rem;">
        <img src="../../../public/img/<?= $data['smartphones']['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['smartphones']['nama']; ?></h5>
            <p class="card-text"><?= $data['smartphones']['merek']; ?> | <?= $data['smartphones']['chipset']; ?> <?= $data['smartphones']['ram']; ?> | <?= $data['smartphones']['harga']; ?></p>
            <a href="<?= BASEURL; ?>/smartphone" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>