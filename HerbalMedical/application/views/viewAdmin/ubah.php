<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Penyakit
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $penyakit['code'] ?>">
                        <!-- <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code" name="code" value="<?= $penyakit['code']; ?>">
                            <small class="form-text text-danger"><?= form_error('code') ?>.</small>
                        </div> -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $penyakit['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="<?= $penyakit['description']; ?>">
                            <small class="form-text text-danger"><?= form_error('description') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Prevention</label>
                            <input type="text" class="form-control" id="prevention" name="prevention" value="<?= $penyakit['prevention']; ?>">
                            <small class="form-text text-danger"><?= form_error('prevention') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 