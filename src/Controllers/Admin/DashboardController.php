<?php

namespace Dell\Asmphp2\Controllers\Admin;

use Dell\Asmphp2\Commons\Controller;
use Dell\Asmphp2\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}