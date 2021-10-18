@extends('app')

@section('title', 'Cadastrar linha:')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
            <h3 class="header">Cadastrar linha:</h3>
            <div id="informações da linha">
                <div>
                    <label>Cidade de origem:</label>
                    <label>Cidade de destino:</label>
                    <label>Cidade de Tipo de linhas:</label>
                    <label>Cidade de Preço:</label>
                </div>
                <div  class="card card-default">
                    <label>Feira de Santana</label>
                    <label>Salvador</label>
                    <label>Comum</label>
                    <label>R$ 39,90</label>
                </div>
            </div>
            <div id="AddTable">
                <h4>Adicionar trechos:</h4>
                <table>
                    <tr>
                        <th>Saída</th>
                        <th>Destino</th>
                        <th>Preço do trecho</th>
                        <th>Agenda do trecho</th>
                        <th>Ações</th>
                    </tr>
                    <tr>
                        <td><p>Feira de Santana, BA</p>
                            <p>10:00</p>
                        </td>
                        <td><p>Salvador, BA</p>
                            <p>12:00</p>
                        </td>
                        <td>
                            R$ 8,00
                        </td>
                        <td>
                            <button type="button">Abrir</button>
                        </td>
                        <td>
                            <button type="button">Editar</button>
                            <button type="button">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Conceição do Jacuípe, BA</p>
                            <p>10:00</p>
                        </td>
                        <td><p>Salvador, BA</p>
                            <p>10:45</p>
                        </td>
                        <td>
                            R$ 13,54
                        </td>
                        <td>
                            <button type="button">Abrir</button>
                        </td>
                        <td>
                            <button type="button">Editar</button>
                            <button type="button">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td><p>Amélia Rodrigues, BA</p>
                            <p>11:00</p>
                        </td>
                        <td><p>Salvador, BA</p>
                            <p>12:00</p>
                        </td>
                        <td>
                            R$ 29,90
                        </td>
                        <td>
                            <button type="button">Abrir</button>
                        </td>
                        <td>
                            <button type="button">Editar</button>
                            <button type="button">Excluir</button>
                        </td>
                    </tr>
                </table>
                <button type="button">Adicionar</button>
                <button type="button">Cadastrar</button>
            </div>
            <button type="button">Cancelar</button>
            <button type="submit">Salvar</button>
        </div>
@endsection