<?php
//Website có các trang là :
//trang chủ
//Giới thiệu
//Liên hệ
//Chi tiết sản phẩm
//Sản phẩm
//để định nghĩa được , đầu tiên phải tạo controller trước
//Để khia bảo function tương ứng để xử lý
//ĐỊnh nghĩa được đường đẫn
//HTTP <ethod : get post put path delete option head 

use Doduy\XuongOop\Controllers\Client\AboutController;
use Doduy\XuongOop\Controllers\Client\ContactController;
use Doduy\XuongOop\Controllers\Client\HomeController;
use Doduy\XuongOop\Controllers\Client\ProductController;

$router->get('/',                HomeController::class     . '@index');
$router->get('/about',           AboutController::class    . '@index');
$router->get('/contact',         ContactController::class  . '@index');
$router->post('/contact/store',  ContactController::class  . '@store');
$router->get('/products',        ProductController::class  . '@index');
$router->get('/products/{id}',   ProductController::class  . '@detail');
