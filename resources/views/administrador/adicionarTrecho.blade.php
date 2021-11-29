@extends('app')

@section('title', 'Cadastrar trecho:')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="/css/estiloCriacao.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
    <div id="centerpiece">

        <h4 class="header">Cadastrar trecho:</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <form method="POST" action="{{ route('adicionarTrecho') }}">
            @csrf
            <div id="top_portion">
                
                <div class="line_info">
                    <p class="line_info_title">Cidade de origem:</p>
                    <input type="text" class="line_info_sub" name="origem">
                </div>
                <div class="line_info">
                    <p class="line_info_title">Cidade de destino:</p>
                    <input type="text" class="line_info_sub" name="destino">
                </div>
                <div class="line_info">
                    <p class="line_info_title">Preço:</p>
                    <input type="number" min=0 step="0.01" class="line_info_sub" name="preço">
                </div>
                <div class="line_info">
                    <p class="line_info_title">Duração de viagem (Horas:Minutos:Segundos):</p>
                    <input type="number" min=0 step="1" class="trecho_time_sub" name="duração1">
                    <label>:</label>
                    <input type="number" min=0 max=59 step="1" class="trecho_time_sub" name="duração2">
                    <label>:</label>
                    <input type="number" min=0 max=59 step="1" class="trecho_time_sub" name="duração3">
                </div>
            </div>


            <div class="botoes_add">
                <button class="bottom_button" id="cancelbutton" type="button">Cancelar</button>
                <button class="bottom_button" id="salvarbutton" type="submit">Salvar</button>
            </div>

        </form>
    </div>
</div>
@endsection