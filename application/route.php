<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
//编辑文章和删除文章的路由
Route::rule('admin/article/edit/[:id]','admin/article/edit');
Route::rule('admin/article/del/[:id]','admin/article/del');

//编辑产品和删除产品的路由
Route::rule('admin/product/edit/[:id]','admin/product/edit');
Route::rule('admin/product/del/[:id]','admin/product/del');

//编辑评论和删除评论的路由
Route::rule('admin/comment/edit/[:id]','admin/comment/edit');
Route::rule('admin/comment/del/[:id]','admin/comment/del');

Route::rule('admin/search','admin/index/search');

Route::rule('article/[:id]','index/article/index/');
Route::rule('about','index/about');
Route::rule('news','index/news');
Route::rule('product','index/product');
Route::rule('product/item/[:id]','index/item/');
Route::rule('honor','index/honor');
Route::rule('oem','index/oem');
Route::rule('contact','index/contact');
Route::rule('comment','index/comment');
Route::rule('actionsuccess','index/actionsuccess');
Route::rule('item/[:id]','index/item/index/');