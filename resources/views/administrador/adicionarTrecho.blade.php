@extends('app')

@section('title', 'Cadastrar trecho:')

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
                <input type="text" class="line_info_sub" name="origem">
            </div>
            <div class="line_info">
                <p class="line_info_title">Cidade de destino:</p>
                <input type="text" class="line_info_sub" name="destino">
            </div>
            <div class="line_info">
                <p class="line_info_title">Preço:</p>
                <input type="text" class="line_info_sub" name="preço">
            </div>
        </div>

        <div id="AddTable">
            <h5 id="addtabletitle">Agenda do trecho:</h5>
            <table>
                <thead>
                    <tr>
                        <th>Dias da semana</th>
                        <th>Horário de saída</th>
                        <th>Horário de chegada</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="agenda" onclick="return false;">
                                <input type="checkbox">
                                <label>D</label>
                                <input type="checkbox">
                                <label>S</label>
                                <input type="checkbox">
                                <label>T</label>
                                <input type="checkbox">
                                <label>Q</label>
                                <input type="checkbox">
                                <label>Q</label>
                                <input type="checkbox">
                                <label>S</label>
                                <input type="checkbox">
                                <label>S</label>
                            </div>
                        </td>

                        <td>
                            <p>10:00</p>
                        </td>

                        <td>
                            <p>10:45</p>
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="agenda" onclick="return false;">
                                <input type="checkbox">
                                <label>D</label>
                                <input type="checkbox">
                                <label>S</label>
                                <input type="checkbox">
                                <label>T</label>
                                <input type="checkbox">
                                <label>Q</label>
                                <input type="checkbox">
                                <label>Q</label>
                                <input type="checkbox">
                                <label>S</label>
                                <input type="checkbox">
                                <label>S</label>
                            </div>
                        </td>

                        <td>
                            <p>11:00</p>
                        </td>

                        <td>
                            <p>13:00</p>
                        </td>

                        <td>
                            <button type="button" class="botoes_table"">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="agenda" onclick="return false;">
                                <input type="checkbox">
                                <label>D</label>
                                <input type="checkbox">
                                <label>S</label>
                                <input type="checkbox">
                                <label>T</label>
                                <input type="checkbox">
                                <label>Q</label>
                                <input type="checkbox">
                                <label>Q</label>
                                <input type="checkbox">
                                <label>S</label>
                                <input type="checkbox">
                                <label>S</label>
                            </div>
                        </td>

                        <td>
                            <p>12:00</p>
                        </td>

                        <td>
                            <p>14:00</p>
                        </td>

                        <td>
                            <button type="button" class="botoes_table">Editar</button>
                            <button type="button" class="botoes_table">Excluir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
        
        <div id="nova_agenda">
            <div class="line_info">
                <p class="line_info_title">Dias da semana:</p>
                <div class="agenda">
                    <input type="checkbox">
                    <label>D</label>
                    <input type="checkbox">
                    <label>S</label>
                    <input type="checkbox">
                    <label>T</label>
                    <input type="checkbox">
                    <label>Q</label>
                    <input type="checkbox">
                    <label>Q</label>
                    <input type="checkbox">
                    <label>S</label>
                    <input type="checkbox">
                    <label>S</label>
                </div>
            </div>
            <div class="line_info">
                <p class="line_info_title">Horário de saída:</p>
                <input type="time" class="line_info_sub" name="saida">
            </div>
            <div class="line_info">
                <p class="line_info_title">Horário de chegada:</p>
                <input type="time" class="line_info_sub" name="chegada">
            </div>
            <div class="line_info">
                <button type="submit" class="addtrechobutton">Adicionar</button>
            </div>
        </div>

        <div class="botoes_add">
            <button class="bottom_button" id="cancelbutton" type="button">Cancelar</button>
            <button class="bottom_button" id="salvarbutton" type="submit">Salvar</button>
        </div>

    </div>
</div>
@endsection