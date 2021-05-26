@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
<div class="row">
<div class="col-3 side">
<div class="sidebar_fixed side_bar">
@include('tags.card')
</div>
</div>
<div class="col-5 mt-3 index-article">
  @foreach($articles as $article)
  @include('articles.card')
  @endforeach
</div>
</div>
@endsection
