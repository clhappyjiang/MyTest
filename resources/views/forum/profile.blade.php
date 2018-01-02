{{--@extends('app')--}}
{{--@section('auth')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-4 col-md-offset-4" role="main">--}}


{{--{!!Form::open(array('url'=>'/user/login'))!!}--}}
{{--<!--- Email Field --->--}}
{{--<div class="form-group">--}}
{{--{!! Form::label('email','邮箱:')!!}--}}
{{--{!! Form::email('email',null,['class'=>'form-control'])!!}--}}
{{--</div>--}}
{{--<!---  Field --->--}}
{{--<div class="form-group">--}}
{{--{!! Form::label('password','密码:')!!}--}}
{{--{!! Form::password('password',null,['class'=>'form-control'])!!}--}}
{{--</div>--}}
{{--<!--- Sub  Field --->--}}
{{--<div class="form-group">--}}
{{--{!! Form::submit('马上登录',['class'=>'btn btn-success form-control'])!!}--}}
{{--</div>--}}

{{--{!!Form::close()!!}--}}
{{--@if($errors->any())--}}
{{--<ul class="list-group">--}}
{{--@foreach($errors->all() as $error)--}}
{{--<li class="list-group-item list-group-item-danger">{{$error}}</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
{{--@endif--}}
{{--@if(Session::has('user_login_failed'))--}}
{{--<div class="alert alert-danger" role="alert">--}}
{{--{{Session::get('user_login_failed')}}--}}
{{--</div>--}}
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

</head>
<body >
<div >

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
    <div class="container col-md-10 col-md-offset-2">
    <div class="jumbotron col-md-9 "  >
        <div class="container">
            <div class="media-left">
                <a href="#">
                    <img src="{{$discussion->user->avatar}}" class="media-object img-circle"
                         alt="64*64" style="width: 64px;height: 64px">
                </a>

            </div>

            <div class="media-body">
                <h4 >校友姓名：{{$discussion->user->name}}<a  href="/discussions/{{$discussion->id}}/edit" >
                    </a></h4>
                毕业时间：{{$discussion->user->graduate}} &nbsp;&nbsp;&nbsp;&nbsp;
                所属院系：{{$discussion->user->college}}

            </div>

        </div>


    </div>
    <div class="col-md-9"   >
        <div class="row">
            <div class="col-md-13" role="main">
                <div class="blog-post">

                    <table class="table table-striped table-bordered table-hover" >
                        <thead>
                        <tr>
                            <th colspan="4">工作地点</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="4">{{$discussion->title}}</td>

                        </tr>
                        <thead>
                        <thead>
                        <tr>
                            <td  colspan="4">工作地址</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="4">{!! $html !!} </td>

                        </tr>
                        <thead>


                        <tr>
                            <th>联系方式</th>
                            <td>校友邮编</td>
                            <td>QQ号</td>
                            <td>校友邮箱</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$discussion->tel}}</td>
                            <td>{{$discussion->post}} </td>
                            <td>{{$discussion->qq}}</td>
                            <td>{{$discussion->user->email}}</td>
                        </tr>

                        </tbody>
                    </table>


                </div>

            </div>

        </div>

</div>
    </div>
</div>
</body>
</html>