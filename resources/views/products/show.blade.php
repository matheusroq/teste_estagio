@extends('layouts.basic')

@section('title', 'clients')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
