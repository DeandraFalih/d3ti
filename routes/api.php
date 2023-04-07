<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\api\Auth\LoginController;
use App\Http\Controllers\Admin\api\Post\PostController;

//Admin

//API Login
Route::POST('/register/process', [LoginController::class, 'process_register']);

//API Post
Route::POST('/d3ti-admin/add_post/process', [PostController::class, 'add_post_process']);
Route::POST('/d3ti-admin/categories/process', [PostController::class, 'add_categories_process']);
Route::GET('/d3ti-admin/edit_post/{post_id}', [PostController::class, 'edit_post']);



//User

//API Post
Route::GET('/', [PostController::class, 'homepage']);
Route::GET('/news/{post_link}', [PostController::class, 'article']);