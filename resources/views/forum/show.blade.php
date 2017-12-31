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
                <h4 >校友姓名：{{$discussion->user->name}}<a  href="/discussions/{{$discussion->id}}/edit" >
                    </a></h4>
                毕业时间：{{$discussion->user->graduate}} &nbsp;&nbsp;&nbsp;&nbsp;
                所属院系：{{$discussion->user->college}}

            </div>

        </div>


        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">
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
                            <td>校友</td>
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


@stop
