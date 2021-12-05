@extends('app')

@section('title', 'Selecionar Trechos')

@section('content')




<link href="/css/estiloCriacao.css" rel="stylesheet"> 

<script type="text/javascript">

    function selectUpdate(trecho, add){
        old_cod = document.getElementById("checked");
        cod_add = trecho['codigo'].toString();
        cod_add = cod_add.concat(",");
        
        if(add){
            cod_add = cod_add.concat(old_cod.value);
            old_cod.value = cod_add;
        }else{
            old_cod.value = old_cod.value.replace(cod_add);
            if(old_cod.value == "undefined") old_cod.value = "";
        }
    }

    
</script>


    <div class="container">
        <div class="row">         
            <h3>Seleção de Trechos</h3>            
        </div>        
        <div class="row-xl">
                
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <!-- Tabela de resultados de consulta -->
            <div class="card card-default">       
                    <div class="card-body">
                        <table class="table" style="overflow-y: scroll;max-height:800px;">
                            <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Cidade de Origem</th>
                                <th scope="col">Cidade de Destino</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Duração de viagem</th>
                                <th scope="col">Selecionar</th>
                
                            </tr>
                            </thead>
                        <tbody>                        
                                @foreach ($trechos as $trecho)
                                <tr>
                                <th scope="row">{{ $trecho->codigo }}</th>
                                    <td> {{ $trecho->cidade_partida }} </td>
                                    <td> {{ $trecho->cidade_chegada }} </td>
                                    <td>R$ {{ $trecho->preco }} </td>
                                    <td> {{ $trecho->duracao }} </td>
                                    <td>
                                        <input type="checkbox" onclick="selectUpdate(JSON.parse('{{ json_encode($trecho)}}'), this.checked);">
                                    </td>
                                </tr>
                                @endforeach                        
                        </tbody>
                        </table>
                    </div>
            </div>
            <div class="card card-default">
                <div class="card-body">
                    <form method="POST" action="{{ route('consulta_trecho') }}" class="form">
                        @csrf
                        <div class="line_info">
                            <p class="line_info_title">Código:</p>
                            <input type="text" class="line_info_sub" name="codigo">
                        </div>
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
                        <button class="bottom_button" id="searchbutton" type="submit">Buscar</button>
                    </form> 
                    <div class="line_info">
                        <form method="POST" class="form" action="{{ route('trechoSelect') }}">
                            @csrf
                            <input type="hidden" id="checked" name="checked">
                            <button type="submit" id="select_btn" class="bottom_button" >Selecionar</button>
                        </form> 
                    </div>
                </div>
            </div>   
        </div>
    </div>
        
@endsection