<?php namespace App\Models;

use CodeIgniter\Model;

class RestaurantModel extends Model
{
    protected $table    = 'restaurants';
    protected $primaryKey   = 'restaurant_id';
    protected $allowedFields = ['name', 'email', 'phone', 'password_hash'];
    protected $returnType = 'array';
}