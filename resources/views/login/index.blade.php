@extends('layouts.basicHome')

@section('title', 'Login')

@section('content')
    <div class="container">
        <form action="{{route('login.login')}}" method="POST" class="form-container">
            <h1>Login</h1>
            @csrf
            <input type="text" class="input" name="email" placeholder="E-mail">
            <input type="password" class="input" name="password" placeholder="Senha">
            <button class="btn">Entrar</button>
        </form>
        {{ isset($error) &&  $error != '' ? $error : ''}}
    </div>
@endsection
