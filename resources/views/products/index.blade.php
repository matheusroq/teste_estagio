@extends('layouts.basic')

@section('title', 'Produtos')

@section('content')
<div class="container">
<table border="1" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th></th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td><button class="btn"><a href="{{ route('products.edit', ['product' => $product->id]) }}">Editar</a></button></td>
                <td><button class="btn"><a href="{{ route('products.show', ['product' => $product->id]) }}">Visualizar</a></button></td>
                <td>
                    <form id="form_{{$product->id}}" action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    Exibindo  {{ $products->count() }} produtos de  {{ $products->total() }} (de  {{ $products->firstItem() }} a  {{ $products->lastItem() }} )
    {{ $products->appends($request)->links() }}
</div>
@endsection
