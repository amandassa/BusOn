/* logico_pbl: */

CREATE TABLE cliente (
    CPF varchar(20) PRIMARY KEY,
    nome varchar(60),
    email varchar(60),
    senha varchar(20)
);

CREATE TABLE funcionario (
    matricula int PRIMARY KEY,
    CPF varchar(20),
    nome varchar(60),
    email varchar(60),
    senha varchar(20),
    is_admin BOOLEAN
);

CREATE TABLE trecho (
    codigo int PRIMARY KEY,
    cidade_partida varchar(30),
    cidade_chegada varchar(30),
    preco FLOAT
);

CREATE TABLE linha (
    codigo int PRIMARY KEY,
    direta BOOLEAN,
    total_vagas int
);

CREATE TABLE trechos_linha (
    codigo int PRIMARY KEY AUTO_INCREMENT,
    codigo_linha int,
    codigo_trecho int,
    datahora_partida TIMESTAMP,
    datahora_chegada TIMESTAMP
);

CREATE TABLE passagem (
    codigo int PRIMARY KEY,
    num_assento int,
    codigo_linha int,
    cpf_cliente int,
    data_compra DATE
);

CREATE TABLE venda (
    codigo int PRIMARY KEY,
    codigo_passagem int,
    matricula_vendedor int
);

CREATE TABLE pagamento (
    codigo int PRIMARY KEY,
	valor FLOAT,
    codigo_passagem int,
    realizado BOOLEAN,
    forma_pagamento int
);

CREATE TABLE pagamento_dinheiro (
    codigo int PRIMARY KEY
);

CREATE TABLE pagamento_cartao (
    codigo int PRIMARY KEY,
    numero_cartao varchar(60),
    credito BOOLEAN,
    total_parcelas int,
    nome_titular varchar(60),
    data_validade DATE
);

CREATE TABLE pagamento_boleto (
    codigo int PRIMARY KEY
);

CREATE TABLE pagamento_pix (
    codigo int PRIMARY KEY,
    pix_pagador varchar(60)
);

CREATE TABLE administrador (
    matricula int PRIMARY KEY
);
 
ALTER TABLE trechos_linha ADD CONSTRAINT FK_trechos_linha_2
    FOREIGN KEY (codigo_linha)
    REFERENCES linha (codigo);
 
ALTER TABLE trechos_linha ADD CONSTRAINT FK_trechos_linha_3
    FOREIGN KEY (codigo_trecho)
    REFERENCES trecho (codigo);
 
ALTER TABLE passagem ADD CONSTRAINT FK_passagem_2
    FOREIGN KEY (cpf_cliente)
    REFERENCES cliente (CPF);
 
ALTER TABLE passagem ADD CONSTRAINT FK_passagem_3
    FOREIGN KEY (codigo_linha)
    REFERENCES linha (codigo);
 
ALTER TABLE venda ADD CONSTRAINT FK_venda_2
    FOREIGN KEY (matricula_vendedor)
    REFERENCES funcionario (matricula);
 
ALTER TABLE venda ADD CONSTRAINT FK_venda_3
    FOREIGN KEY (codigo_passagem)
    REFERENCES passagem (codigo);
 
ALTER TABLE pagamento ADD CONSTRAINT FK_pagamento_2
    FOREIGN KEY (codigo_passagem)
    REFERENCES passagem (codigo);
 
ALTER TABLE pagamento_dinheiro ADD CONSTRAINT FK_pagamento_dinheiro_2
    FOREIGN KEY (codigo)
    REFERENCES pagamento (codigo);
 
ALTER TABLE pagamento_cartao ADD CONSTRAINT FK_pagamento_cartao_2
    FOREIGN KEY (codigo)
    REFERENCES pagamento (codigo);
 
ALTER TABLE pagamento_boleto ADD CONSTRAINT FK_pagamento_boleto_2
    FOREIGN KEY (codigo)
    REFERENCES pagamento (codigo);
 
ALTER TABLE pagamento_pix ADD CONSTRAINT FK_pagamento_pix_2
    FOREIGN KEY (codigo)
    REFERENCES pagamento (codigo);
 
ALTER TABLE administrador ADD CONSTRAINT FK_administrador_2
    FOREIGN KEY (matricula)
    REFERENCES funcionario (matricula);