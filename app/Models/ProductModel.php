<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id'; // Add this line
    protected $allowedFields = ['product_name', 'description', 'price', 'stock_qty', 'size', 'product_type', 'color', 'critical_percentage'];
}


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
