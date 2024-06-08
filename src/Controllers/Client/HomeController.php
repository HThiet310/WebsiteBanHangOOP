<?php

namespace Dell\Asmphp2\Controllers\Client;

use Dell\Asmphp2\Commons\Controller;
use Dell\Asmphp2\Commons\Helper;
use Dell\Asmphp2\Models\Category;
use Dell\Asmphp2\Models\Product;
use Dell\Asmphp2\Models\User;

class HomeController extends Controller
{
    private Product $product;

    private Category $category;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function index()
    {
        $name = '';
        $products = $this->product->all();
        // Helper::debug($products);
        $products = $this->product->paginate(1, 2);

        // $products = $this->product->findByID($_POST['id']);

        $categories = $this->category->all();


        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products,
            'categories' => $categories,
        ]);
        // Helper::debug($products);
    }
    public function pagination(){
        $products = $this->product->paginate(1, 2);

        $this->renderViewClient('home', [    
            'products' => $products
        ]);
    }
}
