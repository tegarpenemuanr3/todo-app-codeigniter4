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
        $data['todos'] = $this->userModel->findAll();
        return view('todos/index', $data);
    }

    public function view($id)
    {
        $data['todo'] = $this->userModel->find($id);
        return view('todos/detail', $data);
    }
}

// Dibuat dengan:
// php spark make:controller Todos