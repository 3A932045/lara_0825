<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //return view('index');
    //return view('post');
    //return view('contact');
    //return view('about');
    //return redirect(route('posts.index'));

    //$post = new Post();   使用save方法新增資料
    //$post -> title = 'test title';
    //$post->content = 'test';
    //$post->save();
    //return 'Saved, OK!';

    //Post::create([    使用create()方法新增資料
    //    'title' => 'created title',
    //    'content' => 'created content',
    //]);
    //return 'Saved, OK!';

    /*$posts = Post::all(); 倒出所有資料
        dd($posts);
        return 'Saved, OK!';*/

    /*$post = Post::find(1);    利用id查詢資料
    dd($post);
    return 'Saved, OK!';*/

    /*$posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    dd($posts);
    return 'Saved, OK!';*/

    $post = Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);
    return 'Saved, OK! (update)';
});

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('post',[PostController::class,'show'])->name('posts.show');
Route::get('contact',[PostController::class,'contact'])->name('posts.contact');
Route::get('about',[PostController::class,'about'])->name('posts.about');
