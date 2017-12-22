{{--@extends('app')--}}
{{--@section('auth')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-4 col-md-offset-4" role="main">--}}

        {{--{!!Form::open(array('url'=>'/user/register'))!!}--}}
            {{--<!---  Name Field--->--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('name','用户名:')!!}--}}
                {{--{!! Form::text('name',null,['class'=>'form-control'])!!}--}}
            {{--</div>--}}
            {{--<!--- Email Field --->--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('email','邮箱:')!!}--}}
                {{--{!! Form::email('email',null,['class'=>'form-control'])!!}--}}
            {{--</div>--}}
            {{--<!---  Field --->--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('password','密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')!!}--}}
                {{--{!! Form::password('password',null,['class'=>'form-control'])!!}--}}
            {{--</div>--}}
            {{--<!---  Field --->--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('password_confirmation','确认密码:')!!}--}}
                {{--{!! Form::password('password_confirmation',null,['class'=>'form-control'])!!}--}}
            {{--</div>--}}
            {{--<!--- Sub  Field --->--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::submit('马上注册',['class'=>'btn btn-success form-control'])!!}--}}
            {{--</div>--}}

        {{--{!!Form::close()!!}--}}
            {{--@if($errors->any())--}}
                {{--<ul class="list-group">--}}
                    {{--@foreach($errors->all() as $error)--}}
                        {{--<li class="list-group-item list-group-item-danger">{{$error}}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--@endif--}}
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
            background-repeat:repeat;
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
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                    <li><a href="/discussions/create">发布新闻</a></li>
                    <li><a href="/find">搜索新闻</a></li>
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
    <div class="jumbotron col-md-4 col-md-offset-4" style="margin-top: 100px;margin-bottom: 200px">
    <div class="row">
        <div  role="main">

        {!!Form::open(array('url'=>'/user/register'))!!}
        <!---  Name Field--->
            <div class="form-group">
                {!! Form::label('name','用户名:')!!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
            </div>
            <!--- Email Field --->
            <div class="form-group">
                {!! Form::label('email','邮箱:')!!}
                {!! Form::email('email',null,['class'=>'form-control'])!!}
            </div>
            <!---  Field --->
            <div class="form-group">
                {!! Form::label('password','密码:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;')!!}<br>
                {!! Form::password('password',null,['class'=>'form-control'])!!}
            </div>
            <!---  Field --->
            <div class="form-group">
                {!! Form::label('password_confirmation','确认密码:')!!}<br>
                {!! Form::password('password_confirmation',null,['class'=>'form-control'])!!}
            </div>
            <!--- Sub  Field --->
            <div class="form-group">
                {!! Form::submit('马上注册',['class'=>'btn btn-success form-control'])!!}
            </div>

            {!!Form::close()!!}
            @if($errors->any())
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item list-group-item-danger">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    </div>
</div>

</div>
</body>
</html>