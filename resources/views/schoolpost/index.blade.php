@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">{{ __('スクール一覧')}}</div>
        <div class="card-body">
          @if (count($errors) > 0)
          <div class="errors">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="container">
            @foreach ($schoolposts as $schoolpost)
              <div class="row mb-4 pb-4 border-bottom">
                <div class="col-4">
                  <a href="/schoolpost/{{$schoolpost->id}}">
                    <img src="{{asset($schoolpost->image_top)}}" alt="" style="width:100%;">
                  </a>
                </div>
                <div class="col-8">
                  <p>{{$schoolpost->comment}}</p>
                  <h3>{{$schoolpost->name}}</h3>
                  <div class="container">
                    <div class="row">
                      <div class="col">
                        評価 ☆{{$schoolpost->rating}}
                      </div>
                      <div class="col">
                        クチコミ {{$schoolpost->reviews}}件
                      </div>
                      <div class="col">
                        「{{$schoolpost->station}}」より{{$schoolpost->station_time}}分
                      </div>
                    </div>
                  </div>
                  <a href="/schoolpost/{{$schoolpost->id}}" class="btn btn-primary btn-lg">スクール詳細はこちら</a>
                </div>
              </div>
            @endforeach
          </div>
          <!--
          <table class="table">
            <thead>
              <tr>
                <th>スクール名</th>
                <th>最寄駅</th>
                <th>コメント</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($schoolposts as $schoolpost)
                <tr>
                  <td>{{$schoolpost->name}}</td>
                  <td>{{$schoolpost->station}}</td>
                  <td>{{$schoolpost->comment}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
