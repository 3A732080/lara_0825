<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

    Post::destroy(2);
});
Route::get('posts', ['as' => 'posts.index', 'uses' =>
    'PostsController@index']);
Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('about', ['as' => 'posts.about', 'uses' =>
    'PostsController@about']);
Route::get('contact', ['as' => 'posts.contact', 'uses' =>
    'PostsController@contact']);

