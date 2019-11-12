<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class BlogController extends Controller
{

    protected $limit = 2;

/*
    public function index()
    {
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title', 'asc')->get();

        $posts = Post::with('author')
        ->latestFirst()
        ->published()
        ->paginate($this->limit);
;        return view("index", compact('posts', 'categories'));
    }
*/

    public function index()
    {
      return view('index')->with('categories', Category::take(20)->get())
      ->with('WebProgramming', Category::find(2))
      ->with('Internet', Category::find(3))
      ->with('Photography', Category::find(5));
    }


    public function category(Category $category)
    {
        $categoryName = $category->title;

        $posts = $category->posts()
                          ->with('author')
                          ->latestFirst()
                          ->published()
                          ->paginate($this->limit);

         return view("category", compact('posts', 'categoryName'));
    }

    public function show(Post $post)
    {
        return view("show", compact('post'));
    }
}
