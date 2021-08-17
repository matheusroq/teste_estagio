@extends('layouts.basic')

@section('title', 'Pedidos')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('orders.store') }}" method="POST">
        @csrf
        <select name="client_id" class="input">
            <option value="">Selecionar cliente</option>
            @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>
        {{$errors->has('client_id') ? $errors->first('client_id')  : ''}}
        <button class="btn">Criar</button>
    </form>
</div>
@endsection
