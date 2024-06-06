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

    // public function index()
    // {
    //     [$products, $totalPage] = $this->product->paginate($_GET['page'] ?? 1);

    //     $this->renderViewClient('products.index', [
    //         'products' => $products,
    //         'totalPage' => $totalPage
    //     ]);
    // }
    public function index()
    {
    $name = '';
    $products = $this->product->all();
    $categories = $this->category->all();

    $this->renderViewClient('home', [
        'name' => $name,
        'products' => $products,
        'categories' => $categories,
    ]);

    }
}
