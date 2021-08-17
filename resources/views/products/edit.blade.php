@extends('layouts.basic')

@section('title', 'Products')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <input class="input" value="{{ $product->name ?? old('name')}}" type="text" name="name" placeholder="Nome">
        {{$errors->has('name') ? $errors->first('name')  : ''}}
        <input class="input" value="{{ $product->description ?? old('description') }}" type="text" name="description" placeholder="Descrição">
        {{$errors->has('description') ? $errors->first('description')  : ''}}
        <input class="input" value="{{ $product->price ?? old('price') }}" type="number" step="0.010" name="price" placeholder="Price">
        {{$errors->has('price') ? $errors->first('price')  : ''}}
        <input class="input" value="{{ $product->quantity ?? old('quantity')}}" type="quantity" name="quantity" placeholder="Quantidade">
        {{$errors->has('quantity') ? $errors->first('quantity')  : ''}}
        <button class="btn">Editar</button>
    </form>
</div>
@endsection
