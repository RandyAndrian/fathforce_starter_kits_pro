<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $data = [
            'title' => 'List Post',
            'posts' => Post::get(),
            'route' => route('post.create')
        ];
        return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $data = [
            'title' => 'Create New',
            'method' => 'POST',
            'route' => route('post.store')
        ];
        return view('admin.post.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $post = new Post;
        $user_id = Auth()->user()->id;

        $post->user_id = $user_id;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->save();
        return redirect(route("post.index"));
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        // dd($slug);
        $data = [
            'title' => 'List Blog',
            'post' => Post::where('slug', $slug)->first(),
        ];

        return view('post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
           $data = [
            'title' => 'Edit',
            'method' => 'PUT',
            'route' => route('post.update', $id),
            'post' => Post::where('id', $id)->first()
        ];
        // dd($data);
        return view('admin.post.editor', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
        $post = Post::find($id);
        $user_id = Auth()->user()->id;

        $post->user_id = $user_id;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->update();
        return redirect(route("post.index"));
        // dd($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          if(Auth::user()->is_admin != 1) {
            abort(403);
        }
       $destroy = Post::where('id', $id);
       $destroy->delete();
       return redirect(route("post.index"));
    }
}
