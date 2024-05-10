<?php namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends BaseController
{
    protected $restaurantModel;

    public function __construct()
    {
        helper('url'); 

        $this->session = session();
        $this->restaurantModel = new \App\Models\RestaurantModel();
    }

    public function admin()
    {
        $data['restaurants'] = $this->restaurantModel->findAll();
        
        return view('admin', $data);
    }

    public function addedit($id = null) {
        // POST
        if ($this->request->getMethod() === 'POST') {
            $postData = $this->request->getPost();

            $restaurantData = [
                'name' => $postData['name'],
                'email' => $postData['email'],
                'phone' => $postData['phone'],
                'password_hash' => password_hash('1', PASSWORD_DEFAULT),
                'number_of_tables' => $postData['number_of_tables'],
            ];

            if ($id === null) {
                // Add
                if ($this->restaurantModel->insert($restaurantData)) {
                    $this->session->setFlashData('success', 'Restaurant added');
                }
                else {
                    $this->session->setFlashData('error', 'Fail to add restaurant');
                }
            } else {
                // Edit
                if ($this->restaurantModel->update($id, $restaurantData)) {
                    $this->session->setFlashData('success', 'Restaurant updated');
                }
                else {
                    $this->session->setFlashData('error', 'Fail to update restaurant');
                }
            }

            return redirect()->to('/admin');
        }

        // GET
        $data['restaurant'] = ($id === null) ? null : $this->restaurantModel->find($id);

        return view('addedit_restaurant', $data);
    }

    public function delete($id) {
        if ($this->restaurantModel->delete($id)) {
            $this->session->setFlashData('success', 'Restaurant deleted');
        }
        else {
            $this->session->setFlashData('error', 'Fail to delete restaurant');
        }

        return redirect()->to('admin');
    }
}