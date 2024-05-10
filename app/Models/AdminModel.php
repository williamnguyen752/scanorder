<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table    = 'admins';
    protected $primaryKey   = 'admin_id';
    protected $allowedFields = ['username', 'password_hash'];
    protected $returnType = 'array';
}