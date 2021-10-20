@extends('app')

@section('title', 'Cadastrar linha:')

@section('content')
<link href="/css/estiloGerencia.css" rel="stylesheet"> 
<link href="/css/estiloCriacao.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div class="container" id="contPrincipal">
    <div id="centerpiece">
        <h4 class="header">Cadastrar linha:</h4>
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
            <h5 id="addtabletitle">Adicionar trechos:</h5>
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
                    <tr>
                        <td>
                            <p>Feira de Santana, BA</p>
                            <p>10:00</p>
                        </td>

                        <td>
                            <p>Salvador, BA</p>
                            <p>12:00</p>
                        </td>

                        <td>
                            R$ 8,00
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Abrir</button>
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Conceição do Jacuípe, BA</p>
                            <p>10:00</p>
                        </td>

                        <td>
                            <p>Salvador, BA</p>
                            <p>10:45</p>
                        </td>

                        <td>
                            R$ 13,54
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Abrir</button>
                        </td>

                        <td>
                            <button type="button" class="botoes_table"">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Amélia Rodrigues, BA</p>
                            <p>11:00</p>
                        </td>

                        <td>
                            <p>Salvador, BA</p>
                            <p>12:00</p>
                        </td>

                        <td>
                            R$ 29,90
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Abrir</button>
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>

        <div id="botoes_trecho"> 
            <button class="botao_trecho" type="button">Adicionar</button>
            <button class="botao_trecho" type="button">Cadastrar</button>
        </div>

        <div id="botoes_linha">
            <button class="bottom_button" id="cancelbutton" type="button">Cancelar</button>
            <button class="bottom_button" id="salvarbutton" type="submit">Salvar</button>
        </div>

    </div>
</div>
@endsection