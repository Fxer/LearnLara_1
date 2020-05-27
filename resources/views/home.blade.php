@extends('layouts.app')
@section('title-block')
    Home
@endsection

@section('content')
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi odio quia quo. Amet assumenda fugit illo illum inventore maiores maxime rerum tempora. Consequatur corporis cum dicta facere perferendis quam rem.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
