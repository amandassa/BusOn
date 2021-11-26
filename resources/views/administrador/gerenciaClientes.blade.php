@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
  <link href="/css/estiloGerencia.css" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $(document).ready(function(){

        var $rows = $('#tabela tbody tr');
        $('#buscaGu').keyup(function() {
            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                reg = RegExp(val, 'i'),
                text;
            
            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();
        });
    });
    $('#tabela').DataTable();
  </script>

  <div class="container">        
    <div class="row d-flex justify-content-center"> <!--Botoes de seleção para tela inical do funcionario-->
        <a class="btn" id="botaoMigalha" href="gerenciaUsuarios">
            Lista de funcionários
        </a>
        <a class="btn" id="botaoMigalha" href="#">
            Lista de clientes
        </a>
    </div>

    <div class="card text-center">
      
      <div class="card-header" id="meio">
        <div class="cimaGu">
          <div class="buscGu form-inline" method="post" id="form-pesquisa" action="">
              <input type="text" name="buscaGu" id="buscaGu" placeholder="Digite a busca desejada...">
              <!--img src="/imagens/lupa.png" alt="Imagem Lupa" id="lupa"-->
              <!--select name="buscaOp" id="buscaOp">
                <option value="nome">Nome</option>
                <option value="cpf">cpf</option>
                <option value="email">Email</option>
              </select-->
          </div>
        </div>
      </div>

      <div class="card-body">
          <table class="table table-bordered" id="tabela">          
            <thead>
              <tr>
                <td class="bg-warning">cpf</td>
                <td class="bg-warning">Nome</td>
                <td class="bg-warning">Email</td>
              </tr>
            </thead>
            <tbody>                
                <tr>
                  @foreach ($clientes as $cliente)
                    <th scope="row"> {{ $cliente->cpf }} </th>
                    <td> {{ $cliente->nome }} </td>
                    <td> {{$cliente->email}}</td>
                  </tr>
                  @endforeach
            </tbody>
          </table>
      </div>

    </div>
  </div>
      
@endsection