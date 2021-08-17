@extends('layouts.basic')

@section('title', 'Pedidos')

@section('content')
<div class="container">
    <button class="btn"><a href="{{route('orders.create', ['clients' => $clients] )}}">Novo Pedido</a></button>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>ID Pedido</th>
                <th>Cliente</th>
                <th>Status</th>
                <th></th>
                <th></th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->client_id}}</td>
                <td>{{$order->status}}</td>
                <td><button class="btn"><a href="{{ route('order-product.create', ['order' => $order->id]) }}">+ Produtos</a></button></td>
                <td><button class="btn"><a href="{{ route('orders.edit', ['order' => $order->id]) }}">Editar</a></button></td>
                <td><button class="btn"><a href="{{ route('orders.show', ['order' => $order->id]) }}">Visualizar</a></button></td>
                <td>
                    <form id="form_{{$order->id}}" action="{{ route('orders.destroy', ['order' => $order->id]) }}" method="post">
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
    Exibindo  {{ $orders->count() }} orderes de  {{ $orders->total() }} (de  {{ $orders->firstItem() }} a  {{ $orders->lastItem() }} )
</div>
@endsection
