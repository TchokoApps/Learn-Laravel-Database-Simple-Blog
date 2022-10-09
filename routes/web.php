<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
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
//    $result = Category::select(['id', 'title'])->orderBy('title')->get();
//    dump($result);

//    select `id`, `name` from `tags` order by `name` desc
//    $result = Tag::select(['id', 'name'])->orderByDesc('name')->get();
//    dump($result);

//    select `id`, `title`, (select count(*) from `comments` where `posts`.`id` = `comments`.`post_id`) as `comments_count` from `posts` order by `created_at` desc limit 5
//    $result = Post::select(['id', 'title'])->latest()->take(5)->withCount('comments')->get();
//    dump($result);


    return view('welcome');
});
