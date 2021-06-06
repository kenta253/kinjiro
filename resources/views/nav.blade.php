  <nav class="navbar navbar-expand navbar-dark peach-gradient">

  <a class="navbar-brand text-uppercase font-weight-bold" href="/home"><i class="far fa-sticky-note mr-2"></i>Kinjiro</a>
  <ul class="navbar-nav ml-auto mr-5">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
    </li>
    @endguest

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login')}}">ログイン</a>
    </li>
    <a href="{{ route('login.guest') }}" class="btn btn-default pl-3 pr-3 pt-2 ml-3">
     ゲストログイン
    </a>
</button>
    @endguest

    @auth
    <li class="nav-item">
<<<<<<< HEAD
      <a href="{{route('homes.index')}}" class="nav-link"><i class="fas fa-fist-raised">
=======
      <a href="{{route('homes')}}" class="nav-link"><i class="fas fa-fist-raised">
>>>>>>> 445d301a6a68bc95da2db0bb7010051a2258ffff
        勉強しに行く
      </i></a>
    </li>
    @endauth

    @auth
    <li class="nav-item">
      <a class="nav-link mr-3" href="{{ route('articles.create')}}"><i class="fas fa-pen mr-1"></i>投稿する</a>
    </li>
    @endauth

    @auth
    <!-- Dropdown -->
    <li class="nav-item dropdown mr-4">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
           onclick="location.href='{{ route("users.show", ["name" => Auth::user()->name]) }}'">
          マイページ
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{ route('logout') }}"> {{--この行を編集--}}
      @csrf {{--この行を追加--}}
    </form>
    <!-- Dropdown -->
    @endauth {{--この行を追加--}}

  </ul>

</nav>
