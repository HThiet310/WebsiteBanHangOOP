<?php

namespace Dell\Asmphp2\Controllers\Client;

use Dell\Asmphp2\Commons\Controller;
use Dell\Asmphp2\Commons\Helper;
use Dell\Asmphp2\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Hthiet';

        $this->renderViewClient('Home', [
            'name' => $name
        ]);
    }
}