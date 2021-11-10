@extends('app')

@section('title', 'Logs do Sistema - ')
    
@section('content')
    <link href="/css/estiloInicio.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="container">
        <h2> Filtrar</h2>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group"> 
                        <label for="idFuncionario"><b>Código identificador do funcionário</b></label>
                        <input type="text" class="form-control" id="idFuncionario" placeholder="xxxxxxxxx">
                    </div>

                    <div class="row">
                        <div class="form-group col">
                            <label for="dataInicio"><b>De</b></label>
                            <input type="date" class="form-control" id="dataInicio">
                        </div>

                        <div class="form-group col">
                            <label for="dataFim"><b>Até</b></label>
                            <input type="date" class="form-control" id="dataFim">
                        </div>
                    </div>

                    <p><b>Ação realizada</b></p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Registrar" value="opcao1">
                        <label class="form-check-label" for="Registrar">Registrar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Deletar" value="opcao2">
                        <label class="form-check-label" for="Deletar">Deletar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Adicionar" value="opcao3">
                        <label class="form-check-label" for="Adicionar">Adicionar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Editar" value="opcao4">
                        <label class="form-check-label" for="Editar">Editar</label>
                    </div> 
                </form>  
            </div>
            <button type="submit" class="botao botaoAzul">Pesquisar</button>
        </div>

        <br>
        <br>
        <br>

        <h3>Atualizações no sistema</h3>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="bg-warning">Data</th>
                    <th class="bg-warning">Administrador</th>
                    <th class="bg-warning">Contato</th>
                    <th class="bg-warning">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/10/2021</td>
                    <td>Lucas Gabriel</td>
                    <td>Lg@gmail.com</td>
                    <td>Deletou a linha 53</td>
                </tr>
                <tr>
                    <td>13/10/2021</td>
                    <td>Anderson Lima</td>
                    <td>Al@gmail.com</td>
                    <td>Adicionou a linha 98</td>
                </tr>
                <tr>
                    <td>14/10/2021</td>
                    <td>Ozenilson Alisson</td>
                    <td>Oa@gmail.com</td>
                    <td>Registrou o usuario User123</td>
                </tr>
                <tr>
                    <td>15/10/2021</td>
                    <td>Antony Araujo </td>
                    <td>Aa@gmail.com</td>
                    <td>Adicionou o trecho 213</td>
                </tr>
            </tbody>
        </table>

        <div class="row text-center">
            <button type="button" class="botao botaoAzul">
                <span class="material-icons">download</span>
                Download
            </button>
        </div>
    </div>
@endsection