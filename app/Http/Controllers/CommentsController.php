<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Comment;
use App\Article;



class CommentsController extends Controller
{

  public function store(CommentRequest $request, Comment $comment)
      {
        $article = Article::find($request->article_id);
         //まず該当の投稿を探す

        $comment->fill($request->all());
        $comment->comment =$request->comment;
        $comment->user_id= $request->user()->id;
        $comment->article_id = $request->article_id;
        $comment -> save();

        return view('articles.show', compact('article'));
      }

}
