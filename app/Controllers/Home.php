<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function home(): string
    {
        return view('homepage');
    }
    public function products(): string
    {
        return view('productcatalogue');
    }
    public function customize(): string
    {
        return view('customizepage');
    }
    public function support(): string
    {
        return view('supportpage');
    }
    public function about(): string
    {
        return view('about');
    }
    public function inventory(): string
    {
        return view('inventory');
    }
    public function add(): string
    {
        return view('addproduct');
    }
    public function edit(): string
    {
        return view('editproduct');
    }
    public function register(): string
    {
        return view('register');
    }
}
