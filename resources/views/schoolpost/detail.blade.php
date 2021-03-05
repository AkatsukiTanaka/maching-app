@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h1>{{$schoolpost->name}}</h1>
          <div class="container">
            <div class="row">
              <div class="col-1 col-sm-2">
                評価 ☆{{$schoolpost->rating}}
              </div>
              <div class="col-2 col-sm-3">
                クチコミ {{$schoolpost->reviews}}件
              </div>
              <div class="col-9 col-sm-7"></div>
            </div>
          </div>
        </div>

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
            <div class="row">
              <p>最寄駅：「{{$schoolpost->station}}駅」より{{$schoolpost->station_time}}分</p>
            </div>
            <div class="row">
              <div class="col-5">
                <img src="{{asset($schoolpost->image_top)}}" alt="" style="width:100%;">
              </div>
              <div class="col-7">
                <div class="">
                  <h4 class="mark p-3">{{$schoolpost->comment}}</h4>
                </div>
                <div class="">
                  <p>{{$schoolpost->comment}}{{$schoolpost->comment}}{{$schoolpost->comment}}{{$schoolpost->comment}}</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
