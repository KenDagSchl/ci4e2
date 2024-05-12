<?php

namespace App\Controllers;

use App\Models\CustomizationModel;
use CodeIgniter\Controller;

class CustomizationController extends BaseController
{
    protected $customizationModel;

    public function __construct()
    {
        helper(['form', 'url']);
        $this->customizationModel = new CustomizationModel();
    }

    public function process()
    {

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $validation = \Config\Services::validation();

        $validation->setRules([
            //'product_id' => 'required',
            'description' => 'required',
            'options' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'design_image' => 'uploaded[design_image]', // Check if the file was uploaded
        ]);

        if ($validation->withRequest($this->request)->run()) {
            $file = $this->request->getFile('design_image');
            if ($file->isValid() && !$file->hasMoved()) {
                // Generate a unique name for the file
                $newName = $file->getRandomName();

                // Move the file to the 'uploads' directory
                $file->move('uploads', $newName);

                // Get the full path to the file
                $imagePath = 'uploads/' . $newName;

                $data = [
                    //  'product_id' => $this->request->getPost('product_id'),
                    'description' => $this->request->getPost('description'),
                    'options' => $this->request->getPost('options'),
                    'size' => $this->request->getPost('size'),
                    'color' => $this->request->getPost('color'),
                    'quantity' => $this->request->getPost('quantity'),
                    'design_image' => $imagePath, // Add image path to the data being saved
                ];

                $this->customizationModel->save($data);

                return redirect()->to('/customization/table');
            } else {
                // Debugging statement to print out the $_FILES array
                var_dump($_FILES);
                // Debugging statement to print out the file errors
                var_dump($file->getErrorString());
            }
        } else {
            // Debugging statement to print out the validation errors
            var_dump($validation->getErrors());
            //return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    }


    public function read()
    {
        $customizationModel = new \App\Models\CustomizationModel();
        $data['customizations'] = $customizationModel->findAll();

        echo view('customization_read', $data);
    }

    public function edit($customization_id)
    {
        $customizationModel = new \App\Models\CustomizationModel();
        $data['customization'] = $customizationModel->find($customization_id);

        echo view('customization_edit', $data);
    }

    public function update()
    {
        $data = [
            'customization_id' => $this->request->getPost('customization_id'),
            'description' => $this->request->getPost('description'),
            'options' => $this->request->getPost('options'),
            'size' => $this->request->getPost('size'),
            'color' => $this->request->getPost('color'),
            'quantity' => $this->request->getPost('quantity'),
        ];

        $this->customizationModel->save($data);

        return redirect()->to('/customization/table');
    }

    public function delete($customization_id)
    {
        $customizationModel = new \App\Models\CustomizationModel();
        $customizationModel->delete($customization_id);

        return redirect()->to('/customization/table');
    }


}