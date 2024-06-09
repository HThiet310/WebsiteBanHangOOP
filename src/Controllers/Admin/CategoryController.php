<?php

namespace Dell\Asmphp2\Controllers\Admin;

use Dell\Asmphp2\Commons\Controller;
use Dell\Asmphp2\Commons\Helper;
use Dell\Asmphp2\Models\Category;
use Rakit\Validation\Validator;

class CategoryController extends Controller
{
    private Category $category; 

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $this->renderViewAdmin('index');
    }
}