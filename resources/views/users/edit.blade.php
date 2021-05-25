@extends('app')

@section('title', 'ユーザー編集')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">Kinjiro</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">プロフィール更新</h2>

            @include('error_card_list')
              <h2>
                <i class="fas fa-user-circle fa-5x"　style="color: coral;"></i>
              </h2>
              @if (Auth::id() == 4)
                <p class="text-danger">※ゲストユーザーは、<br>ユーザー名とメールアドレスを編集できません。</p>
              @endif
            <div class="card-text">
              <form method="POST" action="{{ route('users.update', ['name' => $user->name]) }}">
                @method('PATCH')
                @csrf
                <div class="form-group text-left text-dark">
                  <label for="name">ユーザー名</label>
                  @if (Auth::id() == 4)
                  <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" readonly>
                  @else
                  <input class="form-control" type="text" id="name" name="name" required value="{{$user->name ?? old('name') }}">
                  @endif
                  <small>英数字3〜16文字(登録後の変更はできません)</small>
                </div>
                <div class="form-group text-left text-dark">
                  <label for="introduction">プロフィール</label>
                  @if (Auth::id() == 4)
                  <textarea name="introduction" id="introduction" class="form-control" rows="5" value="{{ $user->introduction}}" readonly></textarea>
                  @else
                  <textarea name="introduction" id="introduction" class="form-control" rows="5" required value="{{$user->introduction ?? old('introduction') }}"></textarea>
                  @endif
                </div>
                <button class="btn btn-block peach-gradient mt-2 mb-2" type="submit">更新</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
