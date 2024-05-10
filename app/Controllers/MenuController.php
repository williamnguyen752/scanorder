<?php namespace App\Controllers;

use CodeIgniter\Controller;

class MenuController extends BaseController
{
    public function __construct()
    {
        // Load the URL helper, it will be useful in the next steps
        // Adding this within the __construct() function will make it 
        // available to all views in the MenuController
        helper('url'); 
    }

    public function index()
    {
        return view('landing');
    }
    public function menu()
    {
        return view('menu');
    }
    public function order()
    {
        return view('order');
    }
}