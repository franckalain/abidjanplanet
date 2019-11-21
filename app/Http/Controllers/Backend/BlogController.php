<?php

namespace App\Http\Controllers\Backend;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Intervention\Image\Facades\Image;

class BlogController extends BackendController
{


    protected $uploadPath;

    public function __construct(){
        parent::__construct();
        $this->uploadPath = public_path('img');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(($status = $request->get('status')) && $status == 'trash')
        {
            $posts = Post::onlyTrashed()->with('category', 'author')->latest()->paginate($this->limit);
            $postCount = Post::onlyTrashed()->count();
            $onlyTrashed = TRUE;
        }

        else{
            $posts = Post::with('category', 'author')->latest()->paginate($this->limit);
            $postCount = Post::count();
            $onlyTrashed = FALSE;
        }

        return view('backend.articles.index', compact('posts', 'postCount', 'onlyTrashed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {

        return view('backend.articles.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PostRequest $request)
    {

        $data = $this->handleRequest($request);
        $request->user()->posts()->create($data);

        return redirect(route('backend.articles.index'))->with('message', 'Article a été crée avec succès !');
    }

    private function handleRequest($request)
    {
        $data = $request->all();
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();

            $destination = $this->uploadPath;

            $successUploaded =  $image->move($destination, $fileName);

            if($successUploaded)
            {

                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);


                Image::make($destination . '/' . $fileName)
                    ->resize(250, 170)
                    ->save($destination . '/' . $thumbnail);
            }

            $data['image'] = $fileName;
        }
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('backend.articles.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
        return redirect(route('backend.articles.index'))->with('message', 'Votre Article a été mise à jour avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return redirect('/backend/articles')->with('trash-message', ['Votre article a été envoyé dans la corbeille !', $id]);
    }

    public function forceDestroy($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->forceDelete();

        $this->removeImage($post->image);

        return redirect('/backend/articles?status=trash')->with('message', 'Votre article a été supprimé avec succès !');
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();

        return redirect('/backend/articles')->with('message', 'Votre article a été restauré de la corbeille');
    }

    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);
            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            if ( file_exists($imagePath) ) unlink($imagePath);
            if ( file_exists($thumbnailPath) ) unlink($thumbnailPath);
        }
    }
}
