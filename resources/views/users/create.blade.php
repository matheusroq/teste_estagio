@extends('layouts.basic')

@section('title', 'Products')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('users.store') }}" method="POST">
        @csrf
        <input class="input" type="text" name="name" placeholder="Nome">
        {{$errors->has('name') ? $errors->first('name')  : ''}}
        <input class="input" type="email" name="email" placeholder="E-mail">
        {{$errors->has('email') ? $errors->first('email')  : ''}}
        <input class="input" type="password" name="password" placeholder="Senha">
        {{$errors->has('password') ? $errors->first('password')  : ''}}
        
        <button class="btn">Criar</button>
    </form>
</div>
@endsection
