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
        /*
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title', 'asc')->get();
        */
 /*
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title', 'asc')->get();

        $posts = Post::with('author')
        ->latestFirst()
        ->published();

        if($term = request('term'))
        {
            $posts->where('title', 'LIKE', "%{$term}%");
        }

        $posts = $posts->paginate($this->limit);
      return view("index", compact('posts', 'categories'))->with('infography', Category::find(15))->with('photoshop', Category::find(16));
    }
    */

    public function index()
    {
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title', 'asc')->get();

        $posts = Post::with('author')
        ->latestFirst()
        ->published();

        if($term = request('term'))
        {
            $posts->where('title', 'LIKE', "%{$term}%");
        }

        $posts = $posts->paginate($this->limit);

        return view("index", compact('posts', 'categories', \App\Category::take(20)->get()))
        ->with('webdesign', Category::find(1))
        ->with('WebProgramming', Category::find(2))
        ->with('internet', Category::find(14))
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
        // update posts set view_count = view_count + 1 where id = ?
        /* Method 1
        $viewCount = $post->view_count + 1;
        $post->update(['view_count' => $viewCount]);
        */

        # Method 2
        $post->increment('view_count');

        $relatedPosts = $post->category->posts() // get all related posts (in same category)
                             ->where('id', '!=', $post->id) // exclude the current post
                             ->take(10) // take only 5 posts for example
                             ->orderBy('title', 'asc')->get();

        return view("show", compact('post'))->with('relatedPosts', $relatedPosts)->with('title', $post->title);
    }
}
