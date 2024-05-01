<?php 
namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{

public function register()
{
    helper(['form', 'url']);
    $model = new UserModel();
    $data = []; // Initialize $data

    if ($this->request->getMethod() === 'post') {
        // Debug: print all POST data
        var_dump($this->request->getPost());

        $rules = [
            'username' => 'required|min_length[3]|max_length[20]',
            'password' => 'required|min_length[8]|max_length[255]',
            'email' => 'required|valid_email|is_unique[registration.email]',
            // Add rules for other fields...
        ];

        if ($this->validate($rules)) {
            $data = [
                'user_type' => $this->request->getPost('user_type'),
                'user_level' => $this->request->getPost('user_level'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'first_name' => $this->request->getPost('first_name'),
                // ... rest of your code ...
            ];
        } else {
            $data['validation'] = $this->validator;
        }
    }

    echo view('register', $data);
}

public function login()
{
    helper(['form', 'url']);

    // Set the session as soon as the login button is pressed
    $dummyUser = [
        'username' => $this->request->getPost('username'),
        'password' => $this->request->getPost('password'),
    ];
    session()->set('user', $dummyUser);

    // Redirect to the home page
    return redirect()->to('/home/home');
}

public function logout()
{
    // Destroy the session
    session()->destroy();

    // Redirect to the login page
    return redirect()->to('/login');
}

public function displayLoginForm()
{
    helper('form');
    echo view('login');
}


public function viewusers() {
    return view('viewusers');
}

//this are logic testing tools

public function testSession() {
    // Check if the 'test' session variable is set
    if (session()->has('test')) {
        // Retrieve and display the session variable
        $test = session()->get('test');
        echo $test;
    } else {
        // Display a message indicating the user is logged out
        echo 'Logged out';
    }
}



public function loginTest() {
    // Set a session variable
    session()->set('test', 'Session is working');

    // Manually write session data
    //session()->write();

    // Redirect to the testSession page to display the session variable
    return redirect()->to('/test-session');
}



}