<?php
//CRUD bao gồm danh sách , thêm , xóa , sửa, xem
//user
// GET   ->USER/INDEX    ->INDEX()    --> Danh Sách
//GET    -> USER/CREATE  ->CREATE()   --> Hiển thị form thêm mới
//GET    -> USER/ID/SHOW      ->SHOW($id)  --> Xem chi tiết
//POST   ->USER/STORE    ->STORE()    -->Lưu dữ liệu từ form thêm mới vào db
//GET    ->USER/ID/EDIT  ->EDIT($id)  --> Hiển thị form cập nhật
//PUT    -> USER/ID      ->UPDATE($id)-->Lưu dữ liệu từ form cập nhật vào db
//DELETE ->USER/ID       ->DELETE($id)-->Xóa bản ghi trong db

use Doduy\XuongOop\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {
    
    $router->mount('/users', function () use ($router){
        //CRUD USER
    $router->get('/',             UserController::class   . '@index');
    $router->get('/create',       UserController::class   . '@create');

    $router->post('/store',       UserController::class   . '@store');
    $router->get('/{$id}/show',        UserController::class   . '@show');

    $router->get('/{$id}/edit',   UserController::class   . '@edit');

    $router->put('/{$id}',        UserController::class   . '@update');

    $router->get('/{$id}/delete',     UserController::class   . '@delete');
    });
    
});
