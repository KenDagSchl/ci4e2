<?php
namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function create()
    {
        $model = new ProductModel();
        $data = $this->request->getPost();
        $model->insert($data);
        return redirect()->to('/ProductController/inventory');
    }

    public function inventory()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('inventory', $data);
    }

public function edit($id)
{
    $model = new ProductModel();
    $data['product'] = $model->find($id);
    return view('editproduct', $data);
}


public function update()
{
    $model = new ProductModel();

    $id = $this->request->getPost('product_id');
    $data = [
        'product_name' => $this->request->getPost('product_name'),
        'description' => $this->request->getPost('description'),
        'image_url' => $this->request->getPost('image_url'),
        'price' => $this->request->getPost('price'),
        'stock_qty' => $this->request->getPost('stock_qty'),
        'size' => $this->request->getPost('size'),
        'product_type' => $this->request->getPost('product_type'),
        'color' => $this->request->getPost('color'),
        'critical_percentage' => $this->request->getPost('critical_percentage'),
    ];

    var_dump($data); // Print out the data array

    $model->update($id, $data);
    echo $model->db->getLastQuery();
    return redirect()->to('/ProductController/inventory');
}


public function delete($product_id)
{
    $model = new ProductModel();
    $model->delete($product_id);
    return redirect()->to('/ProductController/inventory');
}
}


?>