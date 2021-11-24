CREATE TABLE cliente (
    CPF varchar(11),
    nome varchar(60),
    email varchar(60) NOT NULL UNIQUE,
    password BINARY(60),
    CONSTRAINT pk_CPF_cliente PRIMARY KEY (CPF)
);

CREATE TABLE funcionario (
    matricula int AUTO_INCREMENT,
    CPF varchar(11) NOT NULL UNIQUE,
    nome varchar(60),
    email varchar(60) NOT NULL UNIQUE,
    password BINARY(60),
    is_admin BOOLEAN NOT NULL,
    CONSTRAINT pk_matricula_funcionario PRIMARY KEY (matricula)
);

CREATE TABLE trecho (
    codigo int AUTO_INCREMENT,
    cidade_partida varchar(30) NOT NULL,
    cidade_chegada varchar(30) NOT NULL,
    duracao TIME NOT NULL,
    preco FLOAT NOT NULL,
    CONSTRAINT pk_codigo_trecho PRIMARY KEY (codigo)
);

CREATE TABLE linha (
    codigo int AUTO_INCREMENT,
    direta BOOLEAN NOT NULL,
    total_vagas int,
    dias_semana VARCHAR(14) NOT NULL,
    CONSTRAINT pk_codigo_linha PRIMARY KEY (codigo)
);

CREATE TABLE trechos_linha (
    codigo int AUTO_INCREMENT,
    codigo_linha int,
    codigo_trecho int,
    partida DATETIME NOT NULL,    
    ordem int NOT NULL,
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
    codigo int AUTO_INCREMENT,
    num_assento int,
    codigo_linha int,
    cpf_cliente varchar(11),
    data_compra DATETIME NOT NULL,
    CONSTRAINT pk_codigo_passagem PRIMARY KEY (codigo),
    CONSTRAINT fk_codigolinha_passagem FOREIGN KEY (codigo_linha)
        REFERENCES linha(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE venda (
    codigo int AUTO_INCREMENT,
    codigo_passagem int,
    matricula_vendedor int,
    valor FLOAT NOT NULL,
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
    codigo int AUTO_INCREMENT,
    codigo_passagem int,
    realizado BOOLEAN NOT NULL,
    forma_pagamento int NOT NULL,
    CONSTRAINT pk_codigo_pagamento PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopassagem_pagamento FOREIGN KEY (codigo_passagem)
    REFERENCES passagem(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento_dinheiro (
    codigo int AUTO_INCREMENT,
    dinheiro_recebido FLOAT NOT NULL,
    codigo_pagamento int,
    CONSTRAINT pk_codigo_dinheiro PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_dinheiro FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento_cartao (
    codigo int AUTO_INCREMENT,
    numero_cartao int NOT NULL,
    credito BOOLEAN NOT NULL,
    total_parcelas int NOT NULL,
    nome_titular varchar(60) NOT NULL,
    data_validade DATETIME NOT NULL,
    codigo_pagamento int,
    CONSTRAINT pk_codigo_cartao PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_cartao FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento_boleto (
    codigo int AUTO_INCREMENT,
    codigo_barras varchar(48) NOT NULL,
    nome varchar(60) NOT NULL,
    cpf varchar(11) NOT NULL,
    codigo_pagamento int,
    CONSTRAINT pk_codigo_boleto PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_boleto FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE pagamento_pix (
    codigo int AUTO_INCREMENT,
    pix_pagador varchar(30) NOT NULL,
    codigo_pagamento int,
    CONSTRAINT pk_codigo_pix PRIMARY KEY (codigo),
    CONSTRAINT fk_codigopagamento_pix FOREIGN KEY (codigo_pagamento)
        REFERENCES pagamento(codigo)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);
