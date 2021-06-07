@extends('app')

@section('title', '記事一覧')

@section('content')
@include('nav')
<div class="container">
  <div class="row">
  <div class="col-4 side ">
    <div class="mt-3 pl-3 border border-primary rounded">
<<<<<<< HEAD
        <a href=" {{ route('homes.index') }}" class="fa-5x">
=======
        <a href=" {{ route('homes') }}" class="fa-5x">
>>>>>>> 445d301a6a68bc95da2db0bb7010051a2258ffff
            <i class="fas fa-fist-raised">
            勉強！
            </i>
        </a>
    </div>
  <div class="sidebar_fixed">
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
