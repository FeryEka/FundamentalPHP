<div class="container py-5">

    <div class="row">
        <div class="col-lg-6 kb">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 kb">
            <!-- Button trigger modal -->
            <button type="button" class="tombolTambahData btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#formModal">
            add new data
            </button>

            <h3>Daftar Smartphone</h3>
            
                <ul class="list-group">
                    <?php foreach($data['smartphones'] as $smartphone): ?>
                        <li class="list-group-item ">
                            <?= $smartphone['nama']; ?>
                            <a class="badge bg-danger rounded-pill float-end mx-1" href="<?= BASEURL; ?>/smartphone/hapus/<?= $smartphone['id']; ?>" onclick="return confirm('yakin?')">hapus</a>

                            <a class="tampilModalUbah badge bg-success rounded-pill float-end mx-1 " href="<?= BASEURL; ?>/smartphone/edit/<?= $smartphone['id']; ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $smartphone['id']; ?>">edit</a>

                            <a class="badge bg-primary rounded-pill float-end mx-1 " href="<?= BASEURL; ?>/smartphone/detail/<?= $smartphone['id']; ?>">detail</a>
                        </li>
                    <?php endforeach; ?>                
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="formModalLabel">Add new Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <div class="modal-body">
            <form action="<?= BASEURL; ?>/smartphone/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama"  name="nama">
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <select class="form-select" aria-label="Default select example" id="merek" name="merek">
                    <option selected>Open this select menu</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Iphone">Iphone</option>
                    <option value="Google">Google</option>
                    <option value="OnePlus">OnePlus</option>
                    <option value="Sony">Sony</option>
                    <option value="Oppo">Oppo</option>
                    <option value="Vivo">Vivo</option>
                    <option value="Realme">Realme</option>
                    <option value="Redmi">Redmi</option>
                    <option value="Xiaomi">Xiaomi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="chipset">Chipset</label>
                <input type="text" class="form-control" id="chipset"  name="chipset">
            </div>
            <div class="form-group">
                <label for="ram">Ram</label>
                <input type="text" class="form-control" id="ram"  name="ram">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga"  name="harga">
            </div>
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" class="form-control" id="gambar"  name="gambar">
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
  </div>
</div>
