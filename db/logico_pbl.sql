/* logico_pbl: */

CREATE TABLE cliente (
    CPF varchar(11),
    nome varchar(60),
    email varchar(60),
    senha BINARY(60),
    CONSTRAINT pk_CPF_cliente PRIMARY KEY (CPF)
);

CREATE TABLE funcionario (
    matricula int,
    CPF varchar(11),
    nome varchar(60),
    email varchar(60),
    senha BINARY(60),
    is_admin BOOLEAN,
    CONSTRAINT pk_matricula_funcionario PRIMARY KEY (matricula)
);

CREATE TABLE trecho (
    codigo int,
    cidade_partida varchar(30),
    cidade_chegada varchar(30),
    duracao DATETIME,
    preco FLOAT,
    ordem int,
    CONSTRAINT pk_codigo_trecho PRIMARY KEY (codigo)
);

CREATE TABLE linha (
    codigo int,
    direta BOOLEAN,
    total_vagas int,
    dia_semana VARCHAR(14),
    CONSTRAINT pk_codigo_linha PRIMARY KEY (codigo)
);

CREATE TABLE trechos_linha (
    codigo int,
    codigo_linha int,
    codigo_trecho int,
    partida DATETIME,    
    CONSTRAINT pk_codigo_trechoslinha PRIMARY KEY (codigo),
    CONSTRAINT fk_codigolinha_trechoslinha FOREIGN KEY (codigo_linha)
        REFERENCES linha(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_codigotrecho_trechoslinha FOREIGN KEY (codigo_trecho)
        REFERENCES trecho(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE passagem (
    codigo int,
    num_assento int,
    codigo_linha int,
    cpf_cliente varchar(11),
    data_compra DATETIME,
    CONSTRAINT pk_codigo_passagem PRIMARY KEY (codigo),
    CONSTRAINT fk_codigolinha_passagem FOREIGN KEY (codigo_linha)
        REFERENCES linha(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_cpfcliente_passagem FOREIGN KEY (cpf_cliente)
        REFERENCES cliente(CPF)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE venda (
    codigo int,
    codigo_passagem int,
    matricula_vendedor int,
    CONSTRAINT pk_codigo_venda PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopassagem_venda FOREIGN KEY (codigo_passagem)
        REFERENCES passagem(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    CONSTRAINT fk_matriculavendedor_venda FOREIGN KEY (matricula_vendedor)
        REFERENCES funcionario(matricula)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento (
    codigo int,
    codigo_passagem int,
    realizado BOOLEAN,
    forma_pagamento int,
    CONSTRAINT pk_codigo_pagamento PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopassagem_pagamento FOREIGN KEY (codigo_passagem)
    REFERENCES passagem(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento_dinheiro (
    codigo int,
    dinheiro_recebido FLOAT,
    codigo_pagamento int,
    CONSTRAINT pk_codigo_dinheiro PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_dinheiro FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento_cartao (
    codigo int,
    numero_cartao int,
    credito BOOLEAN,
    total_parcelas int,
    nome_titular varchar(60),
    data_validade DATETIME,
    codigo_pagamento int,
    CONSTRAINT pk_codigo_cartao PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_cartao FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE    
);

CREATE TABLE pagamento_boleto (
    codigo int,
    codigo_barras varchar(48),
    nome varchar(60),
    cpf varchar(11),
    codigo_pagamento int,
    CONSTRAINT pk_codigo_boleto PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_boleto FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE      
);

CREATE TABLE pagamento_pix (
    codigo int,
    pix_pagador varchar(30),
    codigo_pagamento int,
    CONSTRAINT pk_codigo_pix PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_pix FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE 
);
