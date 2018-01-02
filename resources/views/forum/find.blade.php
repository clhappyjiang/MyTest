{{--@extends('app')--}}
{{--@section('content')--}}


    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-9" role="main">--}}
            {{----}}





            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@stop--}}


{{--@extends('app')--}}
{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-6 col-md-offset-2" role="main">--}}
{{--{!! Form::open(['url'=>'/discussions']) !!}--}}
{{--@include('forum.form')--}}
{{--<div>--}}
{{--<!--- Sub  Field --->--}}
{{--<div class="form-group">--}}
{{--{!! Form::submit('发表',['class'=>'btn btn-primary pull-right'])!!}--}}
{{--</div>--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@stop--}}

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link  rel="stylesheet"  href="css/bootstrap.css">
    <link  rel="stylesheet"  href="css/style.css">

    <style>
        .back{
            background-image: url(/images/bg.png);
            background-repeat:repeat-x  ;
            margin-bottom: 0px;
            margin-top: 0px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
    </style>
</head>
<body >
<div class="back">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">新闻发布系统</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">首页</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li><a href="/admin">{{ Auth::user()->name }}</a></li>
                        <li><a href="/discussions/create">校友信息注册</a></li>
                        <li><a href="/find">搜索校友</a></li>
                        <li><a href="/logout">退出登录</a></li>
                    @else
                        <li><a href="/admin">管理员登录</a></li>
                        <li><a href="/user/login">普通用户登录</a></li>
                        <li><a href="/user/register">注 册</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>





    <div class="container"  >
        <div class="jumbotron " style="margin-top: 200px;margin-bottom: 400px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 " role="main">
                        {!! Form::open(['url'=>'/showfind']) !!}

                        <div class="form-group">
                            {!! Form::label('id','您想要搜索的校友名称:')!!}
                            {!! Form::text('id',null,['class'=>'form-control'])!!}
                        </div>

                        <div>
                            <!--- Sub  Field --->
                            <div class="form-group">
                                {!! Form::submit('搜索',['class'=>'btn btn-primary pull-right'])!!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>