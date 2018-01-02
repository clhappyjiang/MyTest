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
                           <a href="/discussions/{{$discussion->id}}">校友ID:{{$discussion->user->id}}  &nbsp;&nbsp;&nbsp;校友名称：{{$discussion->user->name}}</a>
                           </h4>
                        <div class="col-md-4">邮箱地址：{{$discussion->user->email}}
                        </div>
                        校友联系方式：{{$discussion->tel}}&nbsp;&nbsp;&nbsp;
                        校友邮编：{{$discussion->post}}&nbsp;&nbsp;&nbsp;
                        校友QQ：{{$discussion->qq}}

                        <div class="pull-right">校友注册时间：{{$discussion->user->updated_at}}</div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container col-md-3">
            @foreach ($discussions as $discussion)

            @endforeach
        </div>

        {{ $discussions->links() }}
    </div>
@stop


