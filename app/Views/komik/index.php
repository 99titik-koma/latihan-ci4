<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-right"><?= $title; ?></h3>

            <a href="/komik/tambah" class="btn btn-primary mb-3 mt-3">Tambah Data Komik</a>

            <?php if (session()->getFlashdata('flash')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('flash'); ?>
                </div>
            <?php endif; ?>

            <!-- Tabel -->
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-black">
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $k['sampul']; ?>" class="sampul"></td>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['penulis']; ?></td>
                            <td>
                                <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Akhir Tabel -->
        </div>
    </div>
</div>
<?= $this->endSection(); ?>