<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\ClientLoginController;
use App\Http\Controllers\Admin\Post\ClientPostController;
use App\Http\Controllers\Admin\Event\ClientEventController;


//admin

//Dashboard
Route::GET('/d3ti-admin', function () {
    return view('admin.layout');
})->middleware('auth');

Route::GET('/d3ti-admin', function () {
    return view('admin.dashboard.dashboard');
});

Route::GET('/d3ti-register', function () {
    return view('admin.auth.register');
});

//Client Login Controller
Route::GET('/d3ti-login', [ClientLoginController::class, 'login'])->name('login');
Route::POST('/login/process', [ClientLoginController::class, 'process']);
Route::POST('/register/process', [ClientLoginController::class, 'process_register']);
Route::GET('/d3ti-logout', [ClientLoginController::class, 'logout']);

//Client Post Controller
Route::GET('/d3ti-admin/all_post', [ClientPostController::class, 'all_post']);
Route::GET('/d3ti-admin/add_post', [ClientPostController::class, 'add_post']);
Route::POST('/d3ti-admin/add_post/process', [ClientPostController::class, 'add_post_process']);
Route::GET('/d3ti-admin/edit_post/{post_id}', [ClientPostController::class, 'edit_post']);
Route::DELETE('/d3ti-admin/delete_post/{post_id}', [ClientPostController::class, 'delete_post']);
Route::GET('/d3ti-admin/categories', [ClientPostController::class, 'post_categories']);
Route::POST('/d3ti-admin/categories/process', [ClientPostController::class, 'add_post_categories_process']);

Route::post('/upload-image', function () {
    $image = request()->file('file');

    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->storeAs('public/images', $imageName);

    $imagePath = '../storage/images/' . $imageName;

    return response()->json(['location' => $imagePath]);
});


//Client Post Controller
Route::GET('/d3ti-admin/all_event', [ClientEventController::class, 'all_event']);
Route::GET('/d3ti-admin/add_event', [ClientEventController::class, 'add_event']);
Route::POST('/d3ti-admin/add_event/process', [ClientEventController::class, 'add_event_process']);

/*----------------------------------------------*/


//User

//Homepage
Route::GET('/', function () {
    return view('user.layout');
});

//Client Post Controller
Route::GET('/', [ClientPostController::class, 'homepage']);
Route::GET('/news/{post_link}', [ClientPostController::class, 'article']);
Route::GET('/news', function () {
    return view('user.news.newslayout');
});

//Profil
Route::GET('/tentang', function () {
    return view('user.profil.about');
});
Route::GET('/dosen', function () {
    return view('user.profil.dosen');
});

//Akademik
Route::GET('/kalender-akademik', function () {
    return view('user.akademik.kalenderakademik');
});
Route::GET('/kurikulum', function () {
    return view('user.akademik.kurikulum');
});
Route::GET('/tugas-akhir', function () {
    return view('user.akademik.tugasakhir');
});
Route::GET('/fasilitas', function () {
    return view('user.akademik.fasilitas');
});
Route::GET('/pusat-layanan-terpadu', function () {
    return view('user.akademik.pusatlayananterpadu');
});

//Mahasiswa
Route::GET('/prestasi-mahasiswa', function () {
    return view('user.mahasiswa.prestasi');
});
Route::GET('/emailkomp', function () {
    return view('user.mahasiswa.emailkomp');
});

//Alumni
Route::GET('/forum-alumni', function () {
    return view('user.alumni.forum');
});
Route::GET('/tracer-alumni', function () {
    return view('user.alumni.tracer');
});

//Penelitian
Route::GET('/penelitian-mahasiswa', function () {
    return view('user.penelitian.mahasiswa');
});
Route::GET('/penelitian-dosen', function () {
    return view('user.penelitian.dosen');
});
Route::GET('/penelitian-jurnal', function () {
    return view('user.penelitian.jurnal');
});
Route::GET('/penelitian-kerjasama', function () {
    return view('user.penelitian.kerjasama');
});
Route::GET('/penelitian-pengabdian', function () {
    return view('user.penelitian.pengabdian');
});

//Kontak
Route::GET('/penelitian-dosen-news', function () {
    return view('user.news.dosennews');
});