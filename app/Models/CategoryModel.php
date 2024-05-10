<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table    = 'categories';
    protected $primaryKey   = 'category_id';
    protected $allowedFields = ['restaurant_id', 'name'];
    protected $returnType = 'array';
}