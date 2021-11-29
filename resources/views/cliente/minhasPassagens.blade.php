@extends('app')

@section('title', 'Minhas Passagens - ')


@section('content')
    <div class="card text-center">
        <div class="card-body">
            <table class="table table-bordered" id="tabela">
                <thead>
                    <tr>
                        <td class="bg-warning">Código</td>
                        <td class="bg-warning">Cidade de Origem</td>
                        <td class="bg-warning">Cidade de Destino</td>
                        <td class="bg-warning">Nº de Assento</td>
                        <td class="bg-warning">Data de Compra</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      @foreach ($passagens as $passagem)
                        <th scope="row"> {{ $passagem->codigo}} </th>
                        <td> {{$passagem->cidade_partida}}</td>
                        <td> {{$passagem->cidade_chegada}}</td>
                        <td> {{$passagem->num_assento}} </td>
                        <td> {{$passagem->data}}</td>
                      </tr>
                      @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
