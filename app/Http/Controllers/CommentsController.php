<?php

namespace App\Http\Controllers;

use App\Post;

use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) {

        $this->validate(request(), [
            'body'  => 'required|min:2'
        ]);

        // $post->addComment(request('body'));

        $post->addComment([
            'body' => request('body'),
            'user_id' => \Auth::user()->id
        ]);

        return back();

    }

    public function create(Post $post) {

        return redirect('/posts/'.$post->id.'/#comment');

    }

}
