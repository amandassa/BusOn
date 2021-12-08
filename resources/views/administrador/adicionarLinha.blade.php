@extends('app')

@section('title', 'Cadastrar linha:')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="/css/estiloCriacao.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
    <div id="centerpiece">
        <h4 class="header">Cadastrar linha:</h4>

        

        <form method="GET" class="add_form" action="{{ route('criaLinha', $trechos_cod) }}">

            @csrf

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
                    <p class="line_info_sub">{{ $origem }}</p>
                </div>
                <div class="line_info">
                    <p class="line_info_title">Cidade de destino:</p>
                    <p class="line_info_sub">{{ $destino }}</p>
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
                    <p class="line_info_sub">{{ $preço_total }}</p>
                </div>
                <div class="line_info">
                    <p class="line_info_title">Hora de partida:</p>
                    <input class="line_info_sub" type="time" name="hora_partida">
                </div>
                <div class="line_info">
                    <p class="line_info_title">Número de assentos:</p>
                    <input class="line_info_sub" type="number" min=0 step=1 name="total_vagas">
                </div>
                <div class="line_info">
                    <p class="line_info_title">Dias disponíveis:</p>
                    <input type="checkbox" name="segunda" class="line_info_sub">S</input>
                    <input type="checkbox" name="terça" class="line_info_sub">T</input>
                    <input type="checkbox" name="quarta" class="line_info_sub">Q</input>
                    <input type="checkbox" name="quinta" class="line_info_sub">Q</input>
                    <input type="checkbox" name="sexta" class="line_info_sub">S</input>
                    <input type="checkbox" name="sábado" class="line_info_sub">S</input>
                    <input type="checkbox" name="domingo" class="line_info_sub">D</input>
                </div>
            </div>

            <div id="AddTable">
                <h5 id="addtabletitle">Trechos Adicionados:</h5>
                <table>
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Origem</th>
                            <th>Destino</th>
                            <th>Preço do trecho</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trechos as $trecho)
                        <tr>
                            <td scope="row">
                                <p>{{ $trecho['codigo'] }}</p>
                            </td>
                            <td scope="row">
                                <p>{{ $trecho['origem'] }}</p>
                            </td>

                            <td scope="row"> 
                                <p>{{ $trecho['destino'] }}</p>
                            </td>

                            <td scope="row">
                                <p>{{ $trecho['preço'] }}</p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>

            <div class="botoes_add">
                
                <button class="botao_trecho" id="salvarbutton" type="submit">Salvar Linha</button>
                
            </div>

        </form>

        <div id="botoes_trecho">
            <form method="GET" class="add_form" action="{{ route('buscarTrechos') }}">
                <button class="bottom_button"  type="submit">Selecionar Trechos</button>

            </form>

            <form method="POST" class="add_form" action="{{ route('gotoAdicionarTrecho') }}">
                @csrf
                <button class="bottom_button"  type="submit">Cadastrar Trecho</button>
            </form>
        </div>


    </div>
</div>
@endsection