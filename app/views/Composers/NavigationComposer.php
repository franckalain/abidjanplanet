<?php
namespace App\Views\Composers;

use Illuminate\View\View;

use App\Category;

use App\Post;

class NavigationComposer
{
    public function compose(View $view)
    {
        $this->composePopularPosts($view);
    }

    private function composePopularPosts(View $view){
        $popularPosts = Post::published()->popular()->take(3)->get();
        $view->with('popularPosts', $popularPosts);
    }
}
