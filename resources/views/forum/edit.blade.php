@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" role="main">
            {!! Form::model($discussion,['method'=>'PATCH','url'=>'/discussions'.$discussion->id]) !!}
{{--                {!! Form::open(['url'=>'/discussions/edit']) !!}--}}
                @include('forum.form')
                <div>
                    <!--- Sub  Field --->
                    <div class="form-group">
                        {!! Form::submit('更新',['class'=>'btn btn-primary pull-right'])!!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop