@extends('app')

@section('title', 'Pagamento - ')

@section('content')

    @section('usaMigalha', TRUE)
    @section('nomeMigalha1', 'Dashboard')
    @section('rotaMigalha1') {{route('selecao')}} @endsection
    @section('nomeMigalha2', 'Consultar Pasagens')
    @section('rotaMigalha3') {{ route('confirmacao') }} @endsection
    @section('nomeMigalha3', 'Editar')    
    @section('linkM2', 'ativado')
    @section('estiloMigalha2', 'migalhaRetanguloAtiva')
    @section('estiloMigalhaT2', 'migalhaTrianguloAtiva')
        
        
        
@endsection