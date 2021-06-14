@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
<div class="container">
  <div class="row">
  <div class="col-4 side">
    <div class="sidebar">
    <div class="mt-3 pl-3 border border-primary rounded">
        <a href=" {{ route('homes') }}" class="fa-5x">
            <i class="fas fa-fist-raised">
            勉強！
            </i>
        </a>
    </div>
  <div class="sidebar_fixed">
  @include('tags.card')
  </div>
   </div>
  </div>
  <div class="col-6 index-article ml-5">
    @foreach($articles as $article)
    @include('articles.card_copy')
    @endforeach
  </div>
  <div class="center toukou">
        <a href="{{ route('articles.create')}}">
    <div class="text-white">

        <h4>新規投稿</h4>
        <h1 class="fa-4x"><i class="fas fa-plus-circle"></i></h1>
      </div>

  </div>
    </a>
  </div>
</div>

@endsection
