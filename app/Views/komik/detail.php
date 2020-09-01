<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-right"><?= $title; ?></h3>

            <!-- CARD -->
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $komik['sampul']; ?>" class="card-img detail">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><b><?= $komik['penulis']; ?></b></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit: <?= $komik['penerbit']; ?></b></small></p>

                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a><br><br>
                            <a href="/komik">Daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AKHIR CARD -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>