@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1">
                  @include('articles.card')
      </div>
    </div>
  </div><div class="collapse" id="collapseExample">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($article->comments as $comment)
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">投稿日時：{{ $comment->created_at }}</h5>
                    <p class="card-text">内容：{{ $comment->comment }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('comment.store') }}" method="POST">
                @csrf
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <div class="form-group">
                        <label>コメント</label>
                        <textarea class="form-control" placeholder="内容" rows="5" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">コメントする</button>
                </form>
            </div>
        </div>

  </div>

@endsection
