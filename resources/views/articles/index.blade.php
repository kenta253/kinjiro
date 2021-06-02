@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
<div class="container">
  <div class="row">
  <div class="col-4 side　sidebar_fixed">
    <div class="mt-3 pl-3 border border-primary rounded">
        <a href="{{'tasks.index '}}" class="fa-5x"><i class="fas fa-fist-raised">
          勉強！
        </i></a>
    </div>
  <div class="sidebar_fixed side_bar">
  @include('tags.card')
  </div>
  </div>
  <div class="col-7 index-article ml-5">
    @foreach($articles as $article)
    @include('articles.card')
    @endforeach
  </div>
  </div>
</div>

@endsection
