@section('title', 'clients')

@section('content')
<div class="container">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->email}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
