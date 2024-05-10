<?php namespace App\Models;

use CodeIgniter\Model;

class MenuItemModel extends Model
{
    protected $table    = 'menu_items';
    protected $primaryKey   = 'item_id';
    protected $allowedFields = ['category_id', 'name', 'description', 'price'];
    protected $returnType = 'array';
}