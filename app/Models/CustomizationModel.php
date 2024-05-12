<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomizationModel extends Model
{
    protected $table = 'customization';
    protected $primaryKey = 'customization_id';

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['product_id', 'description', 'options', 'size', 'color', 'design_image', 'quantity'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}