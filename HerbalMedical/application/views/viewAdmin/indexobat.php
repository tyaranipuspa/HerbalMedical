<div class="container text-center">
    <div class="container">
        <div class="row pt-4">
            <div class="col md-6 mx-auto" style="max-width: 75%;">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Drugs Here ... " name="search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Obat</h3>
            <?php if (empty($drugs)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Code Drugs</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Description</th>
                        <th class="text-center" scope="col">Usability</th>
                        <th class="text-center" scope="col">How To Make</th>
                        <th class="text-center" scope="col">Code Disease</th>
                        <th class="text-center" scope="col">Foto Drugs</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($drugs['entries'] as $drg) : ?>
                        <td class="text-center"><?= $drg['code_drugs']; ?></td>
                        <td class="text-center"><?= $drg['name']; ?></td>
                        <td class="text-center"><?= $drg['description']; ?></td>
                        <td class="text-center"><?= $drg['usability']; ?></td>
                        <td class="text-center"><?= $drg['making']; ?></td>
                        <td class="text-center"><?= $drg['code']; ?></td>
                        <td>
                            <img src="<?=base_url($drg['foto_drugs'])?>" style="width:300px;">
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>adminObat/hapus/<?= $drg['code_drugs'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>adminObat/updateDrugs/<?= $drg['code_drugs'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>adminObat/tambah " class="btn btn-primary">Tambah Data Obat</a>
                </div>
            </div>

        </div>
    </div>
</div> 