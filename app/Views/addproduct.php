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

    <form action="<?= base_url('ProductController/create') ?>" method="post">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea><br>

        <label for="image_url">Image URL:</label>
        <input type="text" name="image_url" id="image_url" required><br>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" required><br>

        <label for="stock_qty">Stock Quantity:</label>
        <input type="number" name="stock_qty" id="stock_qty" required><br>

        <label for="size">Size:</label>
        <input type="text" name="size" id="size" required><br>

        <label for="product_type">Product Type:</label>
        <input type="text" name="product_type" id="product_type" required><br>

        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required><br>

        <label for="critical_percentage">Critical Percentage:</label>
        <input type="number" name="critical_percentage" id="critical_percentage" step="0.01" required><br>

        <input type="submit" value="Add Product">
    </form>
    <?= $this->include('partials/footer') ?>
</body>
</html>

<?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $product_name = $_POST['product_name'];
        $description = $_POST['description'];
        $image_url = $_POST['image_url'];
        $price = $_POST['price'];
        $stock_qty = $_POST['stock_qty'];
        $size = $_POST['size'];
        $product_type = $_POST['product_type'];
        $color = $_POST['color'];
        $critical_percentage = $_POST['critical_percentage'];

        // Validate and sanitize the form data (you can add your own validation logic here)

        // Load the model
        $productModel = new \App\Models\ProductModel();

        // Prepare the data array
        $data = [
            'product_name' => $product_name,
            'description' => $description,
            'image_url' => $image_url,
            'price' => $price,
            'stock_qty' => $stock_qty,
            'size' => $size,
            'product_type' => $product_type,
            'color' => $color,
            'critical_percentage' => $critical_percentage
        ];

        // Insert the data into the database
        if ($productModel->insert($data)) {
            echo "Product added successfully.";
        } else {
            echo "Error: Unable to add product.";
        }
    }
?>