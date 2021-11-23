@extends('app')

@section('title', 'Minhas Passagens - ')


@section('content')
    <div class="card text-center">
        <div class="card-body">
            <table class="table table-bordered" id="tabela">
                <thead>
                    <tr>
                        <td class="bg-warning">Código</td>
                        <td class="bg-warning">Nº de Assento</td>
                        <td class="bg-warning">Data de Compra</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      @foreach ($passagens as $passagem)
                        <th scope="row"> {{ $passagem->codigo}} </th>
                        <td> {{$passagem->num_assento}} </td>
                        <td> {{$passagem->data_compra}}</td>
                      </tr>
                      @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
