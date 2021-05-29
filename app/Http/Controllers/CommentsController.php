<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentsController extends Controller
{

  public function store(CommentRequest $request )
   {
       $savedata = [
           'comment' => $request->comment,
       ];

        $comment = new Comment;
       $comment->fill($savedata)->save();

       return redirect()->route('articles.show', [$savedata['comment']]);
   }

}
