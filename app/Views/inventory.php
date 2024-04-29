<html>
    <head>
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
        <h1>Lorem Ipsum Header</h1>
        <div style="height: 20px;"></div>

        <?php
        $database = \Config\Database::connect();
        $query = $database->query('SELECT * FROM product');
        $products = $query->getResult();
        ?>

        <!-- Display the "Add" button above the table -->
        <div style="text-align: right; margin-bottom: 10px;">
        <a href="<?= base_url('/home/add') ?>" class="btn btn-primary">Add</a>
        </div>

        <!-- Display the product entries in a table -->
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Image URL</th>
                    <th>Price</th>
                    <th>Stock Quantity</th>
                    <th>Size</th>
                    <th>Product Type</th>
                    <th>Color</th>
                    <th>Critical Percentage</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product->product_id ?></td>
                        <td><?= $product->product_name ?></td>
                        <td><?= $product->description ?></td>
                        <td><img src="<?= $product->image_url ?>" class="img-thumbnail" style="max-width: 100px;"></td>
                        <td><?= $product->price ?></td>
                        <td><?= $product->stock_qty ?></td>
                        <td><?= $product->size ?></td>
                        <td><?= $product->product_type ?></td>
                        <td><?= $product->color ?></td>
                        <td><?= $product->critical_percentage ?></td>
                        <td><a href="<?= site_url('ProductController/update/' . $product->product_id) ?>">Update</a></td>
                        <td><a href="<?= site_url('ProductController/delete/' . $product->product_id) ?>">Delete</a></td>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $this->include('partials/footer') ?>
    </body>
</html>
