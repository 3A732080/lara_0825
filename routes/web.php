<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostsController;

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
    //return view('index');
//    Post::create([
//        'title' => 'test title',
//        'content' => 'test content',
//    ]);

//    $post = new Post();
//    $post->title='test title';
//    $post->content='testcontent';
//    $post->save();

    //查詢資料(all)
    /*$posts= Post::all();
    dd($posts);*/

    //查詢資料(單一條件)
    /*$post = Post::find(1);
    dd($post);*/

    //查詢資料(設條件)
    /*$posts=Post::where('id','<',10)->orderBy('id','DESC')->get();
    dd($posts);*/

    //更新資料(update)
    /*$post=Post::find(1);
    $post->update([
        'title'=>'updated title',
        'content'=>'updated content',
    ]);*/

    //更新資料(save)
    /*$post=Post::find(1);
    $post->title='savedtitle';
    $post->content='savedcontent';
    $post->save();*/

    //刪除資料(delete)
    /*$post=Post::find(1);
    $post->delete();*/

    //刪除資料(destory)
    //Post::destroy(2);

    //Post::destroy(3,5,7);

    $allPosts=Post::all();
    dd($allPosts);

    $featuredPosts=Post::where('is_feature',1)->get();
    dd($featuredPosts);
});

Route::get('index',[PostsController::class,'index'])->name('posts.index');

Route::get('post',[PostsController::class,'show'])->name('posts.show');

Route::get('about',[PostsController::class,'about'])->name('posts.about');

Route::get('contact',[PostsController::class,'contact'])->name('posts.contact');

