<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>EveryDay</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font awesome style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
        integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('homefile/css/style.css') ?>" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url('homefile/css/responsive.css') ?>" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <?= $this->include('partials/navbar') ?>

    <a href="<?= base_url('/home/customize') ?>">Go to Customization Page</a>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>Description</th>
            <th>Options</th>
            <th>Size</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Design Image</th> <!-- Add new table header for the image -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($customizations as $customization): ?>
            <tr>
                <td><?= $customization['description'] ?></td>
                <td><?= $customization['options'] ?></td>
                <td><?= $customization['size'] ?></td>
                <td><?= $customization['color'] ?></td>
                <td><?= $customization['quantity'] ?></td>
                <td>
                    <!-- Add new table data cell for the image -->
                    <img src="<?= base_url($customization['design_image']) ?>" width="100" height="100">
                </td>
                <td><a href="<?= base_url('/customization/edit/' . $customization['customization_id']) ?>">Edit</a></td>
                <td><a href="<?= base_url('/customization/delete/' . $customization['customization_id']) ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    <?= $this->include('partials/footer') ?>
</body>

</html>