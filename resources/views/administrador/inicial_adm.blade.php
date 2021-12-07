@extends('funcionario.inicial_func')

@section('conteudoPadrao')

<script type="text/javascript" >
    $(document).ready(function() {          
        $(document).on('click','.delete',function(){                                  
            $('#confirmacaoExclusao').modal('show'); 
        });
    });
</script>

@section('campoBotoes')
        <a class="btn botaoAmarelo botaoSelecaoInicial" href="gerenciaUsuarios" role="button">
            <span class="material-icons" id="iconBotoesPrincipais">people_alt</span>
            Gerenciar Usuários
        </a>

        <a class="btn botaoAmarelo botaoSelecaoInicial" href="verificarLogs" role="button">
            <span class="material-icons" id="iconBotoesPrincipais">description</span>
            Verificar <br> Logs
        </a>

        <a class="btn botaoAmarelo botaoSelecaoInicial" href="adicionarLinha" role="button">
                <span class="material-icons" id="iconBotoesPrincipais">add</span>
                Cadastrar <br> Linha
            </a>

        <a class="btn botaoAmarelo botaoSelecaoInicial" data-toggle="modal" data-target="#confirmacaoExclusao" role="button">
            <span class="material-icons" id="iconBotoesPrincipais">cloud_upload</span>
            Backup 
        </a>
@endsection


@section('campoRelatorios')
    <div class="row text-center">

        <div class="quadro"> <!--Passagens vendidas na para uma linha hoje-->
            <div class="card-body">
                <form method="POST" class="form" action="{{route('estatisticas')}}">
                    @csrf
                    <div class="caixaPesquisa">
                        <input type="number" class="caixaTexto" name="buscarLinhaHoje" placeholder="Pesquisar vendas da linha hoje">
                        <button style=" background-color: #ffffff00; border: 0px;">
                            <span class="material-icons" id="iconPesquisa">search</span>
                        </button>
                    </div>
                </form>
                @if($dados['cidade_partida_vendas_linha'] == '' or $dados['cidade_chegada_vendas_linha'] == '')
                    <p><b>Sem dados dessa linha.</b></p>
                @else
                    <p class="textoNumeroAzul"><b>{{$dados['total_vendas_linha']}}</b></p>
                    <p><b>Passagens vendidas para {{$dados['cidade_partida_vendas_linha']}} X {{$dados['cidade_chegada_vendas_linha']}} hoje</b></p>
                @endif
            </div>
        </div>

        <div class="quadro" > <!--Passagens vendidas no total hoje-->
            <div class="card-body">
                <p class="textoNumeroAmarelo"><b>{{$dados['passagens_vendidas_total']}}</b></p>
                <p><b>Passagens vendidas hoje</b></p>
            </div>
        </div>

        <div class="quadro"> <!--Total de clientes que acessaram o sistema em determinado dia-->
            <div class="card-body">
                <form method="POST" class="form" action="{{route('estatisticas')}}">
                @csrf
                    <div class="caixaPesquisa">
                        <input type="date" class="caixaTexto" id="buscarAcessos" max="<?php echo date("Y-m-d")?>" name="buscarAcessos">
                        <button style=" background-color: #ffffff00; border: 0px;">
                            <span class="material-icons" id="iconPesquisa">search</span>
                        </button>
                    </div>
                </form>
                <p class="textoNumeroAzul"><b>{{$dados['passagens_vendidas_total']}}</b></p>
                <p><b>Clientes acessaram o sistema no dia <br> {{$dados['data']}}</b></p>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="confirmacaoExclusao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #F9C536">
          <h5 class="modal-title" id="exampleModalLabel">Backup - Banco de Dados</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('backup')}}" id="deleteForm" method="post">
          @csrf          
          <div class="modal-body">
              <h5>Exportar base de dados</h5>                                      
            <a class="botao botaoAmarelo" href="{{route('baixarBackup')}}" style="color: #F9C536; background-color: black;"><i class="fas fa-cloud-download-alt"></i> Backup.sql</a>
            <span style="font-size: 10px;">Download do schema do banco de dados (no formato sql)</span>
            <br>
            
            <hr>
            <h5>Backup automático</h5>            
            <label>Defina a periodicidade do backup: </label>            
            <select name="periodicidade" class="form-control">
                <option value="diario">Diariamente</option>
                <option value="semanal">Semanalmente</option>
                <option value="mensal">Mensalmente</option>
            </select>
            <span style="font-size: 10px;">O backup semanal é realizado sempre ao domingo e o mensal no dia 28 de cada mês!</span>
            <br><label>Defina o horário de realização do backup: </label>            
            <input name="horario" type="time" class="form-control"/>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn botaoAmarelo" data-dismiss="modal">Cancelar</button>
            <button type="sumbmit" class="btn botaoAzul">Salvar</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>

@endsection