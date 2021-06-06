<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use Auth;


class CommentsController extends Controller
{

  public function store(CommentRequest $request, Comment $comment)
      {
        $article = Article::find($request->article_id);
         //まず該当の投稿を探す

        $comment -> comment    = $request -> comment;
        $comment -> user_id = Auth::id();
        $comment -> article_id = $request -> article_id;
        $comment -> save();
        return view('articles.show', compact('article'));
      }

}
