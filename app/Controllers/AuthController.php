<?php namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $session;
    protected $adminModel;
    protected $restaurantModel;

    public function __construct()
    {
        // Load the URL helper, it will be useful in the next steps
        // Adding this within the __construct() function will make it 
        // available to all views in the AuthController
        $this->session = session();
        $this->adminModel = new \App\Models\AdminModel();
        $this->restaurantModel = new \App\Models\RestaurantModel();
    
        helper('url'); 
    }

    public function login()
    {
        if ($this->request->getMethod() === 'POST') {
            $username = $this->request->getPost('emailSignIn');
            $password = $this->request->getPost('passwordSignIn');

            $user = $this->adminModel->where('username', $username)->first();
            $role = 'admin';

            if (!$user) {
                $user = $this->restaurantModel->where('email', $username)->first();
                $role = 'user';
            }

            if ($user && password_verify($password, $user['password_hash'])) {
                $sessionData = [];
                if ($role === 'admin') 
                {
                    $sessionData['id'] = $user['admin_id'];
                    $sessionData['username'] = $user['username'];
                }
                else
                {
                    $sessionData['id'] = $user['restaurant_id'];
                    $sessionData['username'] = $user['email'];
                }
                
                $sessionData['role'] = $role;
                $sessionData['isLoggedIn'] = true;

                $this->session->set($sessionData);
                if ($role === 'admin') {
                    return redirect()->to('/admin');    
                } elseif ($role === 'user') {
                    return redirect()->to('/user');
                } else {
                    return redirect()->to('/');
                }
            } else {
                $this->session->setFlashdata('error', 'Username or password is incorrect');
            }
        }

        return view('login');
    }

    public function logout() {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}