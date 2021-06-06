@extends('app')

@section('title', $user->name)

@section('content')
  @include('nav')
  <div class="container">
      <div class="row">
        <div class="col-md-9 offset-md-1">
          @include('users.user')
          @include('users.tabs', ['hasArticles' => true, 'hasLikes' => false])
        @foreach($articles as $article)
          @include('articles.card')
        @endforeach
        </div>

      </div>

  </div>
@endsection
