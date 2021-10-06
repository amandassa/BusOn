@extends('app')

@section('title', 'Pagamento - ')

@section('content')
    
@php
$i = 1;
@endphp

    <div style="text-align:center;">
        <button>Opção 1</button>
        <button>Opção 2</button>
        <button>Opção 3</button>
            <br>
    </div>
                
    <div class="container" style="padding-bottom: 50px;">
        <div class="row">
            <div class="col-sm">
                <h3>Forma de Pagamento</h3>
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-default">                
                            <div class="card-body">               
                                <label>Selecione a Forma de Pagamento: </label> <br>                                    
                                <button class="botaoSelecionado" onClick="{{ $i = 1}}">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Cartão de Crédito</button>
                                <button class="botao" onClick="{{ $i = 2}}">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Boleto</button>
                                <button class="botao" onClick="{{ $i = 3}}">
                                  <i class="fa-solid fa-credit-card"></i>
                                    Pix</button>
                                <div>
                                    @include('cliente._partials.cartao')
                                    @switch($i)
                                        @case(1)
                                            @include('cliente._partials.cartao')
                                            @break
                                        @default                                            
                                    @endswitch
                                </div>
                            </div>
                        </div>
                    </div>
                </section>        
            </div>
            <div class="col-sm">
                <h3> tem ota coisa aqui</h3>    
            </div>
        </div>
    </div>    
@endsection