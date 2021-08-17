@extends('layouts.basic')

@section('title', 'clients')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <input class="input" value="{{ $client->name ?? old('name') }}" type="text" name="name" placeholder="Nome">
        {{$errors->has('name') ? $errors->first('name')  : ''}}
        <input class="input" value="{{ $client->last_name ?? old('last_name') }}" type="text" name="last_name" placeholder="Sobrenome">
        {{$errors->has('last_name') ? $errors->first('last_name')  : ''}}
        <input class="input"value="{{ $client->email ?? old('email') }}" type="text" name="email" placeholder="E-mail">
        {{$errors->has('email') ? $errors->first('email')  : ''}}
        <button class="btn">Editar</button>
    </form>
</div>
@endsection
