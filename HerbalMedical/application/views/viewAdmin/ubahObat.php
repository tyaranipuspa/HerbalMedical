<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Update Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="code_drugs" value="<?= $drugs['code_drugs']; ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $drugs['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Description</label>
                            <input type="text" class="form-control" id="description" name="description"value="<?= $drugs['description']; ?>">
                            <small class="form-text text-danger"><?= form_error('description') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Usability</label>
                            <input type="text" class="form-control" id="Usability" name="usability"value="<?= $drugs['usability']; ?>">
                            <small class="form-text text-danger"><?= form_error('Usability') ?>.</small>
                        </div>
                         <div class="form-group">
                            <label for="text">How to make</label>
                            <input type="text" class="form-control" id="making" name="making"value="<?= $drugs['making']; ?>">
                            <small class="form-text text-danger"><?= form_error('making') ?>.</small>
                        </div>
                         <div class="form-group">
                            <label for="text">Code Disease</label>
                            <input type="text" class="form-control" id="code" name="code"value="<?= $drugs['code']; ?>">
                            <small class="form-text text-danger"><?= form_error('code') ?>.</small>
                        </div>
                         <div class="form-group">
                            <label for="text">Upload foto</label>
                            <input type="file" class="form-control" name="foto_drugs">
                            <small class="form-text text-danger"><?= form_error('foto_drugs') ?>.</small>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 