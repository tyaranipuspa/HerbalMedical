<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="code">Code Drugs</label>
                            <input type="text" class="form-control" id="code_drugs" name="code_drugs">
                            <small class="form-text text-danger"><?= form_error('code_drugs') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <small class="form-text text-danger"><?= form_error('name') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                            <small class="form-text text-danger"><?= form_error('description') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Usability</label>
                            <input type="text" class="form-control" id="usability" name="usability">
                            <small class="form-text text-danger"><?= form_error('usability') ?>.</small>
                        </div>
                         <div class="form-group">
                            <label for="text">How to make</label>
                            <input type="text" class="form-control" id="making" name="making">
                            <small class="form-text text-danger"><?= form_error('making') ?>.</small>
                        </div>
                         <div class="form-group">
                            <label for="text">Code Disease</label>
                            <input type="text" class="form-control" id="code" name="code">
                            <small class="form-text text-danger"><?= form_error('code') ?>.</small>
                        </div>
                         <div class="form-group">
                            <label for="text">Upload foto</label>
                            <input type="file" class="form-control" name="foto_drugs">
                            <!-- <br> -->
                            <!-- <input type="submit" value="Upload"></br> -->
                            <small class="form-text text-danger"><?= form_error('foto_drugs') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 