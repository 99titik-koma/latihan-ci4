<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3><?= $title; ?></h3>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>