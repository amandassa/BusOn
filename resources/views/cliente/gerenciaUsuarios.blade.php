@extends('app')

@section('title', 'Gerenciar Usuários - ')

@section('content')
      <link rel="stylesheet" href="/css/estiloGerencia.css">
      <div class="container" id="containerGu">
        <nav id="navGu">
            <ul id="listaGu">
                <li id="lisGu"> Dados do usuário </li>
                <li id="lisGu"> Informações </li>
                <li id="lisGu">  Usuário sendo editado: </li>
            </ul>
        </nav>
        <div class="card" id="cardGu">
          <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nome</label>
                <input type="text" class="form-control" id="inputName" placeholder="Claudio">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="aprendendo@gmail.com">
              </div>
              <div class="form-group">
                <label for="inputCpf">Cpf</label>
                <input type="number" class="form-control" id="inputCpf" readonly  placeholder="123.456.789-11">
              </div>
              <div class="form-group">
                <label for="inputMatricula">Matricula</label>
                <input type="number" class="form-control" id="inputMatricula" readonly readonly placeholder="---------">
              </div>
              <div class="form-group">  
                <label for="inputSenha">Senha Atual</label>
                <input type="password" class="form-control" id="inputSenha" placeholder="********">
              </div>
              <div class="form-group">
                <label for="inputNewSenha">Nova Senha </label>
                <input type="password" class="form-control" id="inputNewSenha"  placeholder="********" >
              </div>
              <div class="form-group">
                <label for="inputRepeatNewSenha"> Confirmar Nova Senha </label>
                <input type="password" class="form-control" id="inputRepeatNewSenha" placeholder="********">
              </div>
        </div>
        <button class="botaoAmarelo" id="btn">Confirmar</button>
      </div>
@endsection