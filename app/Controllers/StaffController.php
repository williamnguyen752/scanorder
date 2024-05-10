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

            // Edit menu items
            $categoryData = [
                'restaurant_id' => $this->session->get('id'),
                'name' => $postData['category_name'],
            ];
            $itemData = [
                'category_id' => $postData['category_id'],
                'name' => $postData['item_name'],
                'description' => $postData['item_description'],
                'price' => $postData['item_price'],
            ];

            // if restaurant_id is not set, use current restaurant id to update menu items
            if ($id === null) {
                $categoryData['restaurant_id'] = $this->session->get('id');
                $itemData['category_id'] = $postData['category_id'];
                // Add
                if ($this->categoryModel->insert($categoryData)) {
                    $this->session->setFlashData('success', 'Category added');
                }
                else {
                    $this->session->setFlashData('error', 'Fail to add category');
                }
            }

            
        }

        // GET
        $data['restaurant'] = ($id === null) ? null : $this->restaurantModel->find($id);

        return view('addedit_menu', $data);
    }
}