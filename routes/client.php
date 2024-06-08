<?php

// Giả định web có các trang: 
//      Trang chủ
//      Giới thiệu
//      Sản phẩm
//      Chi tiết sản phẩm
//      Liên hệ

// Để định nghĩa đc cần tạo controller trc
// Tiếp theo khai báo function tương ứng để xử lý
// Bước cuối, định nghĩa đường dẫn

// HTTP Method: get, post, put, path, delete, options, patch, head

use Dell\Asmphp2\Controllers\Admin\CategoryController;
use Dell\Asmphp2\Controllers\Client\HomeController;
use Dell\Asmphp2\Controllers\Client\AboutController;
use Dell\Asmphp2\Controllers\Client\AuthentController;
use Dell\Asmphp2\Controllers\Client\ContactController;
use Dell\Asmphp2\Controllers\Client\ProductController;


$router->get('/',                       HomeController::class       . '@index');
$router->get('/about',                  AboutController::class      . '@index');

// Authent
$router->get('/login',                  AuthentController::class       . '@showFormLogin');
$router->post('/login/handle-login',    AuthentController::class       . '@login');
$router->get('/logout',                 AuthentController::class       . '@logout');
$router->get('/register',               AuthentController::class       . '@showFormRegister');
$router->post('/register/store',        AuthentController::class       . '@store');

// Contact
$router->get('/contact',                HomeController::class       . '@index');
$router->get('/contact/store',          HomeController::class       . '@index');

// Product
$router->get('/product',                ProductController::class    . '@index');
$router->get('/product/{id}',           ProductController::class    . '@detail');

// Category
$router->get('/categories',             CategoryController::class    . '@index');
$router->get('/categories/{id}',        CategoryController::class    . '@detail');

