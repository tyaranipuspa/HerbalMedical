<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-2">
    <a class="navbar-brand" href="<?= base_url() ?>">Herbal Medical</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link mx-2" href="#">Disease</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Herbal Drugs</a>
            </li>
        </ul>
        <a href="<?= base_url('home/profile') ?>" style="margin-right: 15px"><img src="<?= base_url('assets/imgs/setting.png') ?>" alt="Setting" style="block-size: 32px"></a>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/imgs/mot.png') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/imgs/mot2.png') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<!-- <div class="container"> -->
    <!-- <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data penyakit ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
<div>       
    <div class="container">
        <div class="row pt-4">
            <div class="col md-6 mx-auto" style="max-width: 75%;">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Disease Here ... " name="search">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!-- Name and card -->
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-capitalize">Hello <?= $name; ?></h3>
                <!-- <hr style="width: 250px; border-top: 3px solid #999; margin-bottom: 20px"> -->
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Penyakit</h3>
            <?php if (empty($disease)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Code</th>
                        <th class="text-center" scope="col">Name</th>
                        <th class="text-center" scope="col">Description</th>
                        <th class="text-center" scope="col">Prevention</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($disease as $pyk) : ?>
                        <td class="text-center"><?= $pyk['code']; ?></td>
                        <td class="text-center"><?= $pyk['name']; ?></td>
                        <td class="text-center"><?= $pyk['description']; ?></td>
                        <td class="text-center"><?= $pyk['prevention']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>penyakit/hapus/<?= $pyk['code'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>penyakit/ubah/<?= $pyk['code'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>penyakit/tambah " class="btn btn-primary">Tambah Data Penyakit</a>
                </div>
            </div>

        </div>
    </div>
</div> 