@extends('layouts.basic')

@section('title', 'Clients')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('clients.store') }}" method="POST">
        @csrf
        <input class="input" type="text" name="name" placeholder="Nome">
        {{$errors->has('name') ? $errors->first('name')  : ''}}
        <input class="input" type="text" name="last_name" placeholder="Sobrenome">
        {{$errors->has('last_name') ? $errors->first('last_name')  : ''}}
        <input class="input" type="text" name="email" placeholder="E-mail">
        {{$errors->has('email') ? $errors->first('email')  : ''}}
        <input class="input" type="number" name="cpf" placeholder="CPF">
        {{$errors->has('cpf') ? $errors->first('cpf')  : ''}}
        <button class="btn">Criar</button>
    </form>
</div>
@endsection
