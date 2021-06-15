@extends('app')

@section('title', $tag->hashtag)

@section('content')
  @include('nav')
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
      <div class="card mt-3">
          <nav class="navbar navbar-expand navbar-dark peach-gradient">
            <div class="card-body text-white text-center">
              <h2 class="h2 m-0">{{ $tag->hashtag }}</h2>
              <h4 class="text-right text-white">
                {{ $tag->articles->count() }}件
              </h4>
            </div>
            </nav>
          </div>
          @foreach($tag->articles as $article)
            @include('articles.card')
          @endforeach
        </div>
    </div>
    </div>


@endsection
