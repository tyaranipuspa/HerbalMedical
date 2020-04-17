<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Penyakit
                </div>
                <div class="card-body">
                    <form action="<?= base_url('penyakit/tambah') ?>" method="post">
                        <div class="form-group">
                            <label for="code">code</label>
                            <input type="text" class="form-control" id="code" name="code">
                            <small class="form-text text-danger"><?= form_error('code') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="name">name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <small class="form-text text-danger"><?= form_error('name') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">description</label>
                            <input type="text" class="form-control" id="description" name="description">
                            <small class="form-text text-danger"><?= form_error('description') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">prevention</label>
                            <input type="text" class="form-control" id="prevention" name="prevention">
                            <small class="form-text text-danger"><?= form_error('prevention') ?>.</small>
                            <!-- <select class="form-control" id="prevention" name="prevention">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="DKV">DKV</option>
                                <option value="MBTI">MBTI</option>
                            </select> -->
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right" href='<?= base_url ('home') ?>'>Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 