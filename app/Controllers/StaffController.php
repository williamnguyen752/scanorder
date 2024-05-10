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

            // if item id is set
            if (isset($postData['item_id'])) {
                $item_id = $postData['item_id'];
                if ($this->menuItemModel->update($item_id, $itemData)) {
                    $this->session->setFlashData('success', 'Menu item updated');
                }
                else {
                    $this->session->setFlashData('error', 'Fail to update menu item');
                }
            } else {
                // Add
                if ($this->menuItemModel->insert($itemData)) {
                    $this->session->setFlashData('success', 'Menu item added');
                }
                else {
                    $this->session->setFlashData('error', 'Fail to add menu item');
                }
            }

            
        }

        // GET
        $data['restaurant'] = ($id === null) ? null : $this->restaurantModel->find($id);

        return view('addedit_menu', $data);
    }
}