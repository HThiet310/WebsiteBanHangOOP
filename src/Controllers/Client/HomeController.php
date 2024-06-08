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
    public function index($page = 1)
{
    // Lấy dữ liệu sản phẩm với phân trang
    list($products, $totalPage) = $this->product->paginate($page);

    // Lấy tất cả danh mục
    $categories = $this->category->all();

    // Truyền dữ liệu vào view
    $this->renderViewClient('home', [
        'products' => $products,
        'categories' => $categories,
        'totalPage' => $totalPage,
        'currentPage' => $page
    ]);
}
    // public function pagination(){
    //     $products = $this->product->paginate(1, 2);

    //     $this->renderViewClient('home', [    
    //         'products' => $products
    //     ]);
    // }
}
