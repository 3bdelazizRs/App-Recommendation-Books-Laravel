<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'idBook' => 'required',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create the comment with the given book ID
        $comment = new Comment();
        $comment->author = $validated['author'];
        $comment->content = $validated['content'];
        $comment->book_id = $validated['idBook'];
        $comment->save();

        return response()->json(['message' => 'Comment added successfully', 'comment' => $comment], 201);
    }

    public function getCommentsByBookId(Request $request)
    {
        $validated = $request->validate([
            'idBook' => 'required'
        ]);
        // Fetch comments by book ID
        $comments = Comment::where('book_id', $validated['idBook'])->get();

        return response()->json(['comments' => $comments], 200);
    }
}
