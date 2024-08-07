<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {

        $input = $request->validated();

        Comment::create($input);

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}