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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Custom styles for this template -->
        <link href="<?= base_url('homefile/css/style.css') ?>" rel="stylesheet" />
        <!-- responsive style -->
        <link href="<?= base_url('homefile/css/responsive.css') ?>" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <?= $this->include('partials/navbar') ?>
<?php 
/*
        CREATE TABLE everyday.product (
            product_id INT(255) NOT NULL AUTO_INCREMENT,
            product_name VARCHAR(500) NOT NULL,
            description VARCHAR(5000) NULL,
            image_url VARCHAR(5000) NOT NULL,
            price DOUBLE NOT NULL,
            stock_qty INT(255) NOT NULL,
            size VARCHAR(255) NOT NULL,
            product_type VARCHAR(255) NOT NULL,
            color VARCHAR(255) NOT NULL,
            critical_percentage DOUBLE NOT NULL,
            PRIMARY KEY (product_id)
        ) ENGINE = InnoDB;
        */
?>
<form action="<?= base_url('ProductController/update') ?>" method="post">
    <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">

    <label for="product_name">Product Name</label>
    <input type="text" id="product_name" name="product_name" value="<?= $product['product_name'] ?>">

    <label for="description">Description</label>
    <textarea id="description" name="description"><?= $product['description'] ?></textarea>

    <label for="price">Price</label>
    <input type="number" id="price" name="price" value="<?= $product['price'] ?>">

    <label for="stock_qty">Stock Quantity</label>
    <input type="number" id="stock_qty" name="stock_qty" value="<?= $product['stock_qty'] ?>">

    <label for="size">Size</label>
    <input type="text" id="size" name="size" value="<?= $product['size'] ?>">

    <label for="product_type">Product Type</label>
    <input type="text" id="product_type" name="product_type" value="<?= $product['product_type'] ?>">

    <label for="color">Color</label>
    <input type="text" id="color" name="color" value="<?= $product['color'] ?>">

    <label for="critical_percentage">Critical Percentage</label>
    <input type="number" id="critical_percentage" name="critical_percentage" value="<?= $product['critical_percentage'] ?>">

    <button type="submit">Update</button>
</form>

    <?= $this->include('partials/footer') ?>
</body>
</html>
