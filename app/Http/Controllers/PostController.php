<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(User $user) {
    	Post::create([
    		'title' => request('title'),
    		'body' => clean(request('body')),
    		'user_id' => $user->id,
    		'slug' => str_slug(request('title'))
    		]);
    	return redirect('/home');
    }

    public function show(User $user) {
    	$posts = $user->posts;
		return view('post.show', compact('posts'));
    }

    public function all() {
    	$posts = Post::orderBy('updated_at', 'desc')->get();
    	return view('index', compact('posts'));
    }

    public function showone(Post $post) {
    	return view('post.showone', compact('post'));
    }

    public function delete(Post $post) {
        $post->delete();
        return back();
    }

    public function updateForm(Post $post) {
        return view('post.updateForm', compact('post'));
    }

    public function update(Post $post) {
        $post->title = request('title');
        $post->body = clean(request('body'));
        $post->slug = str_slug(request('title'));
        $post->save();
        return redirect('/home');
    }

}
