@extends('app')

@section('title', '記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
          @include('articles.card')
      </div>
    </div>
          @include('articles.comment')
</div>

@endsection
