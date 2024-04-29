<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields = ['product_name', 'description', 'price', 'stock_qty', 'size', 'product_type', 'color', 'critical_percentage'];
}
?>