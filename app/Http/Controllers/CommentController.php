<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class CommentController extends Controller
{
    public function create(Post $post)
    {
        return view('comments.create', compact('post'));
    }

    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'body' => 'required',
            'post_id' => 'required',
            'user_id' => 'required',
        ]);
        $comment = new Comment();
        $comment->body = $data['body'];
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $data['post_id'];

        $post->comments()->save($comment);

        return redirect()->route('posts.index');
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $data = $request->validate([
            'body' => 'required',
        ]);
        $this->authorize('update', $comment);
        $comment->update($data);

        return redirect()->route('posts.index');
    }

    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();

        return redirect()->route('posts.index');
    }
}
