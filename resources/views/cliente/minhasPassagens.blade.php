@extends('app')

@section('title', 'Minhas Passagens - ')


@section('content')
    <script>function mascara(i,t){

        var v = i.value;

        if(isNaN(v[v.length-1])){
           i.value = v.substring(0, v.length-1);
           return;
        }

        if(t == "cpf"){
           i.setAttribute("maxlength", "14");
           if (v.length == 3 || v.length == 7) i.value += ".";
           if (v.length == 11) i.value += "-";
        }

     }</script>

    <link href="/css/estiloAcessoUsuario.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="texto">Passagem Atual</h5>
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <p class="textoAmarelo">Feira de Santana    >>>    Jaguaquara</p>
                            </li>
                            
                            <li class="list-group-item">
                                <form>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="entradaNome">Nome</label>
                                            <input type="name" class="form-control" id="entradaNome" disabled>
                                        </div>
                                        <div class="form-group col">
                                            <label for="entradaCPF">CPF</label>
                                            <input oninput="mascara(this, 'cpf')" class="form-control" autocomplete="on" id="disabledInput entradaCPF" name="customer['cpf']" type="text" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="entradaNome">Origem</label>
                                            <input type="name" class="form-control" id="cidadeOrigem" disabled>
                                        </div>
                                        <div class="form-group col">
                                            <label for="entradaNome">Destino</label>
                                            <input type="name" class="form-control" id="cidadeDestino" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label for="entradaNome">Partida</label>
                                            <input type="date" class="form-control" id="partida" disabled>
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="entradaNome">Horário</label>
                                            <input type="time" class="form-control" id="horario" disabled>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="entradaNome">Descrição</label>
                                            <input type="name" class="form-control" id="horario" disabled>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-3">
                                            <label for="entradaNome">Partida</label>
                                            <input type="date" class="form-control" id="partida" disabled>
                                        </div>
                                        <div class="form-group col-3">
                                            <label for="entradaNome">Horário</label>
                                            <input type="time" class="form-control" id="horario" disabled>
                                        </div>
                                    </div>
                                </form>
                            </li>
                                
                            <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">
                                            <p>Valor</p>
                                        </div>

                                        <div class="form col">
                                            <label for="entradaNome"></label>
                                            <input type="number" class="form-control" id="partida" disabled>
                                        </div>
                                    </div>
                            </li> 
                        </ul> 
                    </div>
                </div>
            </div>

            <div class="col">
                <h5 class="texto">Últimas Passagens</h5>
                <div class="card">
                    <div class="card-body">
                        <div class="card" style="background-color: #F9C536; width: 100%; height: 10rem;">
                            <div class="card-body">
                                <p class="textoPreto text-center">Feira de Santana >>> Salvador</p>
                                <p><b>Data da Compra<b></p>
                                <p class= "text-center" style="background-color: #FFFFFF;"> 12/08/2021 às 19h</p>
                            </div>
                            <a href="#">
                                Ver mais
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection