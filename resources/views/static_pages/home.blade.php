@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>主页</h1>
        <p class="lead">
            你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training/5.5">Hello Laravel!!!</a>
        </p>
        <p>
            一切，将从这里开始
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@stop