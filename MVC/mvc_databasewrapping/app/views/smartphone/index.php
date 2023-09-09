<div class="container py-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Smartphone</h3>
            
                <ul class="list-group">
                    <?php foreach($data['smartphones'] as $smartphone): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-start"><?= $smartphone['nama']; ?>
                        <a class="badge rounded-pill text-bg-info " href="<?= BASEURL; ?>/smartphone/detail/<?= $smartphone['id']; ?>">detail</a></li>
                    <?php endforeach; ?>                
        </div>
    </div>
</div>