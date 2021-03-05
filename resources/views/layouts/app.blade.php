<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>

 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('user.top')}}">GOLF MACHING</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="Navber">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('schoolpost.index')}}">スクール検索 <span class="sr-only">(現位置)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">プロ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">無効</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a href="{{route('user.signin')}}" class="btn btn-primary mr-2">ログイン</a>
          </li>
          <li class="nav-item">
            <a href="" class="btn btn-success mr-2">新規登録</a>
          </li>
        @else
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              会員メニュー
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">マイページ</a>
              <a class="dropdown-item" href="#">予約一覧</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                ログアウト
              </a>
              <form id="logout-form" action="{{route('user.logout')}}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input type="search" class="form-control mr-sm-2" placeholder="検索..." aria-label="検索...">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">検索</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </nav>

  <!-- フラッシュメッセージ -->
  @if (Session::has('flash_message'))
    <p class="bg-success">{!! Session::get('flash_message') !!}</p>
  @endif

  @if (Session::has('error_message'))
    <p class="bg-danger">{!! Session::get('error_message') !!}</p>
  @endif

  <main class="py-4">
    @yield('content')
  </main>

</body>
