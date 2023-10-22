<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center">
            <h1>List Todo Complete</h1>
            <div>
                <a href="<?= base_url() ?>todo" class="btn btn-warning">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
        <ul class="list-group mt-2">
            <?php foreach ($todos as $todo): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="todo1">
                    <label class="form-check-label" for="todo1">
                        <?= $todo->title ?>
                    </label>
                </div>
                <div class="no-wrap">
                    <a href="<?= base_url() ?>todo/detail/<?= $todo->id ?>" class="btn btn-info btn-sm"
                        data-toggle="tooltip" data-placement="top" title="Detail">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php $this->endSection(); ?>