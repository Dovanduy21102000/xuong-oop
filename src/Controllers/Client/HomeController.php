<?php

namespace Doduy\XuongOop\Controllers\Client;

use Doduy\XuongOop\Commons\Controller;
use Doduy\XuongOop\Commons\Helper;
use Doduy\XuongOop\Models\User;
use eftec\bladeone\BladeOne;

class HomeController extends Controller
{
    public function index()
    {
        
        $name ="Duy";
        $this->renderViewClient('home', [
            'name'=> $name
        ]);  


    }
}
