<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //
    public function addComment(Product $product, Request $request) {
        $inputs = $request->validate([
            'title' => ['required'],
            'comment' => ['required'],
        ]);

        $inputs['customer'] = auth()->user()->id;
        $inputs['product'] = $product->id;

        Comment::create($inputs);
        return back()->with('success', 'Comment Added');;

    }


    public function deleteComment(Comment $comment, Request $request) {
        $comment->delete();
        return back()->with('success', 'Comment Deleted');;

    }
}
