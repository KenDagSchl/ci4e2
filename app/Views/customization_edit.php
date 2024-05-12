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

    <form action="<?= base_url('/customization/update') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="customization_id" value="<?= $customization['customization_id'] ?>">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="<?= $customization['description'] ?>">
        </div>

        <div class="form-group">
            <label for="options">Options</label>
            <input type="text" class="form-control" id="options" name="options"
                value="<?= $customization['options'] ?>">
        </div>

        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="<?= $customization['size'] ?>">
        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" value="<?= $customization['color'] ?>">
        </div>

        <!-- Removed the first design image input field -->

        <div class="form-group">
            <label for="design_image">Design Image</label>
            <?php if (isset($customization['design_image']) && !empty($customization['design_image'])): ?>
                <img src="<?= base_url($customization['design_image']) ?>" width="100" height="100">
            <?php endif; ?>
            <input type="file" class="form-control" id="design_image" name="design_image">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity"
                value="<?= $customization['quantity'] ?>">
        </div>



        <input type="submit" class="btn btn-primary" value="Update">
    </form>
    <?= $this->include('partials/footer') ?>
</body>

</html>