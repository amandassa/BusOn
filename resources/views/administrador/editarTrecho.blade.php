@extends('app')

@section('title', 'Editar Trechos')

@section('content')

<link href="/css/estiloTrecho.css" rel="stylesheet"> 
@if (session('success'))
    <div class="alert alert-success alert-block">
        {{session ('success')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{session ('error')}}
    </div>
@endif
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


    function Mudarestado(el) {
    var display = document.getElementById(el).style.display;
    if (display == "none"){
        document.getElementById(el).style.display = 'block';
    }      
    else{
        document.getElementById(el).style.display = 'none';
    }
    }

   
   

    
    $(document).on('click','.botaoAzul#btnEditar',function(){})    

    $(document).on('click','.botaoAzul',function(){
        var userID=$(this).attr('data-codigo');
        $('#codigoTrecho').val(userID); 
        var userCidp=$(this).attr('data-cidP');
        $('#cidadePartida').val(userCidp); 
        var userCidC=$(this).attr('data-cidC');
        $('#cidadeDestino').val(userCidC); 
        var userTre=$(this).attr('data-tre');
        $('#precoLinha').val(userTre);
        var userDurac=$(this).attr('data-dur');
        $('#duracaoViagem').val(userDurac); 
        var userOrd=$(this).attr('data-ord');
        $('#ordemT').val(userOrd);


        var val=$(this).attr('value');
        if(val == 2){
            $('#ordemT').attr("disabled", "disabled");
        }
      
    });
  

    
</script>


<div class="container" id="contPrincipal">
        <div class="row">         
            <h3 >Trechos da linha de 
                @foreach($trechos as $tre)                 
            @endforeach Codigo: {{$tre['codigo_linha']}} </h3>            
         
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
            <div class="card" >       
                    <div class="card-body">
                        <table class="table" id="tb1" style="overflow-y: scroll;max-height:800px;">
                            <thead>
                            <tr>
                                <th scope="col">C??digo</th>
                                <th scope="col">Partida</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Pre??o</th>
                                <th scope="col">Dura????o de viagem</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Ordem</th>
                                <th scope="col">Selecionar</th>
                            </tr>
                            </thead>
                        <tbody> 

                                             
                                @foreach ($trechos as $trecho)
                                <tr>
                                <th scope="row">{{ $trecho['codigo'] }}</th>
                                    <td> {{ $trecho['cidade_partida'] }} </td>
                                    <td> {{ $trecho['cidade_chegada'] }} </td>
                                    <td>R$ {{ $trecho['preco'] }} </td>
                                    <td> {{ $trecho['duracao'] }} </td>
                                    <td>
                                        <a type="submit" class="botao botaoAzul editar"id="btnEditar" onclick="Mudarestado('edit'), Mudarestado('edit1')" 
                                        data-target="edit1" data-codigo="{{ $trecho['codigo'] }}" data-cidP = " {{ $trecho['cidade_partida'] }}" data-cidC="{{ $trecho['cidade_chegada'] }}" data-tre="{{ $trecho['preco'] }}" data-dur="{{ $trecho['duracao'] }}" data-ord="{{ $trecho['ordem'] }}" value="1"> Editar </a>
                                    </td>
                                    <td> {{ $trecho['ordem'] }} </td>
                                <form action="{{route('editarTrecho.excluir')}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <td>
                                        <input type="checkbox" name="check[]" id="select" value="{{$trecho['codigo']}}">
                                    </td>
                                </tr>
                                @endforeach      
                        @if(auth('funcionario')->user()->is_admin == 1)                  
                        </tbody>
                        </table>
                        <div class="btnBaixo">
                            <div class="form-group">
                                <label for="codigoLinha"></label>
                                @foreach($trechos as $trec)                 
                                @endforeach
                                <input type="hidden" class="form-control" id="codigoLinha" name = "codLinha" value="{{$trec['codigo_linha']}}">
                            </div>
                            <div class="direita">
                                    <button type="submit" class="botao botaoAzul"  id="btnRemover" >Remover Trecho Selecionado</button>
                                </form>
                                <button type="submit" class="botao botaoAmarelo" id="btnAdicionar" onclick="Mudarestado('selecao'), Mudarestado('selecao1')">Adicionar Trecho</button>
                            </div>
                       
                        </div>
                        @endif
                    </div>
                </div>
        </div>       

       

        <div class="row" style="display: none;" id="selecao">         
            <h3>Sele????o de Trechos: </h3>            
        </div>        
        <div class="row-xl" style="display: none;" id="selecao1">
                
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
            <div class="card" >       
                    <div class="card-body">
                        <table class="table" id="tb2" style="overflow-y: scroll;max-height:800px;">
                            <thead>
                            <tr>
                                <th scope="col">C??digo</th>
                                <th scope="col">Partida</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Pre??o</th>
                                <th scope="col">Dura????o de viagem</th>
                                @if(auth('funcionario')->user()->is_admin == 1)               
                                <th scope="col">Selecionar</th>
                                <th scope="col">Editar</th>
                                @endif
                                
                            </tr>
                            </thead>
                        <tbody>                        
                                @foreach ($trechos_total as $tt)
                                <tr>
                                <th scope="row">{{ $tt['codigo'] }}</th>
                                    <td> {{ $tt['cidade_partida'] }} </td>
                                    <td> {{ $tt['cidade_chegada'] }} </td>
                                    <td>R$ {{ $tt['preco'] }} </td>
                                    <td> {{ $tt['duracao'] }} </td>
                                    @if(auth('funcionario')->user()->is_admin == 1)   
                                    <td>
                                        <input type="checkbox" onclick="selectUpdate(JSON.parse('{{ json_encode($tt)}}'), this.checked);">
                                    </td>           
                                    <td>
                                        <button type="submit" class="botao botaoAzul" id="btnEditar" onclick="Mudarestado('edit'), Mudarestado('edit1')" 
                                        data-target="edit1" data-codigo="{{$tt['codigo']}}" data-cidP = "{{ $tt['cidade_partida'] }}" data-cidC="{{ $tt['cidade_chegada'] }}" data-tre="{{ $tt['preco'] }}" data-dur="{{ $tt['duracao'] }}" data-ord="{{ $tt['ordem'] }}" value="2" >Editar</button>
                                    </td>
                                    <td> {{ $tt['ordem'] }} </td>
                                    @endif
                                </tr>
                                @endforeach                        
                        </tbody>
                        </table>
                        <form action="{{route('editarTrecho.adicionar')}}"  id="adicao"  method="post">
                            @csrf
                            <div class="btnBaixo">
                                <div class="form-group">
                                    <label for="codigoLinha"></label>
                                    <input type="hidden" class="form-control" id="codigoLinha" name = "codLinha" value="{{$tre['codigo_linha']}}">
                                </div> 
                                @if(auth('funcionario')->user()->is_admin == 1)               
                                <div class="direita">       
                                    <input type="hidden" id="checked" name="checked">
                                    <button type="submit" id="btnSelecionar" class="botao botaoAmarelo" href ="{{route('editarTrecho.adicionar')}}" >Adicionar Trecho a linha</button>
                                </div>
                                @endif
                            </div>
                        </form> 
                    
                    </div>
                </div>
        </div>

           

        <div class="row" style="display: none;" id="edit">         
            <h3>Editar Trecho:</h3>            
        </div>        
        <div class="card" style="display: none;" id="edit1">
            <div class="card-body">
                <form action="{{route('editarTrecho.editar')}}"  id="formulario"  method="post">
                    @csrf
                    <div class="form-group">
                        <label for="codigoTrecho">C??digo: </label>
                        <input type="text" class="form-control" id="codigoTrecho" name = "codigo" value="" readonly  > 
                    </div>
                    @if(auth('funcionario')->user()->is_admin == 0)               
                    <div class="form-group">
                        <label for="cidadePartida">Partida: </label>
                        <input type="text" class="form-control" id="cidadePartida" name = "partida" value="" readonly> 
                    </div>
                    @else
                    <div class="form-group">
                        <label for="cidadePartida">Destino: </label>
                        <input type="text" class="form-control" id="cidadePartida" name = "partida" value="" > 
                    </div>
                    @endif
                    @if(auth('funcionario')->user()->is_admin == 0)               
                    <div class="form-group">
                        <label for="cidadeDestino">Destino: </label>
                        <input type="text" class="form-control" id="cidadeDestino"  name = "destino"  value=""  readonly> 
                    </div>
                    @else
                    <div class="form-group">
                        <label for="cidadeDestino">Destino: </label>
                        <input type="text" class="form-control" id="cidadeDestino"  name = "destino"  value=""> 
                    </div> 
                    @endif
                    <div class="form-group">
                        <label for="precoLinha">Pre??o do Trecho: </label>
                        <input type="text" class="form-control" id="precoLinha" name = "preco"  value="" >                        
                    </div>
                    <div class="form-group">
                        <label for="duracao">Dura????o Viagem: </label>
                        <input type="time" class="form-control" id="duracaoViagem" name = "duracao" value=""> 
                    </div>
                    <div class="form-group">
                        <label for="ordemT">Ordem Trecho: </label>
                        <input type="text" class="form-control" id="ordemT" name = "ordem" value="" style="width:88px;"> 
                    </div>
                    <div class="form-group">
                        <label for="codigoLinha"></label>
                         <input type="hidden" class="form-control" id="codigoLinha" name = "codLinha" value="{{$tre['codigo_linha']}} ">
                    </div>                   
                
                    <div class="btnBaixo">
                        <div class="direita">
                            <button type="submit" class="botao botaoAzul" id="btnResetar"  href="">Cancelar Altera????es</button>
                            <button type="submit" class="botao botaoAmarelo" id="btnSalvar">Salvar Altera????es</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>



</div>
@endsection
