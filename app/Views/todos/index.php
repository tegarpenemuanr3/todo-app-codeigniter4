<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-md-12">
        <h1>List Todo</h1>
        <ul class="list-group">
            <?php foreach ($todos as $todo): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="todo1">
                    <label class="form-check-label" for="todo1">
                        <?= $todo->title ?>
                    </label>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php $this->endSection(); ?>