@extends('app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $discussion)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img src="{{$discussion->user->avatar}}" class="media-object img-circle"
                            alt="64*64" style="width: 64px;height: 64px">
                        </a>
                    </div>
                    <div class="media-body">
                       <h4 class="media-heading">
                           <a href="/discussions/{{$discussion->id}}">{{$discussion->title}}</a>
                           </h4>
                        发布人：{{$discussion->user->name}}

                        <div class="pull-right">发布时间：{{$discussion->user->updated_at}}</div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@stop


