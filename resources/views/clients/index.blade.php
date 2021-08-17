@extends('layouts.basic')

@section('title', 'clients')

@section('content')
<div class="container">
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th></th>
                <th colspan="2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td><button class="btn"><a href="{{ route('clients.edit', ['client' => $client->id]) }}">Editar</a></button></td>
                <td><button class="btn"><a href="{{ route('clients.show', ['client' => $client->id]) }}">Visualizar</a></button></td>
                <td>
                    <form id="form_{{$client->id}}" action="{{ route('clients.destroy', ['client' => $client->id]) }}" method="post">
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
    Exibindo  {{ $clients->count() }} clientes de  {{ $clients->total() }} (de  {{ $clients->firstItem() }} a  {{ $clients->lastItem() }} )
</div>
@endsection
