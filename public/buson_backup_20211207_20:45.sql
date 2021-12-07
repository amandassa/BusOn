

CREATE TABLE `cliente` (
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` binary(60) DEFAULT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO cliente (cpf, nome, email, password) VALUES ('11031311206','Jefferson','jefferson@r7.com','$2y$10$NjWxc9bozdM.sLQpvI7Qs.g9foxvxjvwxrgSY/p7rBeNIhomjQzFO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('11636373777','Antony','antony@bus.on','$2y$10$G70OgBjGcMmEyuBqtYlvj.y0zu5AQD7DnhY2C2dRa9WOmxvLXRmdq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('12405813667','Josue','josue@ig.com.br','$2y$10$aUI7d2184ZJUB5UD59YXUOZOw7/wWTfSb0Y10AG8NwrxmNtNL4Pvy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('17114398383','Juliano','juliano@hotmail.com','$2y$10$gUyt59qgW/u9Ii75lOnAaOgdBD78XbbFVUum.HhNaGOlsPokFaNKa');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('21234567822','Geovani','geo@terra.com.br','$2y$10$b/SrNTAiMuZUgjP61FPL5.xghsNWNBh6ICaZi/DQlnT2QzsndZO7S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('2134567822','Geovani','geot@terra.com.br','$2y$10$tmnCdk/x6DWgEdUca7KbS.Z0i/j9EN4I0nSc2MxrR1UYNKx21xMAy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('23092382397','Roberto','roberto@ig.com','$2y$10$g06i/TIZNqeFn5Nxa4WcwOO4H91JfKdqsFVc/aKKHdWr49ANYvACq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('26639276948','Ivana','ivana@cervantes.com','$2y$10$EZtBHDSnhVIVeqgVM0btEei79vul5MB258tPQiQIcYaK1B0SKr/ci');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('32342332222','Hermes','hermes@renato.com','$2y$10$6rg3kuN6sU9Ix.NwC2NeRuSpWykbo/DEeqVbvY.WtzK5U8xqCIEhm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('39287276656','Matheus','mateus@gmail.com','$2y$10$5ROV8OlB35bWajKi3Wfx5OYegKCE9Nx5gPyUGj.iVQ4.OOCs6x4fy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('39287276666','Matheus','matheus@gmail.com','$2y$10$27kR1eARX.bnfMtyn318KOeVLwdSXX18.brwNDR21YaUEU5SMKsjq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('50551384484','Benedito','benedito@colaco.net','$2y$10$wq9jDbSVvXzxa4hds.E7je6EnjjUo0Xm9FdbSyFkuw1k5qv.iCu7u');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('61356858491','Ohana','ohana@urias.com.br','$2y$10$sPvNGXVHNx/JQgFS7h/U0emttIndndGBCS2xJb3IDKBLv3qT7qzJ6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('67679688642','Juliano','juliano@r7.com','$2y$10$x8/Xzio/fDEaqaH1TOp8Se4bejtjpK4wUQn0Fs3qeLKTJg8zVm726');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('76860935667','Maisa','maisa@romero.com.br','$2y$10$lVs3yZITSPcGJ6hWzKy6buND.AFXXpI0oWikHhlSbPIst1KICtE4a');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('78217687167','guevara','guevara@min.cu','$2y$10$XoPVEWpVA5AyOP.FxwMeVeuW8wjE6LnZiGzZZNyCg1Af/AYexHLea');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('82887766333','Paloma','paloma@g1.com.br','$2y$10$g1ZX.1KSJxt6kHLjcuB78OY8K/ljtqLh/zyectUrsI6d6pFzZY6na');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('87683814942','Afonso','afonso@rosa.com.br','$2y$10$YJZv.Jt3hYSQZg1001MTausQI488f7gwISDFelaVaryrNgwekqyoy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('88877236552','Bartolomeu','bart@simpsons.com','$2y$10$O7EAvnqEElEe/3.Cssf.ceo8Zp8E1Hzd36rPk0OK4Gfm5Q70F09Ce');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('90329832098','alo','alo@lao.com','$2y$10$kOGz5FaaDnayhnxdUn7vz.0tubveSdzx7zSU9xcgBcTOWPZWimZg6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('92078278732','Pablo','pablo@neruda.com','$2y$10$k9atHFmv3tgKX5YbLvBOxupY9uyFWL9aZJAiXVRXDqGEHXDYW4IEy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('92660614926','Paulo','paulo@lovato.com.br','$2y$10$BoXaiGRHPf2.0PDHXCq9xelxnQpafjvHYVCb3ZZJq1.Qk1L6KLRhe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('99988877766','Adele','adele@adkins.com','$2y$10$HQ8qW8g57MLPPFrqwQxinelIF3luW5lpDGVXYmI6pTJkBL801Ny8y');


CREATE TABLE `funcionario` (
  `matricula` int NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` binary(60) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`matricula`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=81816 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('14562','59278755212','Danielle','danielle@ig.com.br','$2y$10$fnNy8UEcg8s6TkCcNnohwOvs2/4itrUMA8lvDqJvTJ2/4qpavnSa6','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('23572','37751497077','Ziraldo','ziraldo@salazar.net','$2y$10$XIlEinVBHr0wEtJIKSNUKui2LbFHhBlXP73BDQDN0cdHh3hfneD4i','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('47025','14058642412','Nelson','nelson@yahoo.com','$2y$10$B9PCq/TvOdxIaBRoLVz6Ye/1CHPhcOi7CmBPsl.ZWvtAsKr0M9PM.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('59841','44794064090','Tais','tais@gmail.com','$2y$10$2Pz3biCmyuWd9LSFzw5TauSJm3AoZkO76DpChGdxWSiQoQ/gFdb7q','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('65141','79712125614','Daniella','daniella@yahoo.com','$2y$10$eb.Tt66N3Lnvoj.8AGSaF.soAZnFvFLI1Sl1fonTNdUZt44o0JZpS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('66079','30515262988','Daiane','daiane@uol.com.br','$2y$10$sskwiG4n88lgxcv.64gDkuKwjTGye9LI8Qw.mbgr1Pa2E.mSvyCqe','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69963','47954917677','Sandro','sandro@amaral.net','$2y$10$/ty8GlW5cVG44a7O1qbqou/BK0gRhUdNqj1SdO8mjRWRKneI6U/PO','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('73119','51437214327','Cecilia','cecilia@r7.com','$2y$10$4HOMxo4/g7tHKCwonK/5N.tXx8K/N5eFmb88SNYbwIj0zRZYazhOm','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('78004','47512807120','Ivana','ivana@soares.com.br','$2y$10$TY1GTLdrcTFCR09UK/z6UOshMIVMkSWbsyor0lzpCcleUlkvDV2ku','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('80875','27611044396','Wellington','wellington@r7.com','$2y$10$yZpCNFqhsxp83W30B5VBd.oCORoyekrVdB7lvIMtzkg7.Ht4VP8Pe','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('81814','43434455544','Antony','antony@bus.on','$2y$10$HFbr4LHxiRL6Qo2f2IUUEu1L/7XPc89aHURx6dnu0YmBuSHeceToi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('81815','12345678999','Sistema','sistema@bus.on','$2y$10$jdyJVL5DmCqvBi8k83qus.DzlrBudjOfi927ew0Ih5cCQWPlxrmbW','0');


CREATE TABLE `linha` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `direta` tinyint(1) NOT NULL,
  `total_vagas` int NOT NULL,
  `dias_semana` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_partida` time NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('15','1','60','1','11:38:46');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('16','1','60','2','15:50:05');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('17','1','60','4','23:33:59');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('18','1','60','5','05:31:14');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('19','1','60','1','21:47:04');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('21','0','60','2','15:21:03');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('22','1','60','2','10:28:59');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('23','1','60','0','13:49:46');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('24','1','60','4','11:33:28');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('25','0','60','2','10:01:33');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('26','1','60','6','00:27:33');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('27','1','60','6','07:48:15');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('28','1','60','5','09:53:23');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('29','1','60','5','14:24:17');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('30','0','60','6','20:49:31');


CREATE TABLE `logs` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `cpf_usuario` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_hora` datetime NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('1','11636373777','C','Cliente Antony entrou no site','2021-12-03 17:48:45');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('2','11636373777','C','Cliente Antony entrou no site','2021-12-03 17:53:16');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('3','11636373777','C','Cliente 11636373777 entrou no site','2021-12-04 23:44:01');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('4','11636373777','C','Cliente 11636373777 entrou no site','2021-12-05 03:02:05');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('5','11636373777','C','Cliente 11636373777 entrou no site','2021-12-05 21:28:53');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('6','11636373777','C','Cliente 11636373777 entrou no site','2021-12-06 16:57:08');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('7','11636373777','C','Cliente 11636373777 entrou no site','2021-12-07 10:11:10');


CREATE TABLE `pagamento` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `codigo_passagem` int DEFAULT NULL,
  `realizado` tinyint(1) NOT NULL,
  `forma_pagamento` int NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopassagem_pagamento` (`codigo_passagem`),
  CONSTRAINT `fk_codigopassagem_pagamento` FOREIGN KEY (`codigo_passagem`) REFERENCES `passagem` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('1','1','0','3');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('2','2','0','3');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('3','3','0','3');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('4','4','0','3');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('5','5','0','3');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('6','46','0','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('7','47','0','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('8','48','0','1');


CREATE TABLE `pagamento_boleto` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `codigo_barras` varchar(48) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_boleto` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_boleto` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `pagamento_pix` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `pix_pagador` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_pix` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_pix` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO pagamento_pix (codigo, pix_pagador, codigo_pagamento) VALUES ('1','cliente@google.com','2');

INSERT INTO pagamento_pix (codigo, pix_pagador, codigo_pagamento) VALUES ('2','cliente@google.com','3');

INSERT INTO pagamento_pix (codigo, pix_pagador, codigo_pagamento) VALUES ('3','cliente@google.com','4');

INSERT INTO pagamento_pix (codigo, pix_pagador, codigo_pagamento) VALUES ('4','cliente@google.com','5');


CREATE TABLE `pagamento_cartao` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `numero_cartao` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcelas_pagas` int NOT NULL,
  `total_parcelas` int NOT NULL,
  `nome_titular` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_validade` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ccv` int NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `k_codigopagamento_cartao` (`codigo_pagamento`),
  CONSTRAINT `k_codigopagamento_cartao` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO pagamento_cartao (codigo, numero_cartao, parcelas_pagas, total_parcelas, nome_titular, data_validade, ccv, codigo_pagamento) VALUES ('1','2342897283970938','0','1','Anemona','12/12','300','8');


CREATE TABLE `pagamento_dinheiro` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `dinheiro_recebido` float NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_dinheiro` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_dinheiro` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `passagem` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `num_assento` int DEFAULT NULL,
  `codigo_linha` int NOT NULL,
  `cidade_partida` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade_chegada` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cliente` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigolinha_passagem` (`codigo_linha`),
  CONSTRAINT `fk_codigolinha_passagem` FOREIGN KEY (`codigo_linha`) REFERENCES `linha` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('133','1','15','São Jefferson','São Sandro','12405813667','2021-12-06 10:06:04');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('134','2','15','São Jefferson','São Benedito d'Oeste','17114398383','2021-12-06 10:06:04');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('135','3','15','São Jefferson','São Benedito d'Oeste','78217687167','2021-12-06 10:06:05');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('136','4','15','São Jefferson','São Sandro','87683814942','2021-12-06 10:06:05');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('137','5','15','São Jefferson','São Benedito d'Oeste','90329832098','2021-12-06 10:06:06');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('138','6','15','São Jefferson','São Benedito d'Oeste','78217687167','2021-12-06 10:06:06');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('139','7','15','São Jefferson','São Sandro','32342332222','2021-12-06 10:06:06');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('140','8','15','São Jefferson','São Sandro','21234567822','2021-12-06 10:06:06');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('141','9','15','São Jefferson','São Sandro','67679688642','2021-12-06 10:06:06');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('142','10','15','São Jefferson','São Sandro','11636373777','2021-12-06 10:06:06');


CREATE TABLE `trecho` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `cidade_partida` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade_chegada` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracao` time NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('1','São Ítalo','Colaço do Sul','23:05:26','129.57');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('2','Brito d'Oeste','Verdugo do Sul','13:48:32','69.18');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('3','Vila Théo do Sul','Vila Maurício','16:13:11','22.59');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('4','Abgail do Leste','Santa Nathalia','07:13:52','37.98');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('5','Deverso do Leste','São Jefferson','14:24:19','44.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('6','São Ítalo do Sul','Vila Sueli do Sul','12:16:35','195.34');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('7','Vila Murilo','Santa David','00:45:38','141.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('8','São Pérola d'Oeste','São Aline d'Oeste','05:24:56','67.46');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('9','Pena do Norte','Eduarda do Norte','12:37:39','142.86');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('10','Toledo do Leste','Natan do Sul','22:10:57','92.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('11','São Jefferson','Marina do Norte','14:05:03','38.09');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('12','Marina do Norte','Vila Irene','06:48:16','82.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('13','Vila Irene','Mascarenhas do Leste','06:36:12','67.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('14','Marina do Norte','Verdugo d'Oeste','15:49:51','177.01');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('15','Verdugo d'Oeste','São Eloá do Norte','14:40:45','105.7');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('16','São Eloá do Norte','Vega do Leste','01:39:09','152.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('17','Paes do Leste','Porto Pietra do Sul','02:21:00','5.88');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('18','Porto Pietra do Sul','São Fabrício','08:25:23','94.29');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('19','São Fabrício','Porto Henrique','23:43:28','112.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('20','Porto Henrique','Cordeiro do Norte','12:26:59','113.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('21','Vila Maurício','Santa Enzo','13:57:07','102.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('22','Santa Enzo','Luna do Sul','18:46:25','8.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('23','Luna do Sul','Porto Allan do Norte','23:55:15','175.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('24','Santa Nathalia','Santa Denise do Leste','07:15:18','31.37');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('25','Santa Denise do Leste','Dayane do Leste','15:00:45','142.36');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('26','Dayane do Leste','Santa Emiliano do Norte','14:11:59','84.38');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('27','Vila Irene','Ávila do Norte','19:00:31','128.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('28','Ávila do Norte','Andressa do Norte','15:58:48','152.12');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('29','Andressa do Norte','Daniele d'Oeste','10:56:15','56.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('30','São Fabrício','Graziela do Sul','12:15:02','176.4');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('31','Graziela do Sul','da Rosa do Norte','02:37:18','21.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('32','da Rosa do Norte','Vieira do Leste','13:40:05','59.27');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('33','São Jefferson','São Sandro','12:33:53','101.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('34','São Sandro','Aguiar do Sul','07:06:46','147.22');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('35','Aguiar do Sul','Saraiva do Leste','11:50:20','193.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('36','São Jefferson','Denise do Leste','07:30:22','98.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('37','Denise do Leste','Alves do Sul','18:20:52','192.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('38','Alves do Sul','Maldonado do Leste','16:38:09','5.27');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('39','Porto Joyce','Vila Alexandre','21:04:29','98');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('40','Vila Alexandre','Molina do Leste','06:03:27','46.82');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('41','Molina do Leste','Santa Rodrigo','23:01:12','10.18');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('42','Santa Rodrigo','Santa Raquel','18:16:19','40');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('43','São Fabrício','Porto Taís do Sul','15:56:14','15.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('44','Porto Taís do Sul','Santa André do Sul','02:18:27','41.28');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('45','Santa André do Sul','Vila Kléber','18:39:32','142.02');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('46','Vila Alexandre','Santa Miriam do Sul','14:59:05','37.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('47','Santa Miriam do Sul','Santa Katherine','16:02:39','104.97');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('48','Santa Katherine','São Alice','16:54:04','135.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('49','Luna do Sul','Daiane do Sul','04:51:40','53.68');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('50','Daiane do Sul','Santa Guilherme','04:51:53','170.71');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('51','Santa Guilherme','Rocha do Leste','06:55:39','192.09');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('52','Vila Kléber','Porto Gian','21:14:33','96.65');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('53','Porto Gian','Vila Karina d'Oeste','19:19:52','0.3');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('54','Vila Karina d'Oeste','Ferminiano do Leste','05:00:59','124.39');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('55','São Sandro','Santa Rodrigo do Leste','03:56:44','171.82');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('56','Santa Rodrigo do Leste','Rodrigo do Sul','14:10:36','162.63');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('57','Rodrigo do Sul','São Benedito d'Oeste','19:35:05','56.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('58','Eduarda do Norte','São Andres d'Oeste','07:55:37','74.25');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('59','São Andres d'Oeste','Vila Nicole do Leste','14:01:52','116.31');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('60','Vila Nicole do Leste','Flávio do Leste','14:17:21','56.29');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('61','Santa David','Talita do Norte','10:10:55','67.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('62','Talita do Norte','Michele do Sul','17:51:57','150.59');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('63','Michele do Sul','Vasques d'Oeste','03:39:47','83.39');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('64','Daiane do Sul','Dias do Sul','14:09:15','152.06');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('65','Dias do Sul','Bruno d'Oeste','15:33:09','109.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('66','Bruno d'Oeste','Porto Sarah','11:06:03','66.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('67','Saraiva do Leste','Porto Angélica do Leste','14:14:57','184.5');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('68','Porto Angélica do Leste','São Diogo','18:18:24','9.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('69','São Diogo','Vila Janaina do Norte','11:51:46','37.04');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('70','Dias do Sul','Santa Martinho do Norte','13:00:37','15.84');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('71','Santa Martinho do Norte','Marco d'Oeste','17:46:56','63.64');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('72','Marco d'Oeste','Vila Juan','04:34:12','183.03');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('73','Denise do Leste','Urias do Leste','12:11:57','117.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('74','Urias do Leste','Aguiar do Leste','06:15:10','167.08');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('75','Aguiar do Leste','Gabriel do Norte','14:05:23','26.28');


CREATE TABLE `trechos_linha` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `codigo_linha` int DEFAULT NULL,
  `codigo_trecho` int DEFAULT NULL,
  `ordem` int NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigolinha_trechoslinha` (`codigo_linha`),
  KEY `fk_codigotrecho_trechoslinha` (`codigo_trecho`),
  CONSTRAINT `fk_codigolinha_trechoslinha` FOREIGN KEY (`codigo_linha`) REFERENCES `linha` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_codigotrecho_trechoslinha` FOREIGN KEY (`codigo_trecho`) REFERENCES `trecho` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('57','15','33','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('58','15','55','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('59','15','56','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('60','15','57','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('61','16','9','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('62','16','58','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('63','16','59','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('64','16','60','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('65','17','7','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('66','17','61','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('67','17','62','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('68','17','63','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('69','18','49','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('70','18','64','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('71','18','65','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('72','18','66','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('73','19','35','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('74','19','67','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('75','19','68','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('76','19','69','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('81','21','36','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('82','21','73','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('83','21','74','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('84','21','75','4');


CREATE TABLE `venda` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `codigo_passagem` int DEFAULT NULL,
  `matricula_vendedor` int DEFAULT NULL,
  `valor` float NOT NULL,
  `data_compra` datetime NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopassagem_venda` (`codigo_passagem`),
  KEY `fk_matriculavendedor_venda` (`matricula_vendedor`),
  CONSTRAINT `fk_codigopassagem_venda` FOREIGN KEY (`codigo_passagem`) REFERENCES `passagem` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_matriculavendedor_venda` FOREIGN KEY (`matricula_vendedor`) REFERENCES `funcionario` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

