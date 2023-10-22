<!-- app/Views/todo_detail.php -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Todo</h2>
                <div>
                    <a href="javascript:history.back()" class="btn btn-warning">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h5 class="card-title"><?= $todo->title ?></h5>
                    <p class="card-text"><?= $todo->desc ?></p>

                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i> Update
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>