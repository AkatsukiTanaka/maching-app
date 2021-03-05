@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('トップページ') }}</div>
          <div class="card-body" id="user_id">
            @if( Auth::check() )
              <p>ログイン情報</p>
              <p>名前：{{$user->name}}</p>
              <p>メールアドレス：{{$user->email}}</p>
              <p>会員ID：{{$user->id}}</p>
            @else
              ログインしてね
            @endif
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
