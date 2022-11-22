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

    /*$posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();    條件式查詢
    dd($posts);
    return 'Saved, OK!';*/

    /*$post = Post::find(1); 更新資料
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);
    return 'Saved, OK! (update)';*/

    /*$post = Post::find(1);    save方法更新資料
    $post -> title = 'saved title';
    $post->content = 'saved content';
    $post->save();
    return 'Saved, OK! update';*/

    /*$post = Post::find(1);    刪除
    $post->delete();
    return 'Deleted';*/

    /*Post::destroy(2);     使用destroy方法刪除
    return 'Deleted, destroy!';*/

    /*Post::destroy(3, 5, 7); 刪除特定資料
    return 'Deleted 3 5 7';*/

    /*$allPosts = Post::all();
    dd($allPosts);*/

    /*$featuredPosts = Post::where('is_feature', 1)->get();
    dd($featuredPosts);*/

    /*$fourthPost = Post::find(4);
    dd($fourthPost);*/

    /*$lastPost = Post::orderBy('id', 'DESC')->first();
    dd($lastPost);*/

    $post = Post::find(6);
    echo '標題:' . $post->title . '<br>';
    echo '內容:' . $post->content . '<br>';
    echo '-----------------' . '<br>';
    //$comments = $post->comments()->get();
    $comments = $post->comments;
    foreach($comments as $comment){
        echo '留言:' . $comment->content . '<br>';
        echo '--------------------' . '<br>';
    }
});

Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::get('post',[PostController::class,'show'])->name('posts.show');
Route::get('contact',[PostController::class,'contact'])->name('posts.contact');
Route::get('about',[PostController::class,'about'])->name('posts.about');
