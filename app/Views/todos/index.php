<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
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
    </div>
</body>

</html>