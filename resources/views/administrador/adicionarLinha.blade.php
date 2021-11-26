@extends('app')

@section('title', 'Cadastrar linha:')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="/css/estiloCriacao.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
    <div id="centerpiece">
        <h4 class="header">Cadastrar linha:</h4>

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

        <div id="top_portion">
            <div class="line_info">
                <p class="line_info_title">Cidade de origem:</p>
                <p class="line_info_sub">Feira de Santana, BA</p>
            </div>
            <div class="line_info">
                <p class="line_info_title">Cidade de destino:</p>
                <p class="line_info_sub">Salvador, BA</p>
            </div>
            <div class="line_info">
                <p class="line_info_title">Tipo de linha:</p>
                <select name="Tipo" class="line_info_sub">
                    <option value="Comum">Comum</option>
                    <option value="Direta">Direta</option>
                </select>
            </div>
            <div class="line_info">
                <p class="line_info_title">Preço:</p>
                <p class="line_info_sub">R$ 39,90</p>
            </div>
        </div>

        <div id="AddTable">
            <h5 id="addtabletitle">Trechos Adicionados:</h5>
            <table>
                <thead>
                    <tr>
                        <th>Saída</th>
                        <th>Destino</th>
                        <th>Preço do trecho</th>
                        <th>Agenda do trecho</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trechos as $trecho)
                    <tr>
                        <td scope="row">
                            <p>{{ $trecho['origem'] }}</p>
                            <p>{{ $trecho['hora_origem'] }}</p>
                        </td>

                        <td scope="row"> 
                            <p>{{ $trecho['destino'] }}</p>
                            <p>{{ $trecho['hora_destino'] }}</p>
                        </td>

                        <td scope="row">
                            R$ {{ $trecho['preço'] }}
                        </td>

                        <td scope="row">
                            <button type="button" class="botoes_table">Abrir</button>
                        </td>

                        <td scope="row">
                            <button type="button" class="botoes_table">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>

        <div id="botoes_trecho">
            <form method="GET" class="add_form" action="{{ route('buscarTrechos') }}">
                <!--
                <input type="hidden" name="t_list">    

                <p class="line_info_title">Cidade de origem:</p>
                <input class="line_info_sub" name="origem" >

                <p class="line_info_title">Cidade de destino:</p>
                <input type="text" class="line_info_sub" name="destino">

                <p class="line_info_title">Horário de partida:</p>
                <input type="time" class="line_info_sub" name="horario">
                -->
                <button class="botao_trecho" type="submit">Selecionar Trechos</button>

            </form>

            <form method="POST" class="add_form" action="{{ route('gotoAdicionarTrecho') }}">
                @csrf
                <button class="botao_trecho" type="submit">Cadastrar Trecho</button>
            </form>
        </div>

        <div class="botoes_add">
            <button class="bottom_button" id="cancelbutton" type="button">Cancelar</button>
            <button class="bottom_button" id="salvarbutton" type="submit">Salvar Linha</button>
        </div>

    </div>
</div>
@endsection