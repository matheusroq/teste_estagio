@extends('layouts.basicHome')

@section('title', 'Home')

<div class="container box-home">
    <button class="btn" style="width: 80%;"><a href="{{route('login.index')}}">Login</a></button>
    <button class="btn" style="width: 80%;"><a href="{{route('users.create')}}">Cadastro</a></button>
</div>
