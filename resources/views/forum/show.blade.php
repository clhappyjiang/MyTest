@extends('app')
@section('content')

    <div class="jumbotron " >
        <div class="container">
            <div class="media-left">
                <a href="#">
                    <img src="{{$discussion->user->avatar}}" class="media-object img-circle"
                         alt="64*64" style="width: 64px;height: 64px">
                </a>

            </div>

            <div class="media-body">
                <h4 class="media-heading">{{$discussion->title}}<a  href="/discussions/{{$discussion->id}}/edit" >
                    </a></h4>
                {{$discussion->user->name}}

            </div>

        </div>


        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="blog-post">
                    {!! $html !!}
                </div>
            </div>
        </div>
    </div>
@stop