@extends('app')
@section('content')
    <div class="col-md-12">
        <div class="col-md-3 blog-sidebar"  >
            <div class="sidebar-module sidebar-module-inset">
                <h4>关于</h4>
                <p>本网站数据均来自于苏州科技大学毕业校友汇总而成。</p>
            </div>
            <div class="sidebar-module">
                <h4>著名校友列举</h4>
                <ol class="list-unstyled">
                    <li><a href="http://127.0.0.1:8000/discussions/3">李得报</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/4">王壮</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/5">大大</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/6">理光</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/7">王二麻子</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/8">张三</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/11">张飞</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/20">大菠萝</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/13">孙子</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/19">翠翠</a></li>
                    <li><a href="http://127.0.0.1:8000/discussions/26">王晨</a></li>

                </ol>
            </div>
            <div class="sidebar-module">
                <h4>友情合作单位</h4>
                <ol class="list-unstyled">
                    <li><a href="http://www.usts.edu.cn/">苏州科技大学</a></li>
                    <li><a href="http://www.qq.com/">腾讯 QQ</a></li>
                    <li><a href="https://tieba.baidu.com/index.html">百度贴吧</a></li>
                </ol>
            </div>
        </div>

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
            <div class="col-md-12">
                <nav>
                    <ul class="pager">
                        <li><a href="/discussions/{{$discussion->id-1}}">上一位校友</a></li>
                        <li><a href="/">返回通信录主页</a></li>
                        <li><a href="/discussions/{{$discussion->id+1}}">下一位校友</a></li>
                    </ul>
                </nav>
            </div>

    </div>



    </div>


    </div>

@stop
