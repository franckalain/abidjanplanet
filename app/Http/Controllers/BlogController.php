<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class BlogController extends Controller
{

    protected $limit = 10;

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
                    ->with('actualites', Category::find(1))
                    ->with('zoom', Category::find(2))
                    ->with('geeks', Category::find(4))
                    ->with('sport', Category::find(5))
                    ->with('gourmets', Category::find(6))
                    ->with('tourisme', Category::find(7))
                    ->with('video', Category::find(8))
                    ->with('gazoil', Category::find(9))
                    ->with('immobilier', Category::find(10))
                    ->with('fashion', Category::find(11))
                    ->with('modealaune', Category::find(12))
                    ->with('modealaunegauche', Category::find(13))
                    ->with('modealaunedroit', Category::find(14))
                    ->with('mode', Category::find(16))
                    ->with('magazine', Category::find(17))
                    ->with('cinema', Category::find(20));

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
        $categories = Category::with(['posts' => function($query){
            $query->published();
        }])->orderBy('title', 'asc')->get();

        $posts = Post::with('author')
        ->latestFirst()
        ->published();


        $posts = $posts->paginate($this->limit);

        $post->increment('view_count');

        $relatedPosts = $post->category->posts() // get all related posts (in same category)
                             ->where('id', '!=', $post->id) // exclude the current post
                             ->take(10) // take only 5 posts for example
                             ->orderBy('title', 'asc')->get();

        return view("show", compact('post', 'posts', 'categories'))->with('relatedPosts', $relatedPosts)->with('title', $post->title)->with('gazoil', Category::find(9));
    }

    public function magazine()
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

        return view("categories.magazine", compact('posts', 'categories', \App\Category::take(50)->get()))
                    ->with('actualites', Category::find(1))
                    ->with('zoom', Category::find(2))
                    ->with('geeks', Category::find(4))
                    ->with('sport', Category::find(5))
                    ->with('gourmets', Category::find(6))
                    ->with('tourisme', Category::find(7))
                    ->with('video', Category::find(8))
                    ->with('gazoil', Category::find(9))
                    ->with('immobilier', Category::find(10))
                    ->with('fashion', Category::find(11))
                    ->with('modealaune', Category::find(12))
                    ->with('modealaunegauche', Category::find(13))
                    ->with('modealaunedroit', Category::find(14))
                    ->with('magazine', Category::find(17))
                    ->with('immobilier-feature', Category::find(18))
                    ->with('annonces', Category::find(19));
    }

    public function annonces()
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

        return view("categories.annonces", compact('posts', 'categories', \App\Category::take(50)->get()))
                    ->with('actualites', Category::find(1))
                    ->with('zoom', Category::find(2))
                    ->with('geeks', Category::find(4))
                    ->with('sport', Category::find(5))
                    ->with('gourmets', Category::find(6))
                    ->with('tourisme', Category::find(7))
                    ->with('video', Category::find(8))
                    ->with('gazoil', Category::find(9))
                    ->with('immobilier', Category::find(10))
                    ->with('fashion', Category::find(11))
                    ->with('modealaune', Category::find(12))
                    ->with('modealaunegauche', Category::find(13))
                    ->with('modealaunedroit', Category::find(14))
                    ->with('magazine', Category::find(17))
                    ->with('immobilier-feature', Category::find(18))
                    ->with('annonces', Category::find(19));
    }
}

