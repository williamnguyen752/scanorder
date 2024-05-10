<?php namespace App\Controllers;

use CodeIgniter\Controller;

class StaffController extends BaseController
{
    public function __construct()
    {
        helper('url'); 

        $this->session = session();
        $this->restaurantModel = new \App\Models\RestaurantModel();
        $this->categoryModel = new \App\Models\CategoryModel();
        $this->menuItemModel = new \App\Models\MenuItemModel();
    }

    public function kitchenorder()
    {
        return view('kitchenorder');
    }

    public function tableqr()
    {
        return view('tableqr');
    }

    public function user()
    {
        $id = $this->session->get('id');

        $data['restaurant'] = $this->restaurantModel->find($id);

        // Categories
        $categories = $this->categoryModel->where('restaurant_id', $id)->findAll();
        $data['items'] = [];
        foreach ($categories as $category) {
            $items = $this->menuItemModel->where('category_id', $category['category_id'])->findAll();

            foreach ($items as $item) {
                $item['category_name'] = $category['name'];
                $data['items'][] = $item;
            }
        }

        return view('user', $data);
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
}