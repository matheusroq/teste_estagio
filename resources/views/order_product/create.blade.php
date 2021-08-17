@extends('layouts.basic')

@section('title', 'Adicionar Produtos ao Pedido')

@section('content')
<div class="container">
    <form class="form-container" action="{{ route('order-product.store', ['order' => $order->id]) }}" method="POST">
        @csrf
        <select name="product_id" class="input">
            <option value="">Selecionar um Produto</option>
            @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        {{$errors->has('product_id') ? $errors->first('product_id')  : ''}}
        <button class="btn">Criar</button>
    </form>
</div>
@endsection
