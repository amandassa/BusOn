@extends('cliente.confirmacaoPadrao')

    @section('Status Pagamento', 'Aguardando Pagamento')
    @section('Texto confirmacao', 'Boleto gerado com sucesso!')
    @section('Mensagem confimacao', 'Detalhes de sua passagem será enviada para o email: email@email.com assim que o pagamento for processado')
    @section('Alerta', true)
    @section('Mensagem alerta', 'O pagamento por boleto demora até 3 dias para ser processado')
    @section('Nome botao', 'Pagar boleto')


  
