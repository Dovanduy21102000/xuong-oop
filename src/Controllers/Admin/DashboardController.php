<?php

namespace Doduy\XuongOop\Controllers\Admin;

use Doduy\XuongOop\Commons\Controller;
use Doduy\XuongOop\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}