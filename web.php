<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeopleController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'index']);
Route::post('/login', [AdminController::class, 'login']);
Route::get('/dashboard', [PeopleController::class, 'dashboard'])->name('dashboard');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title'=>'About', 'name' => 'Yasin Taryaqil Aghyar']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get(); //Eager loading
    $posts = Post::latest()->get(); 
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);//---> Memanggil kelas Post dengan method all untuk menampilkan data
});

/* Route menggunakan slug manual
Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
*/

Route::get('/posts/{post:slug}', function (Post $post) { //{post:slug} Menggunakan Binding dengan model. Jika menggunakan {post} maka yang di ambil hanyalah id nya

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) { //{post:slug} Menggunakan Binding dengan model. Jika menggunakan {post} maka yang di ambil hanyalah id nya

    $posts = $user->posts()->with('category', 'author')->get();  //Lazy eager loading
    return view('posts', ['title' => count($posts) . ' Article by ' . $user->name, 'posts' => $posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) { //{post:slug} Menggunakan Binding dengan model. Jika menggunakan {post} maka yang di ambil hanyalah id nya
    $posts = $category->posts()->with('category', 'author')->get();
    return view('posts', ['title' => 'Articles in: '. $category->name, 'posts' => $posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

