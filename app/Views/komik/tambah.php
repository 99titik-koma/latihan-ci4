<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="text-right"><?= $title; ?></h3>

            <!-- FORM INPUT DATA -->
            <form action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" name="judul" value="<?= old('judul'); ?>" id="judul">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" name="penulis" value="<?= old('penulis'); ?>" id="penulis">
                    <div class="invalid-feedback">
                        <?= $validation->getError('penulis'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" name="penerbit" value="<?= old('penerbit'); ?>" id="penerbit">
                    <div class="invalid-feedback">
                        <?= $validation->getError('penerbit'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul">Sampul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" name="sampul" value="<?= old('sampul'); ?>" id="sampul">
                    <div class="invalid-feedback">
                        <?= $validation->getError('sampul'); ?>
                    </div>
                </div>

                <button class="btn btn-primary">Tambah Data</button>

            </form>
            <!-- AKHIR FOMR INPUT DATA -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>