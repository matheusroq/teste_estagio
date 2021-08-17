@extends('layouts.basic')

@section('title', 'Products')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('products.store') }}" method="POST">
        @csrf
        <input class="input" type="text" name="name" placeholder="Nome">
        {{$errors->has('name') ? $errors->first('name')  : ''}}
        <input class="input" type="text" name="description" placeholder="Descrição">
        {{$errors->has('description') ? $errors->first('description')  : ''}}
        <input class="input" type="number" step="0.010" name="price" placeholder="Price">
        {{$errors->has('price') ? $errors->first('price')  : ''}}
        <input class="input" type="quantity" name="quantity" placeholder="Quantidade">
        {{$errors->has('quantity') ? $errors->first('quantity')  : ''}}
        <button class="btn">Criar</button>
    </form>
</div>
@endsection
