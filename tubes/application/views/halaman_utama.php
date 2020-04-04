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
        <a class="btn btn-primary rounded-pill" href="<?= base_url('home/login') ?>" role="button">Login</a>
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


<!-- Search -->
<div class="container text-center">
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

    <!-- Name and card -->
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="text-capitalize">Hello <?= $name; ?></h3>
                <hr style="width: 250px; border-top: 3px solid #999; margin-bottom: 20px">
            </div>
        </div>
        <div class="auto shadow bg-white rounded">
            <div class="row mx-auto">
                <?php foreach ($disease as $d) : ?>
                    <div class="col-lg-3 col-sm-6 py-3">
                        <div class="card shadow bg-white rounded" style="width: 15rem; max-height: 300px">
                            <div class="card-body">
                                <h4 class="card-title text-capitalize"><?= $d['name'] ?></h4>
                                <p class="card-text">
                                    <?= $d['description'] ?>
                                </p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" id="tips" data-toggle="modal" data-target="#description" onclick="yow('<?= $d['prevention'] ?>')">
                                    Tips
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="description" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Prevention And Drugs</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <di class="modal-body">
                                                <p id="value"></p>
                                            </di>
                                            <div class="modal-footer mx-auto">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light py-2">
    <h6>&copy All right reserved 2020</h6>
</footer>

<script type="text/javascript">
    function yow(a) {
        $('#value').text(a);
    }
</script>