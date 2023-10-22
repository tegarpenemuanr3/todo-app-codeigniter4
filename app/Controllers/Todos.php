<?php

namespace App\Controllers;

use App\Models\TodosModel;
use App\Controllers\BaseController;

class Todos extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new TodosModel();
    }
    
    public function index()
    {
        
    }
}

// Dibuat dengan:
// php spark make:controller Todos