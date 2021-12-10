

CREATE TABLE `cliente` (
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` binary(60) DEFAULT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


INSERT INTO cliente (cpf, nome, email, password) VALUES ('10467091609','Aline','aline@hotmail.com','$2y$10$iwT8UcwVn00C2dm2Yf2raOMfrwO8Gdn5E0vKWx7WMsF6SoL6BoFzS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('10762691665','James','james@ortiz.com.br','$2y$10$27z8bNpl/1WUnx97tIlM3u9EHgWuCh7mfK9zfETp8BbjWgx2ReVL.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('10871980780','Christopher','christopher@flores.br','$2y$10$zDF.p7l1zijH5DEh/9kjiuczEkjTQcZc0NACyw2k2DdnYm7Vtbcg.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('11084245967','Giovane','giovane@hotmail.com','$2y$10$yNMXtVAknZPMIelxjwjQFOc92A8A/F6i8twAJYz3JAEzcHUeg8m5.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('11206358146','Marcelo','marcelo@souza.com.br','$2y$10$BvDxNTx9xqGu1oIDR9EbJOST5tB42UfOFqY8FedehM4ncm3awur4i');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('11580497864','Tabata','tabata@velasques.com.br','$2y$10$RLDGC0gLSMEwJwT06jyed.VIo3AHN2zAtaJhgwObhZXH1W0O/OOEu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('11675954456','Mateus','mateus@yahoo.com','$2y$10$nV71kTKEYUDxtuKEAdZI5e1Jyvm3f44reDSCfee9Z.FKRclaWXzDe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('11892167711','Olivia','olivia@gmail.com','$2y$10$eZQYie63QfVbgdvOsriuBuBeobw6mjGHUKl3EBxYnRlhpygAdxl/S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('12121615198','Andres','andres@terra.com.br','$2y$10$Pkd2QOQaPHL7J4I92p1yhuvActBlq7ZxZFu3QHuuLpfVfrWV4WCSm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('12192504883','Nathalia','nathalia@terra.com.br','$2y$10$Vietd5kDuj/BW1SjqQBYDeDLgwNikhP3ppcFqguz2dezjcGA904/y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('12312312331','Anderson Lima','anderson12@bus.on','$2y$10$UKCJczxDlVDss8ldAQE7Ou0oeI/6n8rXtnUXIr6edRbandZzSIAVi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('12970428341','Felipe','felipe@uol.com.br','$2y$10$l8VhT0jbmVyyxeQh1DPXE.W9JDvZhgQnjRXloFLY6esXo4BpPHmsq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('13059812815','Jorge','jorge@serna.com.br','$2y$10$zzvKxzu2wvDTTF7DhOcVN.rLgTK989ylEfCuBIIDqOPc.pSVi0sc2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('13161273763','Kauan','kauan@ig.com.br','$2y$10$S.fitm3rc4YHcdPsTHCs0e4IGX1QXMoYA1PTcHBCVG/uKet3qsN8m');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('13301457617','David','david@salas.com','$2y$10$ULiF9OISWq8Rrb6BTnT2zeILGlv/hP86Sfy.zilsh8o5DhD8M1L9O');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('13797782730','Naiara','naiara@uol.com.br','$2y$10$QrYNi7KMFVFSfWv66CZ2IeJGvRM7lDhiKL9GQvJ0GuptJpuRC4Kby');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('13817340274','Kamila','kamila@hotmail.com','$2y$10$HdVE9F8nC0rpAX6Dg6YLV.iLvH60w3JjubnHxprvV3acH5ggFDUDK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('14400671380','Ronaldo','ronaldo@queiros.com.br','$2y$10$lwmPmBimyhGyzgoJYHmbQOrif/1h8bYlcsBiKn8Hq8/5v8xhJj.C6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('15049464171','Kauan','kauan@terra.com.br','$2y$10$JdgNyQKI1spfTjIEciXvV.cjnPzhdZKgV13rBa7LuHnRnPSNCbhu.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('15250079500','Helena','helena@rocha.org','$2y$10$lD/kAQQKM21KXUyHNhwgQukHbSb41rnTOkhPBi69omAavpPGE345S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('15747969267','Paola','paola@r7.com','$2y$10$i/7m/JA6RVlKKq.yrXW2ruv3ugiPYu/Nv4ExDKLjZELNoZx3xVtTS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('16028828697','Renan','renan@duarte.com','$2y$10$04t6u0ty9pmBYKGaWryApuszitnzWzDruXYQS0cggmmgAFInR6PgS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('16386310847','Ian','ian@mendes.com.br','$2y$10$KEWewQc4/ve/qY7IgmyxuOd2zOUuvLTjlBgEM6u2XjxGuTCicAz0.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('16539649888','Murilo','murilo@ig.com.br','$2y$10$PFY1tgJ5Y4K97PahqRoSTe2dsw7Sg8pvdJRZrq973QidGVOI02vZy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('16871537417','Luiz','luiz@ig.com.br','$2y$10$mc1EQv58O290A8ljyBd.X.Fce7YSIJ26BG8VpPCNyOOT.3j5sH9NK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('16945354115','Marcia','marcia@gmail.com','$2y$10$UrrrLdffd6wUGPgRuXg.Ye0Hnql/tPFrsKuaOEBUEm8ABaN0n2wna');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('17088467439','Josue','josue@hotmail.com','$2y$10$dOA9fuk7.w8I35NDbXb9..sggUrOm5g9g2Gh.xft7X/eOt9DBXM1y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('17948542527','Maya','maya@yahoo.com','$2y$10$smXzFxOaKLG8OJs/z8fmKeCoibAR4aKhYBoyeySzVYHtQ3gNANG7O');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('18736034326','Franco','franco@grego.com','$2y$10$GYG//Fns78ON6iU5IAd5N.Mzgaj7sb9aUpeUH0onyfZ87oQqDXytW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('19034587734','Karine','karine@terra.com.br','$2y$10$cWcKu5P1vXHhDVth6SjlbuUGvaioHcO0z44AmURI3KmR1zXDcdcaW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('19170713201','Fabiano','fabiano@terra.com.br','$2y$10$VTnUEoPG0Zt8yWpIMXk.beTrAzjzAFpL2mTPwwEdTGzrZ.LJRm.I.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('20808325430','Valeria','valeria@vasques.org','$2y$10$l0ytouDnTt9aWIeb1HpG1ezLxB/opwGFVtiWIgFau9GeJStKM5YhC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('21045428553','Elias','elias@r7.com','$2y$10$mA4mY15iuVQeCfUHagyRdO0I10Rv9lElKoTbwAPUpKZv7FsJ29d3u');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('21046730733','Emerson','emerson@uol.com.br','$2y$10$uF2njAW6YKbvKj.qYvoa9.W15hmc/WrSRYBiercsMA6CODFe2b0Qe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('21312331323','Anderson Lima','andeasdads@bus.on','$2y$10$t0wQTD34Y8ORnwlmvk0rn.DFbWubTwGnb2mpT3nKN26SFqWxHEF4m');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('21424795667','Rodolfo','rodolfo@soares.com.br','$2y$10$WLf.nRsqCgtoimGHRue0uucNLHKbKZv/qHlj9Sm.6pemwguLVlnvW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('21588586775','Jorge','jorge@r7.com','$2y$10$/R1v9kESRwRc98QXaRJhTOlSWxbTfds4RK5K4YBozOSaDuYRnubpK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('22571723731','Luiz','luiz@roque.com','$2y$10$LudKb5bxBbRFSfAE4hkKBuVlUm/bP9WCmGdxV5G.ZpT0GyJUVKAxe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('22879072118','Tamara','tamara@dasdores.net.br','$2y$10$vfccQpF5QjjRnB2Ih.EIieKHlmXPtEDznU.56NoWT9GnFNunwyYya');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('23029297088','Eloa','eloa@padrao.net.br','$2y$10$3HGPMvcsW8o9MLEtAYCzauojSUGxKeDOSeGRMKGRozgzn3o4u.0/G');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('23115898573','Andreia','andreia@hotmail.com','$2y$10$d0Zk5RoJUjEPcPMtjLwL9uIU4XP3DOHTm9Wpfibg9D1Ddw/7XHm4q');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('23123123131','Shazam','shazam@bus.on','$2y$10$3huPUEcOCcQL2y/R959izuzhOOGCccrpmtc9VSNKAUhZDk3/bB8LG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('23266719020','Dayana','dayana@hotmail.com','$2y$10$3M2oqK1g7TnBHQWQyejM0.C3xbhfzBcHY7LBGBPCaDhUlhyKWn31m');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('24397139840','Mia','mia@yahoo.com','$2y$10$1h4vb.Vwh/FdN7RivzlqGeBXJ5ZmqpL3Nkn8qaZ7VsdQ6kT3dz4aO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('24455806839','Violeta','violeta@ig.com.br','$2y$10$T8ax/f7TBZxFUNAgQ0skJ.0Yf2fKmRmDblROM1Jhkh2oPmvjxNH2S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('24552354532','Andeson Lima','andersonlll007@gmail.com','$2y$10$Su/PQQVGuebXJI.7wHt8TOvLEGNaXUTqNshvIffoUWcqp5B/1CCoq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('24652437837','Lia','lia@ig.com.br','$2y$10$Yl2cC6GPdCLm8gexq2t7yuP5VWcCFGDNW/95tiitLNT2yS4FECIFe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('25297112665','Mia','mia@r7.com','$2y$10$oSmNClQkxC9/cdbrmDzy1uT8tpl5TbtZC8B25Ea9m2ilMJlMkBrFu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('25938585523','Maya','maya@ig.com.br','$2y$10$LyK2Vehn4quV/Q7AN2XcNOpSsR8g/OMFTNEueb.os2Bk9n9MctwI6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('26303089287','Andreia','andreia@r7.com','$2y$10$RyXMbJAJ6uBlGp1IPBr88u8p93Zf59aGzrUnRtjMwtt7NfFVezosy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('26726582901','Melissa','melissa@ig.com.br','$2y$10$Z3v5XVXEjrbt7QPZDLHss.71t6l5TXezNXBpJK1nO.Mb0ISM8muFm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('27294403107','Tessalia','tessalia@pacheco.org','$2y$10$.AEeug1AIY9Dv616bMobCuZRhcZVMb1m33XJiPF8sIKDdHdvk1rrq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('27628154494','Guilherme','guilherme@martines.org','$2y$10$/d9CjcE3W77LxaFFGy7WIeis.1w6zYf8VRLs3IG9pn.AmeE3mfJuK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('27764113062','Bia','bia@brito.net.br','$2y$10$SHmQ0MvoMobC8I/OrIB8XO6Xqx1lMRHW9g2.PKAjOc8c2ZfYGCcEa');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('28281081553','Diego','diego@carrara.com.br','$2y$10$XATYzVJJLURZTc66Oqqo/u5CHceta.XfMEx38uDHNIsqqZdbZHnwO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('28633883145','Lucas','lucas@r7.com','$2y$10$cqn5Hm/QkPmKESZ.t4dBl.uEj32EAXeyiTXMl8wUqON4AcSTB59bW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('28910168970','Tainara','tainara@velasques.com.br','$2y$10$moTGbS8YAzJplpmTgf0EDeyPUwDmws6gfH5Luk0mS3BOAjUmgKI0y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('29283989010','Demian','demian@uol.com.br','$2y$10$LjBK5RAQsL/P/AaHkW4.AOnytlA9spwxJ7DF78kVdrXDRxQtgAFne');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('29545047989','Fabricio','fabricio@feliciano.com','$2y$10$6chbmWbKqPrKRja3Dwlb/O9OXloPFZUgS0rCfgi11tTxOUWcc7vma');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('29729522109','Maraisa','maraisa@yahoo.com','$2y$10$ziQ9OLkL02mHiE0m.BUiTeI7QhUK.qqo9P4Eq46QZXiE97jrW32Ba');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('29977522008','Isadora','isadora@romero.net.br','$2y$10$N4/iEixh2nFjyQ1oJ3thDO6ul1Ftb8.fuw87TZHfwtgjUvF99RRvm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('30121739565','Robson','robson@gmail.com','$2y$10$pRGiPQUEycr9dcRc2wz2de153wlBBwNdkLtD2xlq00IZUPsa.g/MK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('30176074794','Mauro','mauro@balestero.net','$2y$10$xcn0htffT6EUQeY5pP73QOb6w3Qpzd1kWQAq4.pE83/R9iq.tcpWm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('30500595026','Poliana','poliana@uol.com.br','$2y$10$LjHv281455YP/r7NtbENXep8IgvC0UElV4tZNfPMCdrCDqzniYXV2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('30726864012','Filipe','filipe@darosa.com.br','$2y$10$Xx5XzqwkfMzzMPLZJwFFvujfnOd1UdjyusTafYFbFNi7K.uDUCgXO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('31471946099','Lidiane','lidiane@teles.com.br','$2y$10$9TIFI58QeL5HdmopnXvul.q51eu.kb48uJvIhX51V8.1suL3xeuRq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('32028807181','Luiz','luiz@padrao.com.br','$2y$10$s2q6Wwkz/K3IWpXmsyRiXe3YZtClrIEbwdhItew2D9ReqVeIOoNmO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('3223','2323','2323@1','$2y$10$IL9Kf7E9.4Slulbd1PLoxe33oqikBjbRUJIfvGAaYeOBE.C71hfPu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('32382403430','Rafael','rafael@marinho.net.br','$2y$10$EZKJXxgpq0ClQwtkrdLNEe/AgdOeQeOGJEx2bAajF1AE.GKdfANo.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('32424234234','Maria do Bairro','mariadobairro@bus.on','$2y$10$/jzTlvgKynVGOE4qv4k9sufrzpllpQxwpm1FeZirk2Wngyutdhiim');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('33504069958','Jonas','jonas@tamoio.com.br','$2y$10$Nn21UBvI5475ayUVeJRo5.V.o/plR8zwTU5MMV8nBFOBbNZ64afTm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('34520997560','Monica','monica@terra.com.br','$2y$10$5L0KtrVY9C4gmWPX.dSSkuDpOM174KJeLu0lp5VpaqpcFn04tkHxK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('34543587348','Ruby','ruby@bus.on','$2y$10$cu169r.Dpo3AR6gaZKw5Zu1r6LElWQw1l4Glqdb06/rryhRzRZxYG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('34598086265','Bianca','bianca@maldonado.com','$2y$10$fWqYWga77G5129PSN41AGOLaypJimejSAMUE6unuW2jZhOqBRBDmG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('34607644089','Allison','allison@alves.com.br','$2y$10$eteHubQVHPBt2uYUMA7Pf.TxZpPzs7Sq6V04o7D5WQEixDoHkZKuK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('35187946931','Maria','maria@hotmail.com','$2y$10$Mnj4bs1j5bSRBE9Bs6VkxuS2jGtF4SdnpqfVsPA33CFWwXc5GmUnS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('35486361671','Constancia','constancia@hotmail.com','$2y$10$0qIbM1GgnO7DcjYOe2tbLO3xJPqmRCXY95greO.ic/QIuPhCbCz2S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('35608876898','Wellington','wellington@grego.br','$2y$10$9qRt3ERGSOaWPi0jef5c4.4IRyT0dPTdd37BQKlOFkEf/uYStv6IG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('35678515178','Gabriel','gabriel@terra.com.br','$2y$10$pXSX4gcIt0GMsKQUNQOJROgjC7uKZEtpmQqoGsXACZ.YaBPVY66/u');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('35684087904','Heitor','heitor@balestero.com','$2y$10$C/55cxbXAvJgQwd59YBZxe8753dfW57aPwBjP9eKQdFQOuVDSIe.K');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('35771134625','Jorge','jorge@paes.org','$2y$10$ckjvLVFolk8hSzJHQKaXXOLJUQHTKAbHnZDBoZ6nwiJBz23enPECS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('36823459104','Lucio','lucio@ferreira.com','$2y$10$I3lSvjzFSfxDTRwhwsdlr.I63IA2M9XCAR2mb0Ng.hrwXy2l9cvqW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('36836404849','Antonella','antonella@uol.com.br','$2y$10$BqgkXPZ.HTdkoSmGSurh7.U7s7KlyfJztgWmPPQtL3CcWJOb1gIoO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('37020777528','Fabiano','fabiano@uol.com.br','$2y$10$Myzxe8vMUqi6T6nv5b5A7O3QnB6HnBvdUngBkOIwzdsiZUbf9ACPm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('37652807710','Denise','denise@yahoo.com','$2y$10$6n7cUpfTJgCcZcVC4Frk3e1AJNim6.AXTk545ljK3WDJNrzbWNKi.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('38994514793','Sophia','sophia@terra.com.br','$2y$10$hHh6y1UweMXI/wFGYQ6oM.hNezGATvMQxznnaqPvjONfqxnuBq07O');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('39392797627','Marcos','marcos@hotmail.com','$2y$10$.Qulm9RIzYT7H3foXZv.D.9BrutGP4Lmw3nUas6FM0pKqd2xFap.S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('39669611569','Afonso','afonso@escobar.com','$2y$10$uo1l/Wj437TBYg7Dw083He.6wO79ToHGtIH.yJc44LuFCkgbsYfd6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('39862100013','Laiane','laiane@uol.com.br','$2y$10$5mIS7oikuNteZ4op3mTkm.6Qrb5/RWXGOxG2ehDpHC7wBc3tSn2lW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('40064760520','Cintia','cintia@delgado.net','$2y$10$.o1FY3WOhUEvvao2q1nYcOSFnrWyWFyAUDFNbgeItlKy6v1cIzepS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('40199126018','Violeta','violeta@delvalle.net.br','$2y$10$KuexEOEZsjqFVPDFFcYsOO3TiljPQZZ7bXGRfHvoH3.L9iNKKD/HS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('40921058724','Camilo','camilo@lutero.net','$2y$10$YRi6eP2qQUiJ1/iRAIQWTOUrEnNdkzjgB4PIAKpbcFlDjm9YQAKTi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('41437789097','Rodolfo','rodolfo@yahoo.com','$2y$10$akTsllZHm4vlU7T8rOtE2uHal8CWqUXXTCaYzY.B9EaKJCesaBr5G');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('41665704807','Renato','renato@galhardo.com.br','$2y$10$boyq9nR4GH/6uYRJD5XzsO1a.dCFls1FAMWYOyugWgN8OCF2ZwXKW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('41754904598','Saulo','saulo@rodrigues.net.br','$2y$10$3YPeo9CQcdji9.9GCAIXOeOGhIkIn9ie24DV6RsGvUH1FCpAJtUVq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('42590405391','Moises','moises@beltrao.com','$2y$10$OY.2aKu8n1nSP3q4nAJTKusRscyjKVtZKccWWrX0DZ0EG6Tle6KnG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('42823973930','Wagner','wagner@ferreira.br','$2y$10$BikThK18FYl0BaiLvLN/beXg8dJkwHhXqBJFO4jiyyiscDQqqnl2m');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('42851325926','Mateus','mateus@ferreira.org','$2y$10$4sKELyhuRjPdkLbMMjbYqeWmzY5UB.6MbM1jUYS1.Uid3MhUFvCoi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('43177879792','Andres','andres@defreitas.com.br','$2y$10$wwr3BRU4q0xqhGaefUXqbulwvuQ7.rLCnh8vDyaZ.mPHfy61E72Sq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('43532424244','Paola','usurpadora@bus.on','$2y$10$7cNa6LTJMcl8iOoi/CS06ujPMoRjP2zqI2UM.GlcVdO7B6wsRIzFC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('43535355354','Esmeralda','emerald@bus.on','$2y$10$civtQxkOJybVE2nM1iUMhulaEBv.krCS9hOY3wzNnnbBXvGVKQQ.q');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('43845797527','Simon','simon@terra.com.br','$2y$10$.SIdeSvLh7HrgqxjFnoX1.fpWWfPaj05/yvrseL0QgWn4G33Ondnu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('44673606839','Tamara','tamara@yahoo.com','$2y$10$Kdi8aNiccZmlAylY1gUFFOoQCO0WIk3ximirPImL8euDAdRpiojWi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('44858972703','Fabio','fabio@yahoo.com','$2y$10$pD10N/Kc/XcQv7FHy4rS5.oxcMTxkHBokj6oef3wlq9wUuxmfa.xa');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('45101197463','Cristiano','cristiano@terra.com.br','$2y$10$zmWUVeVbA7w7Pb5r2j0aZOKkPC.QVTsZYfahNWJEmXrvyouYIJuii');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('45303584464','Bernardo','bernardo@gmail.com','$2y$10$4BEgVA7tyFfbwwBqGB3a9ePKRubyMzSqk46PdbtG3wXRQzyjVQsgS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('45501286454','Manuel','manuel@pena.org','$2y$10$4qnSGL3p.3UloyZ4zzixfOI3zd/xEa4/7DnmguM.xH0C.c2xvBdO.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('45679591215','Manuela','manuela@gmail.com','$2y$10$eLs5Ab3nNCxGlYvBLuPsZ.wgbUBxbUq1eBFce3/XqTa/zYP16NUQ2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('46665166482','Perola','perola@soares.com.br','$2y$10$Au17F/GFo6cM0GK.EzngUuz9I5lYxF2WTvWTnWGN/o5a3zGipgLrO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('46753326785','Francisco','francisco@yahoo.com','$2y$10$Z9DInJeOu3isg3nRjbgtKeRaGMYK0JNdVdBDCxJXkRpxcoUTUrDpe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('47024758474','Evandro','evandro@hotmail.com','$2y$10$NjOyFhi10BAWlz8kdAbY8.LgH1HQY6GHmh7.ykNzyMf.6djUZh9ea');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('47791008756','Mirela','mirela@hotmail.com','$2y$10$ucyh7b3ZQK6cjdWwUeBKZON5/3elh7OkxipoONIk7oz0qtRJCoMFW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('47859161843','Carminha','odio@bus.on','$2y$10$Pi7hEh7R/54nQo8R1eXbDuhrXoKH/Wz4iNIZ9Fw/k5metTdOJlq/m');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('48586916579','Diego','diego@r7.com','$2y$10$ReqJb.Wu4EFq7rsV84cKdu2w0wwh7/TfQ56T0/GohEOfgA1dPtRqC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('49082102136','Benicio','benicio@valdez.net.br','$2y$10$z/aNzSa6BLvJa7.rJDOr2OnpYDD92dmIz46F4cGdhdT0XueqOmga.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('49160376969','Elisa','elisa@branco.net','$2y$10$rmXy.e27nCBmyzesWjTxGuL2rxcNpd3sIPLqfDdY5ulafxmWkA2f2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('49202088620','Silvana','silvana@gusmao.br','$2y$10$x0Uk18.aeOhh2tr8vz6.WeSfEzO/DfMSMcJxMAPNFsFZccPBN8imi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('49553406016','Gael','gael@estrada.org','$2y$10$6XDYGlgblg/nnkbxc9wmmeptMRL3jsThyLHzXpJYL3.8ME9nCt0YG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('50769118965','Milene','milene@vasques.com.br','$2y$10$R0fK5b206/vmfsqcEQ2QHuQBR9hcJy.mPit.3SIoHNqdx6my1j0vu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('51819792926','Evandro','evandro@gmail.com','$2y$10$I.TUqgh5XkV5c6s5YaEWUumIvvtBZYdvk/rnK2AYkiiIsRVcKeiOO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('53452012135','Bia','bia@gomes.com.br','$2y$10$ASYRyMtlCP6NR8DU4wTx1OJ0.305sHBEGOhxE5QK2IZOYwYWaIAAW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('54732906550','Eloa','eloa@terra.com.br','$2y$10$jFWrFBuPpYARLo22p4XH0eoGyKUNbdDqnwDU8I5RBQyTxK7g9V.jW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('54771092182','Naiara','naiara@campos.com.br','$2y$10$Y6SUXskkWvfYlGH6ytLUpOoi3xB193DLxHVysuxzDTIU8WGInaMn6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('54824447974','Thalissa','thalissa@r7.com','$2y$10$KOB4Xrld8CooXGOL0KkGPuxoODe2tC4vOIMSzEbsguzi.0d20BPc2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('55242943772','Emanuelly','emanuelly@yahoo.com','$2y$10$aA2xSP/F47/zhgDB0bSBBuTAqQHxvGg3XBJLG2JgL91fHy6p0KFCu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('55259234369','Raysa','raysa@delatorre.org','$2y$10$oWwD00NVdws0LG/aPqn1s.VjYT3MqqDQkz.q6gSzBCSzMWZq8VeBS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('55435657739','Thomas','thomas@rezende.com','$2y$10$xCnj4c4D2aig8OC2FKlpP.7hbWsWq2f5sGIjaYSVuqQKwBONbQCXC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('55876418196','Constancia','constancia@alcantara.org','$2y$10$nP7H84T188zhx0.q1W12ZubCDXVfjqprIu/olUzvFJGsNxTBoBR.W');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('56724840151','Pedro','pedro@gmail.com','$2y$10$LjpaYscHD7MmXKoUNZYJKeQImVSAJyGIo12QKL6OgqlL6H4.jcCh.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('59071055908','Fernando','fernando@uol.com.br','$2y$10$9/weNM5csBvcrWNBn2U/Wup3gvQ4JyW/Gt/a8IaP83WWg63U1oX0a');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('59580910898','Franco','franco@r7.com','$2y$10$qP0vxvCgA77sMKdFL0sWBu1Yw0YBsWxe1QHoCkqvOIDSWBRfj9OEy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('59752900896','Camilo','camilo@darosa.org','$2y$10$3lisiKgvut7kZgY64PpotubINUoEzyHt8eF2d0WyeZH5FP5b4Y1Cq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('59853747968','Ricardo','ricardo@sepulveda.net','$2y$10$MW/evkCu.QbiOtNtIpYUpO7/4be2.lN4Da2jMuUJitqb2ZNH/fsbC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('59961254295','Denise','denise@ig.com.br','$2y$10$1k8v7fVwXFvv9CwHK9onOOE5TiZZjDVASMFtJCoT3Yly0LzJTJUOK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('60571251117','Stefany','stefany@valencia.net.br','$2y$10$UJ3Xj3kc6wyXESk/G6gaNepWvAoBQC6TvEbbiaLQdObRqcra3RebG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('60602047065','Estevao','estevao@aguiar.com.br','$2y$10$xOtwPRjv/KoDYWIP.5TcWutpIvOXArRg9vBbfnY70f.cmiAmsgSpm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('61476339527','Valeria','valeria@vila.com','$2y$10$CV6Ouh.5CQf8zYvqWq0gLOQ9vjGmnvKe.UME9838NuG3kdHBxmrMi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('61700604407','Patricia','patricia@yahoo.com','$2y$10$UqED9XZNN2KcTg2eemAs9uqcUECdEm8eLILV4ojiPGufEtMVdwvra');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('62645271092','Aaron','aaron@madeira.net.br','$2y$10$W9zKBbIs.1JWJttXFgTsc.94veppl8lUINv.2I3UxRhVmVj5eYm0O');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('62823905026','Clara','clara@yahoo.com','$2y$10$299HrvzgraklTRNZrrqU1esiZtwNy0CCOZHIfY6CkME7zBrEkev62');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('62974625260','Christopher','christopher@vila.net.br','$2y$10$LLWwdLFSKW8KiRgFSy6aPu3247dZEKYlw3CE6hgJgdqiVxt2xPHvK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('62975482889','Vitoria','vitoria@solano.br','$2y$10$uYeTcLfn.EZclvH5ebNkdu5EbHPZ6seUXBS9M9WWsLZDuUT2tz10O');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('63109008734','Michele','michele@r7.com','$2y$10$PHbVnaPnki2VUk/nhP7e.uB3/UShG3zwmWQ4ljkIYnvTs1ROwS.Tu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64043053319','Murilo','murilo@uol.com.br','$2y$10$Fsm84d2jDhD/.Vsch1lEEuHPO9KpvsKFwztqIFjiMke.85XqVx1QK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64077353480','Heloisa','heloisa@yahoo.com','$2y$10$Di2YgVRjndM2D5v1PXfdruY4/dn9otdJze4xiTUpeQoeEJEUHzCni');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64241296371','Davi','davi@ig.com.br','$2y$10$qzUBBMETt9sWONwGfWDCtuHmpjj9jFnjr31yJsYxx7VSNLl4uylYG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64496509151','Emilly','emilly@gmail.com','$2y$10$R3hdXhzJfjV1UVjs7qICle9GNx1z06qnb9.z72M9.jd4Hq2aFaOk.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64806037784','Irene','irene@hotmail.com','$2y$10$u.Kp5mbknoHliGJRctMywuWRJZj9xDT6j9HHtfjvZMU3wVVqvNp9S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64859897699','Sheila','sheila@r7.com','$2y$10$OGboNGm91QpA10OTjjKWXeIvjeReODCloZAyEdR.VTRFv4RxKJ2BK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('64885575588','Cristian','cristian@uol.com.br','$2y$10$l44FpMquokF7d9saTO7XGOcEnYynPYXB/bVtNG/IE3croabNJ96NK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('65000850325','Karina','karina@yahoo.com','$2y$10$h7Er1uppI.Uf3.OdqTij5.SqkabDM0oF/AEOLGXemNV2i3zAhWpnu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('65271500190','Ariana','ariana@santos.com','$2y$10$G4jm825pQ.EsYHnwmNpbXOtmzcRi8X0CVYb7We.dmMlNthxOb9CZ.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('65320832768','Jose','jose@ig.com.br','$2y$10$i6NpFcW8BN65W7y4v03lQ.VWA80S35jDUgltjViaOqG04.uoDRuTq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('66843233531','Lucas','lucas@hotmail.com','$2y$10$Raq24.iJHre9/GJsCRJVZezDalbJuHAlyVSX0qoP2//wOoyAphKI.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('68333154845','Alicia','alicia@gusmao.com','$2y$10$sRAsS/gwfjFVvpJprCnHbO1Yw4Far06icJCd3LRgpCbvkYipVy7NC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('69189260522','Constancia','constancia@godoi.com','$2y$10$NXmOoISPEF9KA/z1X8bCz.tiLZD6IWb5Y0SlmJXv3tYj8f7kV3Hyi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('69291866066','Mary','mary@ig.com.br','$2y$10$iKinkw8F897mG.ZbeiYVvOOJuP7LGLKzGUErtvmtUc.zc9TjxVmu.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('69513867934','Lucia','lucia@delgado.com','$2y$10$FFhZq3EX3pfkgN2N2JS42OYukpvJpZcN/Y8NF9ehA5TIql/RCYKr6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('69816902284','Thales','thales@leal.org','$2y$10$SQSLMVy1EwYN3l6ExmZOLeWYwHHxhnjaHo/dCJEu93OcbK.fVz.RG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('70013566906','Amelia','amelia@yahoo.com','$2y$10$curYvr5t4DZ8iI7KYoi5d.RRyyjPlprW8rKz2p2W5/1BKT7fxg8aq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('71239710870','Filipe','filipe@fontes.net','$2y$10$ASeAwLfNbljaNjhtF/3rM.C3Vktc7qf9ZmMaCWgEj8bzy718lSFWi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('71399378303','Manuel','manuel@terra.com.br','$2y$10$kpW4Rzy22hmfutSNu/zf.ecCbh7ciwtDqzVHgUw3qjPVSy6FcVKOK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('71671534919','Bruna','bruna@terra.com.br','$2y$10$jC8/RJKiltXq5ljDpfPlMeNgmVPH68DZCU/LjkZJxaoZIXzQMdR6y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('71714528951','Catarina','catarina@r7.com','$2y$10$S2wddHVRZ7gjDLwfsl5cyeJTLaBpZxjlwo8g9MUm9LNNuNaCMY0q6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('71842749446','Ingrid','ingrid@maia.net','$2y$10$UNcx6pe2d6u7e21f5YctHO.j/IPzN1W1rsHKTnKQ5l/VkkdJvK/W2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('74730877047','Edson','edson@terra.com.br','$2y$10$Mjj.B/WbSPWiiH/th9Vrwei2jpVRBr91F9TJzXd9gBf5kKMLXecn2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('74803396886','Flavio','flavio@ig.com.br','$2y$10$nNmfWeUrdTZan4920HE6x.FM1BLAKJ.4MwBfLOc7/hfZWGfZj99Gm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('74938249118','Gabrielly','gabrielly@uol.com.br','$2y$10$7fulH/1d4F176hRwCvreKejd.OYcNxwc0PF3rUBj552.OCJJeAam6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('74952349611','Noa','noa@correia.com','$2y$10$TBW/B..T9FCq08CcDXs5L.fyknfAGaE/q1U6J6z/t2GywDVd4/2Dy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('75263070565','Edson','edson@ig.com.br','$2y$10$qMV4uUbY3b81w2viYk82IuZHTVjVYHqCPdSrpPUuccgSnAzLP60jC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('75427387095','Leia','leia@ig.com.br','$2y$10$Kw0XSEcWyZlMfmPaRZ7u6OZs/fN4PsowWX5WDJ15kFTzY3hLJEEu.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('75637676720','Cristiano','cristiano@yahoo.com','$2y$10$rRCQwAF1X.md8/MqJhkvBOC4fbYFvG0KmST40qPpVU6FPWGEJfQnK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('75857947049','Giovana','giovana@yahoo.com','$2y$10$RZkLwAr.BP1E3Re39yJjwOZtXB8QVfHe5AFGa1SQ4AM/pYtfEP34e');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('76226112415','Noemi','noemi@delgado.com.br','$2y$10$T/k4AgUBhzNWjcghMWJonucZ6KBsQzxwjDafZuY0nG4dRXSgeqagW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('76718609281','Luiz','luiz@valentin.org','$2y$10$Q/I50te1IWoA/zzKiAfdT.sxEwIPNodRqQDlNXXEy33gwhBaneHMe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('77249213140','Simon','simon@gmail.com','$2y$10$d00.pvLWGw3NNg53Zvr5U.eLKVajK2PEaT2lXOlsKHCrvXS1w51Ka');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('77272722727','andersoncliente@bus.on','andersoncliente@bus.on','$2y$10$podNBgQNOLUNwG//pBBCXuQffmIIWFsO1cirN4kCS0.A/2IHPE/aC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('77700797464','Abgail','abgail@hotmail.com','$2y$10$2Y.HG5sks6bQTAjdkN43UeJt4p1Zm7EYzQh4VONk1sN7Ziys/k6cy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('77988183130','Agatha','agatha@montenegro.com','$2y$10$qUgzl1Ms//XU8Ih1ysYM/O2AcWvlCvZVFExI.9LLXpJoDWmxJjU7a');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('78087461266','Teo','teo@r7.com','$2y$10$McqEI3Kik5N77fjfz4BuL.irJ42YlBRgp0bxnaiRlcEgJrd3pA/Ki');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('78130686874','Matheus','matheus@r7.com','$2y$10$EDFVW8NAaKP6vREISG2NeuUwHBUQ5WALs8nFZ5VK/0c0.FHrhnk7S');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('78377603626','Sergio','sergio@ig.com.br','$2y$10$9Br0vDHCfZKS1QGLSzgJZewAdPI.cnxPZvmygYwivdnqC9qJaWOzu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('78771064709','Mariah','mariah@terra.com.br','$2y$10$irKgzWbAd2GGWkwb8WEYn.q6kMC6gRPSvfKVGdbpssWjP79neGb22');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('79781393238','Emerson','emerson@yahoo.com','$2y$10$pWn2O2N3YiKimTBCQsK5huiUa0OE9n3hx5Ze0SMiWMf29WLGwG1iW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('80071886888','Alan','alan@gmail.com','$2y$10$.XL/b37jfBovkO.85mUVOOyr4xXjW8YCh08eiONkKKCkIQ6rojSzm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('81334875455','Natal','natal@ramires.net','$2y$10$jd6aeeMKG3uSBEgpOJScu.aAVjoODebcj8Bv/4rL70AG4GDxBZq1y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('81345503296','Tais','tais@uol.com.br','$2y$10$uii/qxHgYtSpiKUUywrRFOZ0nVLAVqsXx7pEh7p9YIlEZ1PwOvLXG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('81356963261','Teo','teo@terra.com.br','$2y$10$hFw7OF3Iv4t35zlKKFWRCeQDPcrBtDZNozNPpKpw2kAb/LZsj6HD2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('81398095639','Breno','breno@escobar.com.br','$2y$10$Wh32AenOWpdZ6xxaIlu.fO3hUABHpWEFI9gSUfHRzCXIkZCMYmBu.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('81444223800','Tiago','tiago@ig.com.br','$2y$10$bWupdR0TrCcuLLFoCM82Z.ZPSV8uN./Ntw7e39AHJ/1zEZNlGE0fu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('81862303821','Talita','talita@hotmail.com','$2y$10$IX3c3en7rBXgu3WgjLmoZe9ceVlUSgoRELqTlIfMbQIafXhdLDpam');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('82002147388','Wellington','wellington@oliveira.com','$2y$10$Gaq47YTFwKSjZL6zxq/mZ.QVztHtmVlxhEZ4AyBjsDDcob9xXckwi');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('82493999417','Malu','malu@santacruz.com.br','$2y$10$nB0ECOBDkiQJyvwG1QdZT.7xVk5/HtDuEqybCzET9Yfph6/nh1hxO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('82896421188','Priscila','priscila@bonilha.com.br','$2y$10$GcWZ7zz9abboZkTFXolRKOk/amfdC86dEBhYT5cx7QOrh31ch1MK6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('82945913135','Simone','simone@r7.com','$2y$10$..rAmQehpIxpyZQMtjFHy.sp1y7dGMAGKruqPXfa0VPMwpqBGkomu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('83569405847','Maraisa','maraisa@saraiva.net','$2y$10$RUeXAB2wVphoO/0.zyvWW.S3Z2c0HXGfUJypDiu0PLu9E0gkM8fEC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('84173122239','Raysa','raysa@hotmail.com','$2y$10$xrRqYHTesa1CLn5XhX/LGeizDjuElO0UmQIbsty38n8pMTW6wDrda');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('84580749217','Laura','laura@hotmail.com','$2y$10$nSlrHDcML2uQwtxnVPIXQOMOYLykMzSFupdnFtdWgflguQaisf8jW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('84970705474','Isabelly','isabelly@solano.com.br','$2y$10$3mJ0UGzcqI7D2Fgz/Bs67uhcS8M0BV9KSt2kCO4u7T.NezMv.eNbC');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('85017746167','Walter','walter@uol.com.br','$2y$10$0EiBUXVnQBnVblaL6k8u3eTvLOK8eiccZ/cdbKoWdfC9FYIN9EL2W');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('85312607482','Pedro','pedro@ig.com.br','$2y$10$br2x6VPnt2R7PckiDGoehe9kmzTetSIoqit9muVl0WidbUATAF5bG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('85394552718','Angelica','angelica@r7.com','$2y$10$LUEgE0urFN1BQM753LcnPeHo.mOoOP0RF12t.t0Dzjdp1oRefra7q');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('85934242442','Anderson','andersonbuson@gmail.com','$2y$10$KiHsh.5mtUHg6LIRivbvDOVTUQKTmyEBPLqAxcosXfDnGE5ZVU34.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('86296677240','Amanda','amanda@hotmail.com','$2y$10$RgfS3j..SQmAA1eZZY.bde.ooHVMEuFoHKQv3wWRqKr48Dt.24Rde');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('86451884372','Yohanna','yohanna@hotmail.com','$2y$10$HcQL18T6XrbEqjfDbwaeZOxen7ETFjapTJEiYVNVU.l2IwgCJBz3a');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('86880598055','Everton','everton@hotmail.com','$2y$10$xnBwxcB0q1v8cLO2hm015.oXd7IPHx/uHS7ABRs.WTR9z1XaiIDhO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('87256901001','Michelle','michelle@correia.com','$2y$10$JwbJRC5omSVnZHzWomIzW.T40TcnY5ZwXWjWDYRIejdxsHuzlbDES');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('87813059542','Priscila','priscila@hotmail.com','$2y$10$NX/pr1S7g9Z0WDF2.LSM/uqvh6WG6kFvcmb1QnYWnFurc1ph6QjYG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('87948121495','Murilo','murilo@matos.net.br','$2y$10$OqxNmo7w6cF/vxLRsPfuOOBR27r2ib7GDazL278/VG5Gm/HYdcUdW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('88396573316','Daiane','daiane@marinho.com.br','$2y$10$N/xiWBQy.Gb17XLYUKsUdupEU4JN7D929510Y3PJElGYPHgCBiHUG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('88517400244','Erik','erik@yahoo.com','$2y$10$GmT5QWu4i7Y9DxoNrFWEXe7Qpuu1uzYUKTcdQsnvoiM/aii4PUN2y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('88564304210','Camilo','camilo@benez.com.br','$2y$10$5gaEtdhqUCT2oNSsoRMN7uUANSrCQXnjJLt/zD9K5hj9H.SAhIGR2');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('89045389114','Maya','maya@roque.com','$2y$10$.UtLzgtl024kbmF8By9fbOm6JApGSmMS9uZkAQh.tYzdBWR2tc4aG');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('89096697874','Alessandro','alessandro@ig.com.br','$2y$10$Ay/Mz4H0diifYmEZUgMmGuO74z5eAFSLgnbcvKDXp4lfsoEkf5Kp6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('89168381454','Sabrina','sabrina@darosa.com','$2y$10$rJa0zH6x0EdEGuy.69LW9ukfJ7Xe/6yCTy8XFkXCREAH/sk9zgouO');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('90382537287','Eliane','eliane@uol.com.br','$2y$10$pFNErqbZPlc.m33BCk4cqeftbe3uPwtj.wihHntIcJ4g72dXAM6YW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('90434108604','Ricardo','ricardo@rios.com','$2y$10$C0Czg88U1RS9R7lMhK7OsOrQMv0nB4vm7OGyeCIx3PrI3qiHGmRAK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('90614722778','Esther','esther@ig.com.br','$2y$10$.CLwvKWXVqAurUtgGRBqf.gv8v64np5oEgRlVQsVEbY1KkSkCfEm6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('90738055390','Alessandra','alessandra@terra.com.br','$2y$10$HyLZsnWzaDn9GDClQzEBZuTFeWJuNMb8Ee9BVa2iJvj/OMQs4Mqm.');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('90792430161','Irene','irene@yahoo.com','$2y$10$gNRAB7F/vMOlIqiZG3mRGOK1ePRb6VM.oXu0JyJ2FvC08uytXu95a');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('91614692691','Santiago','santiago@ferreira.br','$2y$10$gRc3z12gEsdSTuZ19GIfh.OCcblIWqFmPCF0nmUgKHOFp/Q0OJcGu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('92109950632','Marina','marina@gmail.com','$2y$10$e/xA2WfV4d/g2Gmmxj8.nePO3.4pXdNGQoWNHQqdejM6/P1DC2y9u');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('92378478097','Edilson','edilson@verdugo.com','$2y$10$XRW587wrZkw0p7XldgiNreQEkRllsGOSkaNSdNcJHYO8jcsHLNqOy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('93331657108','Victor','victor@mascarenhas.net.br','$2y$10$1gWhZSNJCf12nWNfXPYW8.p4kSrSZfekd/Y.ugTXo8Tf9nHV7JDie');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('94367975912','Milena','milena@terra.com.br','$2y$10$jh.yDV7x08P4HjRKzj8uAueeXw802qJQC1RFWe.AF65UdGzBVAC5m');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('94747725016','Mayara','mayara@dasdores.com','$2y$10$0tprgZ0cfJjkDnTro.cMS.7lw93zvoaHZa.rfI2S.8oSb4dvQ33XS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('95102083458','Ruth','ruth@galvao.br','$2y$10$ANSTV8axcUc8yGDvIDQnV.tMUMf3VkS3FZtstccHZc4itPykqcSDK');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('95481322723','Robson','robson@yahoo.com','$2y$10$VYWvvdSqln6tt6pjHVAyB.Nb2XzO4E0HoFCy684USWTHVoOo/6jsu');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('95766365668','Simao','simao@camacho.br','$2y$10$TlzuJh7iIl7bj8EJyaxEeuwvvHQvriyVL5Iy1Gm0LbI.DDvpTdkLm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('95900810929','Carolina','carolina@terra.com.br','$2y$10$jbUL9Yt0a5875C3BjyEYGetPPtbjfyNRuKA8xzpeFPZx9VHxFpMWS');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('96441609925','Cleber','cleber@gmail.com','$2y$10$mDY32Jms86UYQWv3yt8pNuxmPZRGHpVLUXxZwNSBwYjLWQTeFul.e');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('96660371589','Hortencia','hortencia@abreu.com','$2y$10$QITirA7psFNzELGhf3mP1OAz2pnx.7xxKSIoCbumeJK3vBAIMlRsW');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('96992513208','Davi','davi@galvao.br','$2y$10$wOeM9M88KLs22sCZbD.suufELDgQjl8g7SvxDFoPQ.7M/LZIDlxc6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('97058962839','Lucas','lucas@bezerra.com.br','$2y$10$kDQiY6Q/./8uaSUUF6q42O4064YvdwEVVjglD.ZCc04S.TMFm2tle');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('97352103200','Melissa','melissa@fernandes.org','$2y$10$M.qJdU4mt3ZdAS4g8yjC2e2sBU172whnRMzQtQbmWzNo4KGubRG86');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('97728863651','Marcio','marcio@hotmail.com','$2y$10$FCDUtOXBlwVT/3Vy7m6O6OyHfdvnm8Xh.hWNzW1MSZCCZEZRQDmdm');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('97908392304','Alice','alice@santacruz.com','$2y$10$yPPApbYpsrwaEs7LKRVg1.D4cb/kDNnE76QoZmKatPSvZep8DpG6y');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('97937755574','Suelen','suelen@ig.com.br','$2y$10$YomsN54uJJ38CjTaiJUqqeTMsjUUBohlXLmJLZ0ADPKqfeG8d5sw6');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('98458295948','Afonso','afonso@r7.com','$2y$10$vJv23HfFXqxDaqzyRFGeYOJava60cfd/BUMlK6F/RVRuMotU3aTQy');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('98743996744','Ornela','ornela@terra.com.br','$2y$10$.gPeS917WDEKuY/TVvTaB.XpzpNufqtgcAY3y0CE7IkNlBCcshIfe');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('98926608878','Bianca','bianca@mares.com','$2y$10$7liWCddfXcayl74DZ3kKLuRDGM/r.wG3k3xv.F6BRJ25vf83s88Yq');

INSERT INTO cliente (cpf, nome, email, password) VALUES ('99511480491','Renan','renan@esteves.com','$2y$10$Qpnqa4V88tFsSyWPAeR2oew3TcYO8ufQ7w4yiGgkRenSdYK212lYy');


CREATE TABLE `funcionario` (
  `matricula` int NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` binary(60) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`matricula`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=98835 DEFAULT CHARSET=utf8mb3;


INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('10204','42153169001','Wagner Love','wagner@ig.com.br','$2y$10$/Rb2eQOpJ3JlwtjjWTosweFalPpiz1ss7mmMgad2MvNHoGMZSY6tq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('10242','67557644776','Karine','karine@uol.com.br','$2y$10$q7I8Xw.qNuZ/EPXljdKT.ezVdFXMbUMKmshenNb3.BevosG0S9G3u','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('11547','52479427089','Sheila Melo','sheila@r7.com','$2y$10$6ZFaKMc6tB4aZ6U2KwKti.Tx2LBOUh.hRoxgIsi4jmy5AVt6P2z.C','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('11640','87593932301','Matias','matias@saraiva.com','$2y$10$gOyDHS938m2AXKbHI1va.u0f01jdwBEWhbaIuIeNE.vOvjOA3yyFm','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('12017','96691361651','Rodrigo','rodrigo@delgado.com.br','$2y$10$nzamHLx4dChoDmVIc88jHOw/g/AwkmrUgp56W3fNR9Dcds40C3V0u','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('12249','36445383630','Giovana','giovana@queiros.com','$2y$10$93tLmKz4LpKnmx5.JtsCGubOVWQ6nx8Df6HdEE7GD5.b.4d8BFCCu','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('12369','47400192869','Gean','gean@romero.com.br','$2y$10$49MvY1CrAW/392SfEz2fPeCeAJr1KMsp.zuRSGKGNZjUgOiPBKBzW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('12417','76887381462','Igor','igor@sales.net','$2y$10$12gIIHpE5hneYcV4Bz5zquCwwpqtkCQNvPRfKn8tyG11xhMIoxO3a','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('12473','83568034767','Graziela','graziela@ig.com.br','$2y$10$3nvvF.zBAEaNDtQujO.MA.Mlc1eWn9lTqdaKOIkaiyJeE15gqN5nC','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('12819','44292151788','Diana','diana@leal.org','$2y$10$O.2e5l.ppsLNVQlwfJn1Du2UZMmyBOQig1NXHjrnY/m.ZNf921Wgi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('13330','34300828403','Abgail','abgail@ig.com.br','$2y$10$V01fVEtPuAUcRo.56pIv9.AL.gM3197ZEVgiHH.WLnxMxvNsK4/4e','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('14435','87928921859','Madalena','madalena@souza.br','$2y$10$Qm50eMr/.PNNAk6R639jJe5ocQnibpDAcXo2Yb9dDXLyzByUpdFxS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('14642','90367944434','Leandro','leandro@gmail.com','$2y$10$hwL8BSPUvCOOoQ13vLRuJeIkf.7iYTcVQGfjGlAIeU64AtBm7nxxi','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('15674','60693038713','Giovana','giovana@ig.com.br','$2y$10$AyU1EheMc5iYyDFk5q7WZu2n7RoYdzEi3QCXXURdtC43a60GI.zrW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('16467','52161333764','Bianca','bianca@valdez.com.br','$2y$10$eurllPbD5jzg5ZwkNO54l.rcVm7IRblhjlUwHvP5g.Vg6FoAtkzFS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('16525','93174946167','Mauricio','mauricio@gmail.com','$2y$10$GqIEY3nGyuAFwf.T5IUXsOtAGuccO.mVA4oJomrWTZG0UtgHDeiAm','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('17309','37747428162','Renan','renan@goncalves.com.br','$2y$10$pAu033HsJnC6L5TBt3/J8uqLoVwiZcA.lJNrwCG6WVY2YCNn/NKQe','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('17312','58048915323','Daiane','daiane@uol.com.br','$2y$10$QR46mDa5y0jro7SHizNXC.WA0DNxZPXqD7a0NFv6DoWhAqAJztuFu','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('17741','15794891074','Beatriz','beatriz@alcantara.com.br','$2y$10$scyYg/jSNXJ2PJFWk5ziq.e9j/Wgt46rkNAM4VFcp0F3IbVqwv8gG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('18027','36704617764','Luciano','luciano@hotmail.com','$2y$10$Et9o6DJPG1qjhg3TpfpnkemBmDfWN8vuh41PO4h4Zat7a9a737uSG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('18455','66756598801','Edson','edson@ig.com.br','$2y$10$OUrqcqsUwAmVjBK3Uci1C.w6I8hYQiT8TzpcNisbUyXiImiS4VejG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('18459','95180749187','Ruth','ruth@gmail.com','$2y$10$owqQJozgver7NMZmq.HpGeltrOEjkJ1.8o3BtIBxfOfUmNqURuJ5.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('19556','94577811255','Simon','simon@r7.com','$2y$10$eHHOiJPFALCFjsvD69L/Z.4rx.XF3xu0qIOA05qFZhuo2aImPRkue','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('20088','55173419654','Italo','italo@verdugo.com','$2y$10$coVq9bhorED1zHQxUQHG8OE639VLWgKeJNNgCk5hFX51QwgfH0QCO','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('20799','55901861527','Theo','theo@yahoo.com','$2y$10$u2mJWMTGHXKAtU4b/Xxg1uO3xlOqt/zQpBN1NYsJzyV3wLBKat5oa','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('21056','62139718595','Constancia','constancia@hotmail.com','$2y$10$8qor5o/iOw1eDUX1vzOdPO2pF1wI9ik/Blolbp1GCH08YrshnPivK','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('21067','39563693712','Yuri','yuri@gmail.com','$2y$10$/lOh7z6v3Um9wCQIiXr4weDtjxu.BQz4VkSjAUvr4/SrODUKKQ4wS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('21546','67607400094','Thomas','thomas@rico.com','$2y$10$DIJozkPGEgj6NEffGSRi9.8oXR0HiwDz9drvmg6Z.l8hjyMTBu.oe','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('21567','69149047711','Talita','talita@benites.org','$2y$10$zUusGR4vHAheeedb2SxlgeU6jWbQw.FKkxpVqpuDCBQpHgGnxyzhi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('21615','82300264123','Maite','maite@perez.com','$2y$10$EXmMU/U1T1w8Kg0Fd/eo9ui3Mu5dUvqiCpk8Q16lVsNTTQeh26Y1a','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('22532','81654657253','James','james@valencia.com','$2y$10$y9yNEMVIcTZLeHjWC9g6gOpjzrhHJvrfuSxOqaNC6e8Egh7cNFZoS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('22608','60161762443','Edson','edson@urias.com','$2y$10$B9//Qp/qJnRWjw4z6nYNCOI.G8PcESWpf/3g4W00wL54qgWtQOpQG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('24196','17738816677','Roberto','roberto@rocha.br','$2y$10$y/B/ORJk8oGh5yOr7Uy5COX.mNo12wjVj2ACbHOca1cA6LpyRxHW.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('24477','92851778986','Italo','italo@marin.com.br','$2y$10$9WltY7UM8dkji3GeZvRnoOa..IacWos6LkynfEp/zjiIMeTbTgdTO','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('25127','98465401197','Daniele','daniele@salazar.com','$2y$10$fYi3i6Fp6dcQEeJxjcJlAeC/PXzaWeZjMLy7oCt25Wnttm5UcE/f2','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('25165','79090694615','Lavinia','lavinia@branco.com.br','$2y$10$WBIicgLceOHTNbzRsd0tsuBS6JAKHHNGxBRQblGhtQ0mGiEAj/KVq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('25228','89901740086','Michelle','michelle@r7.com','$2y$10$Q8uxUTPEAz1nRGWywZKDr.5mZobqmeyFEQONK4t79fwxO27.PKPri','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('25717','92207779936','Mario','mario@hotmail.com','$2y$10$XvDDpydG35KjL.bdF9Q6LuxfT1X5PwX40YscOBNmuYznm/bRY3T4a','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('27282','20415867572','Liz','liz@leon.com','$2y$10$BYR2at3ti0KJsnccejWE3Oqc0tGjsN16TKEwHBUd.L5qR8CBuIUbS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('27493','13563858894','Denis','denis@ig.com.br','$2y$10$a52j476JA.vAdTzoE7a.3euYg6rxs5wB8.o3n6EjtyFBNKSJqWb3.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('27600','60307959904','Joao','joao@terra.com.br','$2y$10$6K3O1pO54KNwZZmI9aU7geGd/MwhP28T/tyiYx/e.gKB0F5uboiSG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('28782','97895104159','Heitor','heitor@yahoo.com','$2y$10$OWzqSzLnXOS6oq180KU.iepULwU.oUDDd7oV7/.Hz.L6Pd3gcZSDm','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('28808','72085328735','Artur','artur@aguiar.net.br','$2y$10$gJMuh649g9QnKJEZi9/jZ.I1Nc.43AcXH/3.p07wlRJV0SadSl0oC','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('29336','48804935807','Pamela','pamela@madeira.br','$2y$10$Lr3G2ZxUsN0s0OOqxPq6wu6NXbr0DQFwWf4xNT1pYo4lDCnHCtd32','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('30274','50098945026','Denise','denise@galindo.net.br','$2y$10$cXcY0WDQT.uj3SsxML9um.Fxk/9T4rYNIIyF.sr8xfhhJ5xAK2gB6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('30438','67431516845','Olga','olga@terra.com.br','$2y$10$wnRklfq3AZOBatyufOgv6OLKpEQ.LyhzeCVktQJiG8RvB0q1Bveru','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('30596','75897191376','Maisa','maisa@esteves.com.br','$2y$10$GdYCTKYj9BDw3VVUydk5oOiN1Th/sIUWzGyctCaUb/HqcGXo1bgV2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('30603','19453699375','Simao','simao@toledo.org','$2y$10$zAlf7v33xaCQPwU.XOu9EOyXAdUSMRe3WVsemiShbguo81Hcky2EW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('30818','22762933565','Walter','walter@hotmail.com','$2y$10$IXBRBR9mlcjX3wYmU2JFduDzzTBRMtrvZ4NW7Ia5XEGIKSr7Q82/.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('31914','50719322474','Ronaldo','ronaldo@godoi.com.br','$2y$10$lVkk0ufESoBQLdIO2Y3s5uaNl//dr.mVFrxQBOevfSjLTF4ieXCGa','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('32447','45420859521','Michael','michael@salgado.com','$2y$10$P6rlkstRRrFwspoPQ9ODqe7NYqYx5P1x.NMx3eKFBpKF1wQzedoWe','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('32642','32128606747','Aaron','aaron@aguiar.com','$2y$10$daZ.SxzxCckCGHFpcK3PEO5A1z1ZlO7THOqORwPd3hV8Jza3YOSSW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('32710','33390489476','Heloise','heloise@hotmail.com','$2y$10$pVwYYBE6AvbUkFvFJyFSoemlgQ6/dujWp8.e0/3XTARTlNaAfC0JS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('34688','70629532008','Thales','thales@faria.net.br','$2y$10$AhEaBrF7K6FFrULOJ.suHuHVJHelPhmG6WdW9e2rSif6CPhgHI19.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('34749','45950874709','Wellington','wellington@gmail.com','$2y$10$FNxEZIWe0ICYwr07FyPIAuVK6Ajjy2V1kDnmw8DdIOEkoxCdBEJL.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('35469','45188153485','Rayane','rayane@uchoa.org','$2y$10$D7qbsA9iCCKtbI55aoZ.3OksE/1K1XaQ1UW.iI7bGbwATLkC5Lbxq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('35593','48101210881','Jennifer','jennifer@gmail.com','$2y$10$PLEc1JJqNaveI2iqwUCqFOp7UXNhDfbfzHIGAaiFVH7B79FiS1ZE.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('35821','57406349360','Cynthia','cynthia@pacheco.net','$2y$10$oSNtvXGxLSfpEVl1cU06oODSLsjKUg4F6I1OPx/MWDPYTdgYoXWfu','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('37132','41395879149','Andre','andre@uol.com.br','$2y$10$8MnVJj9cCdwikzRKe83uxeHnVNrsWnFhGEqboiguKHzGLu1XkuViy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('37370','34323825229','Ketlin','ketlin@gmail.com','$2y$10$0l/dOV7X3jaPky3sxsPs/.T1tvV78FOlOwuWJpq225t2tWQVmlHGS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('37638','37284098114','Juliana','juliana@yahoo.com','$2y$10$tQ5c8O3N4V.goWdcJtESkuoqkciPZl2BM2yvt8IaY9caG2ITEdEfa','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('37763','74480670219','Barbara','barbara@vila.net.br','$2y$10$RgFHPfSt4YSRQPlenTw.duVJYPE3dlHjlPaP7HzxzD83ruTakWkSG','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('38363','79032487098','Caio','caio@salas.net','$2y$10$99SpZDdprrOTfz8X0D/TEu64NfxKWykwYwZSHN.rTHHemEfvNZX3O','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('38522','49289965624','Analu','analu@galindo.com.br','$2y$10$qh32OgnjaJTxiUq3W6VrfO9oYKlE335H7ntgt0G8VKyqyo9BKDbF2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('38714','54039336913','Julia','julia@uol.com.br','$2y$10$aFwQRqwDNT46GzZU9eiAl.lHKU0kkA/G7ZcJf0kTmTdYNOHehZsdG','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('39724','49845964798','Vicente','vicente@ig.com.br','$2y$10$zlh88UfZIq7xwnAdYFekmOOkic9xbLwrH36q2KbD3K3Xn1ajezV.C','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('40013','70383014161','Natal','natal@feliciano.com','$2y$10$Vtf5gRCaBMm/UQv2XywFz.DZv/gUNmI6wIutdXlIy1p2EsEU7sEfa','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('40534','88020020782','Gabi','gabi@hotmail.com','$2y$10$uUlVAbz02lS4ckfDhnsGlu1CSylzt1D1v8Kit0DidMYUj4U1GVRmi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('40961','84389696325','Claudia','claudia@delgado.com','$2y$10$20c4kMCPHAiqH7.623YAqe8mN38XocB/X6Um74qO9vGlixaiRYbj2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('41250','65406950680','Graziela','graziela@hotmail.com','$2y$10$QVdmImdPnCmI3ANfM0Dmtea/7nI16wjkHx8IUeuUxmKpCPgMDjH0y','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('41253','76131157085','Adriana','adriana@uol.com.br','$2y$10$XPx.8KMjhOUL7kYa0Kfp7OHbyOEpxiJareuY7OxWOvPtLhviAvB96','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('41516','96865350230','Patricia','patricia@serrano.com','$2y$10$dzgB1vyQnYVBVttf45kdIelM3V8oM62gLCfS3Tp/Ur/r7jYji4XWu','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('41825','28406394081','Everton','everton@carmona.net.br','$2y$10$qJrYY3h7YI8n6c/N4M4oMehJwOCb0KYk50xpW8w9XGSh9fUY1Tk8i','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('43358','48001849878','William','william@ig.com.br','$2y$10$S2DIAlV/g3iOL6FqQbJiduK50bh6NWfJdFPOx4jr6/j5zhDaSaF1u','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('43871','81298499912','Maiara','maiara@rico.org','$2y$10$kxc5VXcTYfPtl9q890Ix6u2KMIb9lKBQ4n38tagkzPclyGQZIFEjS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('43899','31647072762','Otavio','otavio@hotmail.com','$2y$10$XfKGfRL5ePsf8W2REcBhDOoHA69ZokuhDVF2zkIHzpGOXCNgS2y1m','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('43907','70237183376','Monica','monica@yahoo.com','$2y$10$IwHO.RytN/5YwIDa3eBu6elBz5l5r3wXRMnRRgfOD7WXB4dasysWy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('43960','32399267915','Ornela','ornela@abreu.com.br','$2y$10$trKikGZpZwjWPl2zK6magOMrlwL5ptkUN3Q1yBKinGNaoIAj89lea','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('44221','90454912988','Reinaldo','reinaldo@azevedo.net','$2y$10$EohYMUK4II426D3aUm27qeUrvF5EFs.qN9SFBjWD5swdf3IhFOSRO','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('44445','75787342586','Alessandro','alessandro@vega.com','$2y$10$bQBd50W1KPD4hFiwnbF.R.0v.Ym7bQ6iDBXTlAfKEhSxLCN6PWrP.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('44619','60997558939','Andre','andre@oliveira.org','$2y$10$yfbDPRyg/LuKi.Pk/hj9fON71MUAk31m3wb3FJAMLgkOj3J..AOVC','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('44754','97429438631','Isabelly','isabelly@r7.com','$2y$10$BLLScBZWHNFZgTh6i2/fwOapiDjWhUI4elCjCXpwuJYcdfUxYrore','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('44872','37772715935','Juliana','juliana@ferraz.net','$2y$10$C8ZLgs90aYZgYjW8Ycxe8uxOp9MTN.meG1S1o5Ioi/4vAwPQtbtYq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('45510','71654265013','Raphael','raphael@neves.br','$2y$10$snrRggrr.gu.YvAD4poFIeEH01/wsWMIg0MHHXFPQ2t36icqSwEQC','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('46047','28502126521','Noa','noa@yahoo.com','$2y$10$GCq9N02m7SXaNZ3aab1ruuX8qr7PgnWj/9cbGAO3TVl.cFe2s8x8O','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('46059','56244407724','Agostinho','agostinho@ig.com.br','$2y$10$aPNLncXSh0XVLtoSJF4RCuAWeMmDA/O6GPvK3GbQbvuqhvzHCc696','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('46643','84871718979','Emerson','emerson@ig.com.br','$2y$10$Dlog6j5L.CFjMauysptePuIdJP3.UxQgN4CBKJWRdoQxIpkfifMS2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('46769','31639859920','Diana','diana@yahoo.com','$2y$10$/hR2kZstdxfPF8PT.j7btuXoBggvOQs/7U2xdHmrS25Jq65t3uJ1C','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('46938','16152091437','Antonella','antonella@dominato.com.br','$2y$10$kVy7K7r3UiuTaySOCT7Tau889P04QPMhlLrvbkEfBosGSLJGuWtZ.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('47265','19841053554','Walter','walter@gmail.com','$2y$10$8Ct0xld1Fp6M2j1UDj90Fu.gklCA.eJtNQRtlKWV8qhcxoshMsvbu','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('47745','93982473792','Wellington','wellington@deoliveira.org','$2y$10$fG.x2sV543bqLUDHUHR5Nuc5mtUTjchcnLxd18yQpfC/saxm5oCOe','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('47797','88991168583','Benedito','benedito@ferminiano.com','$2y$10$5Oz3MgeXPmaxstjD/WhXv.7T2XOxL2yb14etm/mPRfg/bYE2m.pne','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('47885','20742935107','Agustina','agustina@ig.com.br','$2y$10$hof/Q1uA8n3ajtdESM9bnOprN/.jwe71RKpem/wgryx4lArsqlND6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('48040','34342071964','Agustina','agustina@r7.com','$2y$10$SYgEzq/7J6g3GpO9HArPTeaKM9XhrmcpKBQEp/QUa9dXmc.o9lGIK','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('48541','14021087162','Fabiana','fabiana@terra.com.br','$2y$10$ceaR9OktA7lIj/okt5deou3V/9YoTfpnQeboBlDHQ73ovvfqDNUim','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('48844','91910850024','Marco','marco@benites.com.br','$2y$10$oCu6pdforMvmhjL2/pXUYuzXK0Za63BgbDsebRg2OmdVs927Zty2q','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('49400','46616927731','Henrique','henrique@marin.br','$2y$10$h4kT5LAwpFn5/3LkgDahHufRZWDoRrjrIMV6zBG/.5v7A7nbaX3PW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('49408','38794390250','Rodolfo','rodolfo@yahoo.com','$2y$10$a.gTXwbeomM5rcssxCKI8O0tDQYug3XOM.LsgiyHEN7O1IeP6tgk6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('49575','35449782697','Dante','dante@terra.com.br','$2y$10$jk8DJuYroL/F8XAduycgwuLprVKlYIfGYrRdsYfbqupymOQXm2H0S','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('49644','31060487458','Emily','emily@vila.net','$2y$10$ISiFvyEG9ku53lv38P8.KO4G7XZ8Dh4K3H8lEAK39AuZiv8yK3kZ.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('49658','20782475669','Miranda','miranda@gmail.com','$2y$10$94/sxnrA/SSRpz7dkm3e3eXOu4qMIjvfddB/YeeILgzd7g5yk/AJm','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('49965','76701952466','Kevin','kevin@lira.net','$2y$10$r2ipzaszB60r52W0tvPJPe/fRnVNjxhZazHq9WWodEtoCHVhBJWc.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('50410','75722247447','Julia','julia@santacruz.com','$2y$10$iore8mtRK42Rd6UgSdl/AOtpxM2rFSzNpSUTsOgRVQHivvNNkTWr2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('50642','72152551445','Juliano','juliano@uol.com.br','$2y$10$5KlvM8TNmxSwOHJq0gLgzuiwu8xTQGia.MlhWki1ANvF5fOfaKg6K','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('50650','99798831612','Lavinia','lavinia@ig.com.br','$2y$10$qprT0sAs5wajR1voosl2i.cwb8ABcQd8b8ydOqeCGsu/vVKYoV.nq','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('50867','64432188244','Sandro','sandro@hotmail.com','$2y$10$CoutpPajR50X4Ll9hKgxAuy9ds16znCzljWceshsdkQcaMVypiP8e','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('50937','57406322386','Franco','franco@r7.com','$2y$10$ahP6y/KH2s0FU8t5/1SwTeu1QQZB2euAjCfTPBSLapjoTE42N2VLC','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('51178','40941660580','Erik','erik@ig.com.br','$2y$10$yTWxZXZ/JXbuljtpFq9y0.GQnFFp8084HnepRrorLUi.OfekTJsb2','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('51268','89274924894','Paola','paola@r7.com','$2y$10$iOuACJZ.QDEtIhmbVZ2XSeSlJr52jeIRmFHjj4HNbnRHkuWHOQfzW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('53831','71306508101','Raissa','raissa@maia.com.br','$2y$10$53X/3UTW88611xv9ey/8ze.R0Ejuz8QO/iCDzsEjOQy5Mtt.xJWx.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('54765','20286870272','Fabiano','fabiano@gmail.com','$2y$10$.PDGek8Tnq4/RaLhPjteheIiUJ3V6EP8JDWPS4tKnzvIWKIju9Z1.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('54971','86483278019','Juan','juan@hotmail.com','$2y$10$UVRiPrPrp3Tgi7QZbBTZ5unqYGbkqJsEf8uplunxKy5ycVH9KCZ8G','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('55012','67463236732','Diana','diana@faro.net.br','$2y$10$M0XIwcX6exsrCqjPuEyF7.Ryn/LdWd59Mo63qua.IPEPWKTdzkgvS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('55187','81488082569','Michele','michele@corona.org','$2y$10$IhQpYThPCEjXRZQAxVhVaeXZlmKgBocNmvaX6oJeIB0MAfxqg5gg6','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('56729','80419312847','Lilian','lilian@bittencourt.com','$2y$10$TMeJ8bRtqkrH7uUMdjBn..rU433vPfCWDGLYPWKSRFSzDvetsm.tW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('56745','64357968090','Yohanna','yohanna@toledo.org','$2y$10$NcX0F95vfHIY0.C3uOzPnO7IceGuFYUMxV3h2pxKul305tmNDsUf6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('56887','16984931481','Claudia','claudia@uchoa.org','$2y$10$b0ZvacPZlwUQjBbbZPSqhuIt0.MOpUXcnuCHvrVaMjizerQ2Uon.2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('57410','54577966370','Julieta','julieta@galindo.com.br','$2y$10$LCPSQuYfOUzg9etLHCDizu1KEks/cyOL6zsxdZl1BbjJf9YNYh7Y6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('58220','99664290331','Aurora','aurora@ig.com.br','$2y$10$ngcrmmPngIZ5qaMPYg8JvORVm.5UTU8HoZ/xOiBvUs6GoKerFbtq.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('58843','38918978841','Fabricio','fabricio@ortega.com','$2y$10$iNt66iP/sHFvTDdfv1THveGIETbYcPz80DEMIMmhJ9NInZemE6blq','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('59091','25083064234','Agatha','agatha@mares.com','$2y$10$34U0s/WQFiNapzvkKmHX4uD85cR2mj1Kigzh6ImtgI/TwG43TLKIi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('59404','56018928502','Jorge','jorge@yahoo.com','$2y$10$OixWO1Bq5SCKAHNCo1fiketNGDDOx52MzmRJwgR7YGkmx8FEAQ.ae','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('59439','53678655173','Giovane','giovane@marques.com.br','$2y$10$YUs9lXTs0G8fft0zDx.04.tDHTqbJwLaNxSI2pTiSc6.dLGpkT2Ke','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('59870','70836105889','Cesar','cesar@romero.com','$2y$10$dD15XXQG.ikpOtd0MXJULO.5soVqvyFdxvveVYoKv9/C98kbNkxka','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('60008','69126979379','Cecilia','cecilia@yahoo.com','$2y$10$PPNYWW44cZEKSnpg1BjUl.cdxomMYbmZzrqG9H4ckrFWDwX/L.atu','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('60014','25701419257','Davi','davi@uol.com.br','$2y$10$zidV/tXJY0czJ25g68Leu.hQlVmHVNW/keKKIPFjH6ZsiAeRsWeXO','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('60088','81119156528','Dante','dante@hotmail.com','$2y$10$Hkz7PrZbruHIz6/64P5nG.SjfoHGwg/qhmNm6zwjRneg00zpJnBNS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('60474','95953148315','Benjamin','benjamin@torres.com.br','$2y$10$jS74ce7Lx5I4eEznoqQzouSuaG6By5AlCTiTfAt.OngvNc3wXZuiK','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('61447','63982488173','Alexa','alexa@ig.com.br','$2y$10$INbfTKxuDV2Ad5ZpAw3w7OIOv1V1AwasJP/cVMBSiQbdo6AgJcjxG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('61454','55166741749','Luana','luana@hotmail.com','$2y$10$CqKHjUS4KKDF5oqzWAl04ev2oSk17lkVZm5Jef7ksc7NbtOcvGvpW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('62355','27720282207','Mariana','mariana@dominato.org','$2y$10$j0/F6wm5Id6pNGNCvXaXQuKjsirg0ueS4g7RR7BivQAVDIz6Ob6a6','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('62617','51611434290','Michele','michele@gmail.com','$2y$10$IIWqq0tfE84AG2aCAQt1v.QTlR3WxU3vPSiKeafalSAqE7An4uODK','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('63598','25395694674','Giovanna','giovanna@leon.com','$2y$10$jDYnpHGbMwDfP0/t.sbxMeDoRuh8mgcBqUtznF1Cc08oDph9JLdwa','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('63715','48617205853','Julieta','julieta@terra.com.br','$2y$10$rj/aaQ5SwvhEq0IVweeCTeb9Edhw7klA4jWjYOKHvKTyoDIIPO0R6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('63719','79897411554','Andres','andres@yahoo.com','$2y$10$i/4zIpBaRer55lzoBPAuEuEX0c7VdXDPn7MJvHoVc2Irhq1NUs6wy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('63937','44545906733','Ziraldo','ziraldo@bonilha.org','$2y$10$IUVtcdu6pOf8kBk6MpQCq.hgGrljECs/vcAuJgZ2A6jXkHygEl7OS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('65144','43364923109','Mia','mia@lutero.com.br','$2y$10$BFuDeZaixks9p0JDF..o3udLp717mde/GWLP1SR/E4HFoK4LEBSq.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('65239','94466839812','Marilia','marilia@ig.com.br','$2y$10$7QEfQ5BgtncB8HAKasWH6utNPuQyN3h3CnXjdcdtt74Tbp89mB2e2','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('65975','47966601549','Dirce','dirce@r7.com','$2y$10$y1G/IiuHi90HFEpfm/zgdOqK6SZYb/XOXFFCAYs9HgPvDNByTyKYG','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('66174','31912951191','Allan','allan@hotmail.com','$2y$10$4STBeOAbuic1hIt6wQ8Kpuia6zREnt0MMYpch9G4ionFCzGmXy0hG','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('66961','69053464217','Isabella','isabella@amaral.net','$2y$10$Qwnc2ossYVLfo.VFRya3R.S/6kEBV8fLGNQe4c5P0M0jMeWRYeCXy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('67470','19180573071','Fatima','fatima@gmail.com','$2y$10$xXAdP.026NYQLG58GdAL3.HzyucMt3HLzjWdmHj3gzZAw.sQlF5Vq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('67777','92508201723','Bianca','bianca@salas.org','$2y$10$fF9V9vpfpfz331j74knP8uTlZSlrodzZM1WKfIPcfGhNfgwKun8OW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('67791','53307347173','Luzia','luzia@r7.com','$2y$10$ZIf/c36zHYbpoIE8/rR4JeR2nJ9BAglaU7PhBCXfDB8IPXWaBEw7C','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('67935','53470920845','Carla','carla@garcia.com','$2y$10$JfUfcU8lAE4w1qq5XmjokuC/bckoyIAnap.ZtBhVIo1qaRCm9y7q.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('68880','52750564759','Edilson','edilson@yahoo.com','$2y$10$i0imfhgsdn7cr5EX5yqJ7Ol1mRwZemgYbVbeEfS64bqNmo2FTUSW2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69077','45656493106','Madalena','madalena@salazar.com.br','$2y$10$HggEtnAlXBH4KJ3jk2nE5OFMIY7KpGbgc/62eG405Nu9zuZ7MkT8m','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69327','27323042426','Talita','talita@ig.com.br','$2y$10$O/gx40YO0C75hvE7sgQ3Z.8S2WF.RJS8DBd9yMVetryqx/YtUlky.','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69370','35924921031','Yasmin','yasmin@ferminiano.com.br','$2y$10$3GSgUUatLs/PpBdA/1cp7eWn4Z7JrxLEPtdXpOM4./XtLjXw3ewr6','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69486','23560082771','Sueli','sueli@gmail.com','$2y$10$hK2pC/LzBNWIpqvcaHqMmOeQXHJ0SxF6CvQTSB7DGuWfKtQsYIGSS','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69728','28395466901','Mauro','mauro@r7.com','$2y$10$gDH/jtsS8lf7WhJY7TSnYu/emjnDtvOyJ1zfX0zjzPqAhQT5qryWi','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69858','78472070011','Leo','leo@hotmail.com','$2y$10$B9Jj49qT/uRbqVn4/IZSruG81PFmLb9V/XtTYGUVeNfIVpfwxB3eW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69925','69394395972','Gisele','gisele@aragao.com','$2y$10$y/JleSgWQ6VVK3a3kLO9GuXtlmdSZG54.nIn.z6fmrb1cVKmZcOsy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('69987','57549130788','Miriam','miriam@chaves.net','$2y$10$z9xQtrUC5A2zxFY5w3wdLO2LupPlBgiWRXwO2RkMIUWapwCM1xJPG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('70003','97578352800','Edilson','edilson@pontes.com.br','$2y$10$gtRJVn5Je5UlDOZlUZ6ufOl2bGWZfi.AGClvENT01d7slbDsO5LOm','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('70201','75740600142','Cristina','cristina@terra.com.br','$2y$10$PNmEwfN5cDjGvLoCfrURreNr/f6.Afg1kiWxjuYxyZ3xgiM47ed.G','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('70347','83043708476','Viviane','viviane@fonseca.net','$2y$10$YSRyJRMcoyvXi4j.xSwSVu4k314wO8SzX8f6WwsadHReHfbF4WMUi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('70887','54005614178','Gael','gael@ig.com.br','$2y$10$5vXdNRkmQ5mtOIFj1oYlGu0b8eggpcu6CUjEa287bpFuBEb/tgEZG','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('70890','66982772876','Mia','mia@hotmail.com','$2y$10$uaYbAcMJKMhT4/B4WpBdreYxeOp6fQAiDFFMZRg8zOl3VGTDCFkWq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('71703','26563911090','Samara','samara@uol.com.br','$2y$10$7LPPqWKM2tKY.Cf4nKpizu1G0dBDABIDQX4cX6QBqEFx7k8lWpluG','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('71811','77509292301','Emilio','emilio@flores.com','$2y$10$tsLoVSsmtFzPXby.CHqiFeI4A/rn8yWdfvQvgOY3LNFIqgNi5zMc2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('71912','25187649026','Joaquin','joaquin@fidalgo.com','$2y$10$0M7nIaYRmpucXw55wIA8zeUqi9RDUdqND3d3txz6DpU0nTAmPbBCe','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('72269','26955361911','Italo','italo@terra.com.br','$2y$10$pbbbH4b8ZTbD8NDqMjw/LuUHod32OOnaDKgjhwk1ra5K57uzHkkiy','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('72492','30594142443','Karen','karen@serna.com','$2y$10$EWeMap7kc3aShyzB5ARlnuBQbW4/0yX97fszzniPFGxa99TZ9MWUW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('72873','56091550213','Davi','davi@terra.com.br','$2y$10$EF0jcn2cyUitAgddCQV72eNRAqGkH1JWutQRs0EZKien/SSGQZWG2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('73787','73629241316','Luciano','luciano@serra.br','$2y$10$AxWeUWOFmy0iqezcET1H4eCLl.Pf8LHdId6PZJqd/YJcOUB6V8hyW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('73828','88602686462','Ohana','ohana@pacheco.com.br','$2y$10$n0U7m1UdM8wI2OdRWuShUuMnHkw24U1f5XmUChDogNkqYPp6NuYWm','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('74022','71719333699','Kauan','kauan@avila.com','$2y$10$gSCHlkL5AGt9K91hHKWRfOgL3oJRkihp45PNgbdpvVtg6haFTbJYu','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('74623','19417252099','Pedro','pedro@r7.com','$2y$10$PuxAT7CHz.BWDMmd8xLuMO1pLBt.uesxqebT7Y4phoBKAzIwpGmYW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('74973','34830194943','Willian','willian@queiros.org','$2y$10$B.eADk0gB8pIK42b9KxmDuP1EAim5A7.fjkJFsGqCtlme2HzZJc7y','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('75168','68634531952','Victor','victor@prado.com','$2y$10$dwyo4n9o5DzC5kjXzB4uZeatpJ6g1kv7rC7zVkc5IYODLYDS1BJZi','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('76113','18267669554','Jeronimo','jeronimo@uol.com.br','$2y$10$hZfn6wX7mYIPlanbNeTQwOVGPrmNiybnizEYDjn8Y8TwFmiCzYIeq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('76743','90358089432','Luciana','luciana@esteves.com','$2y$10$jCuJbvItkEDXBZbOOUrcl.ogocTSmZMVlHsjt6U7vDotsr4wDz.Eq','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('76882','74894573926','Heitor','heitor@roque.com','$2y$10$ns2t54k6in/6o5biSQJtmOiJUk0LW.bIitOiT5iRW3Oe9j.uUxLfC','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('77131','18622812365','Ziraldo','ziraldo@uol.com.br','$2y$10$RC8JNxMTKIb5L7ShCl1h0.12oxdwY0mksq0g3v.mO4EdN4kncQpPS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('77201','79032310070','Danilo','danilo@gmail.com','$2y$10$GwKyQzf7xoEijpqYFwcm9ODmdugFMkV9vRg7j5JwVj3IOtLSbgXza','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('77645','84569686117','Eduardo','eduardo@ferminiano.br','$2y$10$Ms.MVdRMu.tZo1UrAA5HCuPA3RzUpoAqGTJVqPwNkza5GVKDyL1o2','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('77880','54848286582','Mia','mia@padilha.br','$2y$10$9F0hwe29nNIRUSmx/oCBQOgwrVZJylmMKoBDSCwkp1EyVffu1MnHi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('78571','81557747049','Malu','malu@gil.com','$2y$10$6Cvd.wV6Qgb4yKuwavdTOO1H.fROl/vRMk9VGb6EVVBAnhZwae.72','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('78581','37501693511','Benicio','benicio@prado.com','$2y$10$CbM4ZaNsl4TbsRPCfC7k1.bAujw1gwkk1ZrEu2.2.uWPWso870LKu','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('78870','66109331864','Ivana','ivana@r7.com','$2y$10$/Bhsbj4u3dIOPU.DmSgGkOh9Ik0CYdhHC4Jtlple/FfiYYPAqqu1K','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('79807','28482699582','Raphael','raphael@vila.com.br','$2y$10$QM2/Bd.rEt06H259fUKNP.kODEmayJRV7uDJD3CKo5wFgfB70P0JC','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('79856','15093262539','Michele','michele@lutero.com','$2y$10$DuA1i.U2EUlFj8kgcD008exVBUpis.IKNA1J0VqQhTXu0fBPeyMe6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('80411','24203293584','Sandro','sandro@yahoo.com','$2y$10$hWqmCt1FtHh3ajRhuwMSau.yUCCpwnNT7kckMyuv5QqfNijgjGCmS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('80512','23476905929','Daniele','daniele@r7.com','$2y$10$D0U4Qbl.wXxZSsO5uEa8D.sxsCLR7px/gl9JahGRaXZn5kQWes.oG','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('80905','59519612885','Gabrielle','gabrielle@yahoo.com','$2y$10$tl.9yozS2.Ljwo8l2kh68u8S4NAZswrbMkSS0iUg/VBcQspQNdCry','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('80915','19497748498','Mateus','mateus@dacruz.com.br','$2y$10$3pCFaBCBW..z9o/NfjicWuv6SA0P4MeJYIkMUh2Hwtg2opFzC9HMa','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('81243','73016221071','Liz','liz@terra.com.br','$2y$10$pZ5mQF8BSe2LE640AiRnxeGYMdZBe3q64xfG16Qld6ggCxq9MPdJu','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83134','93064280250','Paula','paula@queiros.net.br','$2y$10$c273F3XeBiHRejR5GK9eO.AsyUlOzdgaLmjZ9zTSuF0xpCf/qWOpO','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83158','52376673591','Walter','walter@cervantes.com','$2y$10$VaDtTfwOgy99aJ2zJcTJ1O7TD3JV2L0CXkO83m16Yylk76hFf2X22','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83249','94265513782','Vinicius','vinicius@deverso.net','$2y$10$FqAXpIAvoSDP95jBosTSxuTHWIcB9.ZMemfu840VZnjkmL7IiEdIe','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83574','76086242722','Diogo','diogo@uol.com.br','$2y$10$DPA6rsyeqWL93plefFBZjO3MoFOEo4JXkEZQp0v2ZDY6NXlk9RVxK','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83741','43639695297','Fernando','fernando@terra.com.br','$2y$10$O2MlUfKyirYA4S4HwWEi1usr0SQbP1XXlepydEuUkyZPetuv5UYtu','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83820','68364168133','Teo','teo@ig.com.br','$2y$10$e5ZXp0BL26O3SnlRDkiuKO5/6IPEN9n/EnlEZcnjJn13eSzo5b.BS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('83880','98287579241','Laura','laura@pontes.net','$2y$10$FQtDRjsx7es/9SkFatq0a./MbcLZp9c4CjqQDoSJvHuI3hB5./NXq','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('84049','40716258275','Kleber','kleber@terra.com.br','$2y$10$.50XiK7uRU2kvEZ.jnh9LeddzWU6UDPXqkM2Fx2K26oaBpNp6dYba','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('84070','73605261114','Rebeca','rebeca@sales.org','$2y$10$yRdRXBr03bcup6AwKsg/aent0BAiVo4voQRngKcwOHvW1yyfAycuC','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('84185','21043615064','Nathalia','nathalia@espinoza.org','$2y$10$.JWJRjbIAw6Rv1hlU3ftgu5ZBwy3UMP8NLd8YXRpqhXfnNWGNhyKa','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('84533','53793017733','Gabrielle','gabrielle@quintana.com','$2y$10$XEm0.E0K.D5FSw1ZYFW74eOJzAHMGM4xEk.LEskP7TZyrb1NOfKUq','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('84740','19239262998','Katherine','katherine@terra.com.br','$2y$10$IBaEBRsKUj/GaFB4fnOnneOtK/gQJT01kiNXZOGYemRqed.l8Y1i2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('85020','36043864144','Sheila','sheila@maldonado.net.br','$2y$10$kF7rAbX9jKpV3Ik57E9ftuAaq.zy42f2VzUnPqGJjFNjD.s2VBXnS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('85277','24613945835','Andrea','andrea@azevedo.com','$2y$10$b.9jJoHrrGU/GnbHLi/xX.HfrHJ/c5/WfeAoYXG5qQNXxtVZdrly.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('85901','93958730056','Isabel','isabel@lourenco.br','$2y$10$7fxJxmzPHMfglau.7LIhbO8TnPmvuMy6EZFrQlbx9KNp6zOrDKi5G','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('85976','13691935551','Marcos','marcos@martines.com.br','$2y$10$ol/.ijgDSXPepMdK2H/Br.z4uU056OFOnQmvsZiZsG4A.TRiE9Pwi','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('86216','84280969592','Kleber','kleber@saraiva.net.br','$2y$10$J1SQeN3LW9O/KD9U9iMZDuzjIMXdDpgvbK4CHwS5KrnqaP8TR8VVm','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('86281','43435052685','Andre','andre@hotmail.com','$2y$10$JD93vr9/TMMtcemkOMROPOQRDnhPZonub4jRXeh7jAfK0hA0MIMWy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('89005','10425264791','Luisa','luisa@ig.com.br','$2y$10$uH028sjfeWPRQwEq0ULS5.HXdIMPTlIujtZqUjaROW1sW7alF7./2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('89021','41832803723','Vitoria','vitoria@yahoo.com','$2y$10$K/hryh41w1wNPmPB2mx4Z.lxU13kITgK14sYIdyqHlNqa7T9h1YvK','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('90331','72691889521','Isabel','isabel@neves.com','$2y$10$u4FlEOw5m1XGvcflT5hSzuC56O4ZZn2y9QrMo3eYGFbda.Bc9sEk2','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('90448','75367655495','Noemi','noemi@uol.com.br','$2y$10$HADJYs2pmV3KzGU9/Mu7nu7PltGZCj1TEs7C.j2A5mfKaB6A6u6F2','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('91302','82864253112','Inacio','inacio@r7.com','$2y$10$hLp0Ci.QsBzGi/ifMjytVeTkvVbV2yGKmULsNkpOJVY.yp4iSfJA6','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('92367','70179897686','Isis','isis@hotmail.com','$2y$10$IqeqZB1jUvboXRv8DqACveU3Qci.WoDqdZF0/GqWcUNSd6M0PmJZO','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('92617','93367899328','Poliana','poliana@verdugo.com','$2y$10$G4RGIJCOaZ1ZfXCW37JlXeHWtRuWnJhnSb2MUnPk1Em.COxQS3wUq','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('93214','39136008806','Maiara','maiara@rocha.net.br','$2y$10$VWaO2uL5qIYwiOx4TGC.6O6N4vtUJ/MDWDisISoq8CnSvT878Sat2','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('94132','79798116841','Isis','isis@pacheco.com.br','$2y$10$7ZRJSnVEfcvQ5.LykYLJ9uIqk4HeSgcKAitwmX8dgqWq6aRceQ0fy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('94136','89801464560','Joao','joao@duarte.br','$2y$10$8sgjw.rsHjCz3jf6kFp0mu3MRGSkpW.t132WcQSztSCBIoTJAFRmO','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('95003','28729420291','Renan','renan@terra.com.br','$2y$10$6jeJ5V.tcplc1c64qx8rC.OQ5hgrXeDxyxpscJvEVYJthWabUp9tW','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('95119','90326253406','Manoela','manoela@uol.com.br','$2y$10$TpLp2i1y2Uz88ChbAH6YEe53TVlBmxWHjHT/6mEqJbXsRg6Awlf4.','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('95611','58962638021','Tainara','tainara@benites.net','$2y$10$LtOUiKDIlq11.LtNJEN41OHxx4pNEgT1FmOmpSRPG2An5Qud6NWR6','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('95810','36555497080','Poliana','poliana@ig.com.br','$2y$10$KN7.U7gQwThCfLCx5MvQfuofkdXgD1GY6wuUdLb/c9FmIjxM19vDy','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('96067','66092402244','Cleber','cleber@vale.com','$2y$10$jfPk9qqa.aAC8/6OczgmX.TlFMKSIu0Xjq3lHycW3Z4pO9x6p.lmq','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('96329','60876282220','Roberto','roberto@hotmail.com','$2y$10$vu0L4t4LPOmoGMb7aasGt.Dmgyv2AbRNrv2VvhScRsj4Cn7mKNQAW','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('96345','39740779832','Tamara','tamara@ig.com.br','$2y$10$ddzpEZnCPMi1FBPZcbnJeumhs8B97xlWPDIeGCFxKKTUmU6qV9XOS','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('96515','41171014787','Josue','josue@uol.com.br','$2y$10$iKoXlQw6938NmWocvImjUu2OEClBri4aG0XyP8RpDVWaBGaCRWq5q','0');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('97061','27400738582','Luna','luna@hotmail.com','$2y$10$lD555/jafKgG7IcYrIyeUee4fjSdduKwh/rvSuhWL6Wlo8BjDc2Ku','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('97368','14544201195','Jonas','jonas@zamana.com.br','$2y$10$2wp5DHM9mUz9gkAQX7MdKezwTwcgqQWKlljz4eGeOrO//XcEg6E2a','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('97960','43335513095','Kesia','kesia@r7.com','$2y$10$Oepa6vbpOUSztSXRXNmIoueDZV43DgqD0.DyiFWpZmSTpyb.VAfQi','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('98119','13135884167','Bruno','bruno@terra.com.br','$2y$10$g6ybqMtEY2ClPvw7DYm3XeeoiXu7m3Sd2foYEVdQlrnAZbGWXgzmm','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('98214','83816887386','Maya','maya@uol.com.br','$2y$10$M1.ss0w.Gb01tfqqeVIb6uTRof5ZzaramiQgAA9NxCqvrZKWeOM0W','1');

INSERT INTO funcionario (matricula, cpf, nome, email, password, is_admin) VALUES ('98834','19872880167','Elias','elias@quintana.br','$2y$10$w8sbnd2bI44PLPnwSPG/xuMp57h.DwQMJl8S8fY2eRcU9jMobc75S','0');


CREATE TABLE `linha` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `direta` tinyint(1) NOT NULL,
  `total_vagas` int NOT NULL,
  `dias_semana` varchar(14) NOT NULL,
  `hora_partida` time NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb3;


INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('2','0','60','2','08:04:17');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('3','1','60','3','09:05:37');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('4','0','60','2','10:18:37');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('5','1','60','6','21:45:35');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('6','0','60','3','07:31:02');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('7','0','60','3','16:55:48');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('8','1','60','3','02:57:59');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('9','1','60','3','21:33:04');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('10','0','60','0','05:55:43');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('11','1','60','2','03:59:04');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('12','0','60','2','14:24:45');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('13','0','60','6','07:36:33');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('14','0','60','4','19:41:16');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('15','1','2','1','11:18:29');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('16','1','60','5','10:25:56');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('17','0','60','2','02:57:20');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('18','0','60','3','13:10:33');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('19','0','60','0','23:24:19');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('20','0','60','5','10:53:52');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('21','1','60','6','21:35:36');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('22','0','60','5','04:05:40');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('23','1','60','4','16:35:08');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('24','1','60','2','00:20:01');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('25','0','60','6','22:07:57');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('26','1','60','3','11:21:05');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('27','1','60','1','08:55:09');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('28','0','60','1;2;3;4;5','22:49:00');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('29','0','60','2','07:09:32');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('30','0','60','6','05:00:38');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('31','0','60','6','05:52:15');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('32','1','60','6','07:55:15');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('34','1','60','0','11:22:37');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('35','0','60','1','17:16:16');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('36','1','60','3','03:44:59');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('37','0','60','5','13:14:28');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('38','1','60','1','17:21:26');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('39','1','60','0','08:12:16');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('40','1','60','4','06:36:51');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('41','1','60','5','01:14:36');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('42','1','60','3','15:42:30');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('43','0','60','2','02:21:36');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('44','1','60','0','05:10:35');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('45','0','60','0','10:42:07');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('46','0','60','2','16:37:06');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('47','1','60','0','05:45:51');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('48','0','60','0','20:20:41');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('49','0','60','2','10:54:19');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('50','1','60','2','21:48:06');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('51','0','60','5','05:19:28');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('52','0','60','4','07:31:04');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('53','1','60','0','06:44:31');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('54','1','60','2','18:35:49');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('55','0','60','5','05:26:16');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('56','0','60','1','22:13:12');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('57','0','60','6','09:18:17');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('58','1','60','3','15:33:50');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('59','0','60','3','22:37:19');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('60','1','60','5','23:36:26');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('61','0','60','5','17:24:59');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('62','0','60','5','01:23:08');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('63','0','60','2','02:23:56');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('64','1','60','4','16:56:31');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('65','1','60','5','22:12:16');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('66','1','60','6','18:55:32');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('67','1','60','2','04:34:34');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('68','0','60','3','18:07:30');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('69','0','60','4','13:08:43');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('70','0','60','3','15:17:54');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('71','1','60','6','12:35:39');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('72','0','60','2','21:04:20');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('73','0','60','3','11:13:00');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('74','1','60','1','15:35:30');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('75','1','60','2','16:55:14');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('76','0','60','2','16:29:03');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('77','1','60','3','21:50:01');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('78','0','60','4','19:24:11');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('79','0','60','6','06:29:47');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('80','0','60','1','22:33:56');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('81','0','60','5','15:33:01');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('82','1','60','4','23:24:10');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('83','0','60','0','17:56:30');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('84','0','60','6','08:50:35');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('85','0','60','5','03:35:12');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('86','0','60','2','01:11:13');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('87','1','60','4','14:48:46');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('88','0','60','3','03:18:08');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('89','0','60','4','04:22:52');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('90','0','60','3','05:40:23');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('91','0','60','1','03:57:45');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('92','0','60','1','02:23:42');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('93','0','60','2','09:58:05');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('94','0','60','5','02:54:20');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('95','0','60','1','18:21:42');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('96','1','60','0','10:12:08');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('97','0','60','5','05:54:58');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('98','0','60','0','08:18:47');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('99','1','60','1','12:02:51');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('100','1','60','5','17:51:30');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('101','0','20','1;2;3','19:30:00');

INSERT INTO linha (codigo, direta, total_vagas, dias_semana, hora_partida) VALUES ('102','0','40','1;2','18:30:00');


CREATE TABLE `logs` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `cpf_usuario` varchar(11) NOT NULL,
  `tipo_usuario` char(1) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `data_hora` datetime NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;


INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('1','47859161843','C','Cliente 47859161843 entrou no site','2021-12-07 22:31:11');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('2','10467091609','C','Cliente 10467091609 entrou no site','2021-12-08 00:00:49');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('3','12345678910','C','Cliente 12345678910 entrou no site','2021-12-08 00:11:33');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('4','10467091609','C','Cliente 10467091609 entrou no site','2021-12-08 10:26:28');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('5','36445383630','A','Editou o funcionário 42153169001','2021-12-08 15:25:27');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('6','36445383630','A','Adicionou a linha 101','2021-12-08 15:31:45');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('7','36445383630','A','Editou a linha 28','2021-12-08 16:21:41');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('8','36445383630','A','Editou o funcionário 52479427089','2021-12-08 16:25:15');

INSERT INTO logs (codigo, cpf_usuario, tipo_usuario, descricao, data_hora) VALUES ('9','36445383630','A','Adicionou a linha 102','2021-12-08 16:28:39');


CREATE TABLE `pagamento` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `codigo_passagem` int DEFAULT NULL,
  `realizado` tinyint(1) NOT NULL,
  `forma_pagamento` int NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopassagem_pagamento` (`codigo_passagem`),
  CONSTRAINT `fk_codigopassagem_pagamento` FOREIGN KEY (`codigo_passagem`) REFERENCES `passagem` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;


INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('1','1','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('2','2','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('3','3','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('4','4','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('5','5','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('6','6','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('7','7','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('8','8','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('9','9','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('14','14','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('15','15','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('16','16','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('17','17','1','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('18','18','0','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('19','19','0','1');

INSERT INTO pagamento (codigo, codigo_passagem, realizado, forma_pagamento) VALUES ('20','20','0','1');


CREATE TABLE `pagamento_boleto` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `codigo_barras` varchar(48) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_boleto` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_boleto` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



CREATE TABLE `pagamento_pix` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `pix_pagador` varchar(30) NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_pix` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_pix` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;



CREATE TABLE `pagamento_cartao` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `numero_cartao` varchar(16) NOT NULL,
  `parcelas_pagas` int NOT NULL,
  `total_parcelas` int NOT NULL,
  `nome_titular` varchar(60) NOT NULL,
  `data_validade` varchar(5) NOT NULL,
  `ccv` int NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_cartao` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_cartao` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;


INSERT INTO pagamento_cartao (codigo, numero_cartao, parcelas_pagas, total_parcelas, nome_titular, data_validade, ccv, codigo_pagamento) VALUES ('1','2342442434243424','0','1','Billy Batson','12/12','121','18');

INSERT INTO pagamento_cartao (codigo, numero_cartao, parcelas_pagas, total_parcelas, nome_titular, data_validade, ccv, codigo_pagamento) VALUES ('2','111122223333','0','6','Aline Dos Santos','11/21','111','19');

INSERT INTO pagamento_cartao (codigo, numero_cartao, parcelas_pagas, total_parcelas, nome_titular, data_validade, ccv, codigo_pagamento) VALUES ('3','1111222233334444','0','6','Guilherme Nobre','01/22','123','20');


CREATE TABLE `pagamento_dinheiro` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `dinheiro_recebido` float NOT NULL,
  `codigo_pagamento` int DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigopagamento_dinheiro` (`codigo_pagamento`),
  CONSTRAINT `fk_codigopagamento_dinheiro` FOREIGN KEY (`codigo_pagamento`) REFERENCES `pagamento` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;


INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('1','400','1');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('2','450','2');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('3','229.19','3');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('4','300','4');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('5','500','5');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('6','50','6');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('7','60','7');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('8','500','8');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('9','50','9');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('14','400','14');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('15','350','15');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('16','450','16');

INSERT INTO pagamento_dinheiro (codigo, dinheiro_recebido, codigo_pagamento) VALUES ('17','450','17');


CREATE TABLE `passagem` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `num_assento` int DEFAULT NULL,
  `codigo_linha` int NOT NULL,
  `cidade_partida` varchar(30) NOT NULL,
  `cidade_chegada` varchar(30) NOT NULL,
  `cpf_cliente` varchar(11) DEFAULT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `fk_codigolinha_passagem` (`codigo_linha`),
  CONSTRAINT `fk_codigolinha_passagem` FOREIGN KEY (`codigo_linha`) REFERENCES `linha` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;


INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('1','1','15','Vila Lucas','Santa Aline do Sul','12312312312','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('2','2','15','Vila Lucas','Santa Aline do Sul','23423423424','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('3','1','27','Bonilha d'Oeste','Vila Michele','12313132312','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('4','2','27','Bonilha d'Oeste','Vila Michele','12312331233','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('5','3','27','Bonilha d'Oeste','Vila Michele','12313313231','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('6','1','2','Santa Antonieta do Sul','Antônio do Norte','34234324243','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('7','2','2','Santa Antonieta do Sul','Antônio do Norte','23123133132','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('8','4','27','Bonilha d'Oeste','Vila Michele','12313313132','2021-12-06 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('9','3','2','Santa Antonieta do Sul','Antônio do Norte','45345355354','2021-12-07 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('10','4','2','Santa Antonieta do Sul','Antônio do Norte','34234424342','2021-12-07 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('14','1','15','Vila Lucas','Santa Aline do Sul','21312313231','2021-12-13 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('15','2','15','Vila Lucas','Santa Aline do Sul','12312312313','2021-12-13 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('16','1','15','Vila Lucas','Santa Aline do Sul','21313231233','2021-12-20 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('17','2','15','Vila Lucas','Santa Aline do Sul','12312313231','2021-12-20 00:00:00');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('18','1','2','Porto Mia','Estêvão do Norte','47859161843','2021-12-07 22:35:48');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('19','1','3','Márcia d'Oeste','Gael do Norte','10467091609','2021-12-08 11:15:32');

INSERT INTO passagem (codigo, num_assento, codigo_linha, cidade_partida, cidade_chegada, cpf_cliente, data) VALUES ('20','1','3','Márcia d'Oeste','Gael do Norte','10467091609','2021-12-08 13:36:16');


CREATE TABLE `trecho` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `cidade_partida` varchar(30) NOT NULL,
  `cidade_chegada` varchar(30) NOT NULL,
  `duracao` time NOT NULL,
  `preco` float NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=384 DEFAULT CHARSET=utf8mb3;


INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('1','Santa Wilson do Sul','Santa Elis do Leste','07:14:50','38.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('2','Porto Francisco do Sul','Porto Raphael','21:34:54','117.26');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('3','Santa Edson','Violeta do Sul','13:36:10','99.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('4','Fernandes do Sul','Andréa do Norte','05:20:33','156.23');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('5','Deverso d'Oeste','Cristina do Sul','00:44:05','71');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('6','Vieira do Sul','São Diego do Norte','06:28:37','174.52');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('7','Teobaldo do Norte','Catarina d'Oeste','05:01:13','122.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('8','Valdez do Leste','São Emanuelly','09:30:53','83.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('9','São Eloah','Rangel do Norte','15:48:29','96.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('10','Nelson do Sul','Vila Eva','02:34:42','174.38');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('11','Santa Olga','Rodrigues d'Oeste','09:02:36','4.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('12','Santa Andressa do Sul','Medina do Leste','07:02:23','9.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('13','Porto Inácio do Sul','das Dores d'Oeste','23:44:06','114.4');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('14','Vila Lucio','São Sergio','16:45:41','42.82');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('15','Leal do Leste','Sales do Sul','05:28:01','66.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('16','Porto Christian do Leste','Velasques do Sul','11:48:26','61.7');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('17','Porto Raphael do Sul','Vila Sarah do Leste','02:12:46','136.38');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('18','Leal do Sul','Vila Mary','05:09:55','183.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('19','Santa Mirella','Porto Daniel','20:30:48','27.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('20','Tábata do Leste','Carla do Sul','16:22:54','56.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('21','Delvalle do Norte','Rico d'Oeste','11:55:59','44.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('22','Vila Erik do Sul','Porto Renato','00:31:08','123.31');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('23','Santa Iasmin','São Andres','18:33:37','153.08');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('24','Bittencourt do Norte','Porto Miriam d'Oeste','09:04:21','172.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('25','Ornela d'Oeste','Porto Franciele','14:34:26','147.74');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('26','São Cléber do Sul','Guerra d'Oeste','23:21:33','153.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('27','Santa Miriam','São Fabrício do Leste','08:37:37','58.06');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('28','Gomes do Sul','Porto Vinícius do Leste','20:42:14','27.83');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('29','Angélica do Norte','Rico do Sul','20:26:03','150.7');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('30','Vasques do Leste','São Bruna','10:38:25','179.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('31','Vinícius do Norte','Santos do Sul','01:31:00','194.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('32','Carla d'Oeste','Vila Graziela','01:59:34','167.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('33','São Olga','Porto Moisés','23:29:08','60.53');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('34','São Ohana','Bonilha d'Oeste','01:36:58','142.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('35','Isaac do Leste','Martines d'Oeste','05:29:55','45.02');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('36','Santa James do Sul','São Franco','22:39:15','56.14');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('37','Santa Noelí do Norte','Santa Maurício do Sul','19:48:37','125.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('38','Santa Jean do Sul','Quintana do Norte','23:49:55','134.44');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('39','Christopher do Norte','São Sergio','03:18:33','30.39');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('40','Matias do Norte','São Luana do Sul','20:37:28','130.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('41','Padilha do Leste','Wagner do Norte','19:29:02','99.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('42','Valente do Leste','Vila Guilherme do Norte','02:17:23','78.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('43','Franciele do Sul','Cortês d'Oeste','02:34:50','107.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('44','Porto Mariana','Fonseca do Norte','12:38:38','68.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('45','Beltrão do Sul','Porto Emanuelly','15:58:33','198.12');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('46','Leon do Norte','Santa Natan d'Oeste','05:25:28','195.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('47','Vila David do Leste','Juliano do Norte','03:39:19','79.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('48','Santa Raysa do Norte','Porto Marco do Sul','19:42:07','52.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('49','da Cruz d'Oeste','Tomás do Leste','05:38:55','65.56');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('50','São Inácio do Sul','Santa Teobaldo do Sul','16:17:19','143.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('51','Valente do Norte','Ferreira d'Oeste','02:02:47','110.25');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('52','Porto Yasmin','Vila Caroline','03:35:57','108.42');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('53','Horácio do Leste','Mendes do Sul','16:49:35','129.04');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('54','Porto Natan','São Kauan','04:52:56','140.13');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('55','Azevedo d'Oeste','Michael d'Oeste','22:33:27','173.37');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('56','São Murilo','Santa Sergio do Sul','19:19:20','125.69');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('57','Galhardo do Norte','Santa Catarina','19:23:10','190.64');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('58','Leo do Sul','Vila Paloma do Leste','18:49:10','155.67');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('59','Pâmela d'Oeste','Jimenes do Sul','19:53:36','55.19');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('60','Vila Sophia do Sul','Enzo do Leste','10:54:08','150.55');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('61','Vila Kelly','Santa Wellington d'Oeste','03:25:04','82.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('62','Chaves do Sul','São Noemi d'Oeste','21:03:14','46.77');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('63','Porto Kevin','Eduarda do Sul','10:41:58','64.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('64','Estela do Leste','São Bella','23:04:23','196.45');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('65','Porto Mia','Santa Antonieta do Sul','21:17:22','84.4');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('66','Porto Eloá','Porto Luciano do Leste','23:48:28','163.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('67','Santa Késia d'Oeste','Prado d'Oeste','05:42:27','186.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('68','Natan do Norte','Wagner do Leste','08:21:57','37.42');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('69','Luara do Sul','Valdez d'Oeste','18:15:55','31.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('70','Raissa d'Oeste','Mateus do Leste','17:22:44','151.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('71','Rayane do Norte','Colaço do Norte','19:31:03','50.07');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('72','Porto Joaquin','Santa Liz d'Oeste','10:07:57','166.7');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('73','de Arruda do Sul','Rivera do Leste','07:47:38','142.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('74','São Richard','Rangel d'Oeste','09:46:07','34.08');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('75','Escobar d'Oeste','São Carla d'Oeste','02:52:06','63.15');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('76','Faria do Sul','Benício d'Oeste','22:22:32','164.65');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('77','Vila Alonso do Sul','Porto Luis','15:14:56','19.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('78','Benício do Leste','Paz do Leste','05:23:47','13.38');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('79','Santa Wellington do Norte','Bernardo do Norte','23:58:08','162.01');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('80','Vila Lucas','São Henrique do Norte','23:57:13','75.7');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('81','Jorge do Sul','Uchoa d'Oeste','01:53:18','178.28');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('82','Edson do Sul','Santa Théo d'Oeste','13:01:49','113.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('83','Santa Samanta','Vila Ronaldo','04:31:43','128.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('84','Marin d'Oeste','Santa Vicente','01:49:29','44.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('85','Porto Mirella','Vila João d'Oeste','02:05:52','72.69');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('86','Santa Kauan','São Laiane do Leste','22:35:07','31.73');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('87','Vila Verônica','Cristina d'Oeste','21:19:28','49.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('88','Valência do Sul','Urias d'Oeste','19:12:29','185.36');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('89','Padrão do Norte','Vila Sarah','18:19:09','171.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('90','Porto Raphael do Leste','Neves do Sul','17:54:52','157.13');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('91','São Rayane','São Kelly d'Oeste','00:31:05','85.42');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('92','Queirós do Leste','Maldonado d'Oeste','17:26:27','76.26');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('93','Queirós d'Oeste','Ivana d'Oeste','13:44:23','143.6');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('94','Juan do Leste','Alves do Leste','14:53:53','119.12');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('95','Gil do Sul','Santa Renata','07:28:55','180.46');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('96','Porto George do Leste','Faria d'Oeste','03:19:49','115.07');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('97','Saraiva do Norte','Oliveira do Norte','21:42:49','101.55');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('98','Vila Nicolas do Norte','Santa Mateus','05:49:55','57.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('99','Santa Otávio','Porto Deivid','00:23:25','54.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('100','Raphael do Sul','Pena do Sul','18:52:02','98.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('101','São Renato do Sul','Urias do Norte','05:09:03','51.34');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('102','Otávio do Leste','Vila Juliano do Sul','06:51:09','171.64');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('103','São Carlos','Vila Adriel','13:33:46','54.53');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('104','Vila Marília','Vila Lucas do Sul','14:40:55','70.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('105','Richard d'Oeste','Bernardo d'Oeste','10:43:26','24.28');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('106','Santa Laís','Ferraz d'Oeste','15:19:31','106.05');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('107','Santa Laura','Feliciano d'Oeste','19:15:21','148.46');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('108','Marés d'Oeste','Neves d'Oeste','17:35:31','144.63');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('109','Vila Mateus d'Oeste','Uchoa do Sul','23:25:32','186.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('110','Porto Everton','Roberto do Sul','23:33:34','125.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('111','São Emanuelly','Zamana do Sul','11:38:58','120.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('112','Zamana do Sul','Tamoio d'Oeste','16:07:04','39.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('113','Tamoio d'Oeste','Santa Nelson','13:40:45','170.84');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('114','São Henrique do Norte','Porto Eloah','19:22:31','161.43');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('115','Porto Eloah','Thomas do Leste','16:42:09','97.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('116','Thomas do Leste','Esteves do Norte','13:33:13','134.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('117','Sales do Sul','Estela do Leste','09:37:38','25.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('118','Estela do Leste','Santa Natal do Leste','03:33:44','31.48');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('119','Santa Natal do Leste','Porto Deivid do Sul','22:21:34','2.82');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('120','Rangel d'Oeste','Neves do Leste','23:10:44','55.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('121','Neves do Leste','São Gabi do Sul','04:07:04','91.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('122','São Gabi do Sul','Garcia d'Oeste','05:12:49','37.15');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('123','Faria d'Oeste','São Cauan','07:06:08','41.55');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('124','São Cauan','Torres do Sul','05:32:49','38.75');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('125','Torres do Sul','Ferreira do Sul','18:34:13','123.79');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('126','São Sergio','Danielle do Norte','17:49:13','164');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('127','Danielle do Norte','Lira do Leste','17:32:21','76.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('128','Lira do Leste','Jorge d'Oeste','17:25:06','114.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('129','Thomas do Leste','Eliane do Leste','18:27:20','68.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('130','Eliane do Leste','D'ávila do Norte','01:45:51','50.64');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('131','D'ávila do Norte','Santa Gabi','19:08:51','94.29');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('132','Vila Graziela','São Everton do Norte','13:15:38','41.03');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('133','São Everton do Norte','Aragão d'Oeste','11:50:18','37.42');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('134','Aragão d'Oeste','Meireles do Sul','21:54:45','149.36');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('135','Bernardo do Norte','Santa Miguel d'Oeste','23:02:48','136.73');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('136','Santa Miguel d'Oeste','Jasmin d'Oeste','13:31:44','14.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('137','Jasmin d'Oeste','Leon do Leste','08:23:58','109.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('138','Vila Sarah','Santa Alícia','01:15:28','199.71');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('139','Santa Alícia','São Joaquin do Sul','12:19:09','155.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('140','São Joaquin do Sul','São Cláudio d'Oeste','18:55:57','29.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('141','Valdez d'Oeste','Saito do Norte','07:46:54','197.23');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('142','Saito do Norte','Montenegro do Leste','22:11:53','118.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('143','Montenegro do Leste','Zamana do Leste','22:40:16','175.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('144','Benício d'Oeste','Vila Victor','02:29:31','82.81');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('145','Vila Victor','Santa Beatriz','14:33:51','100.37');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('146','Santa Beatriz','Vieira do Leste','18:37:27','64.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('147','Roberto do Sul','São Adriele','19:22:57','42.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('148','São Adriele','Arruda do Sul','23:37:57','144.65');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('149','Arruda do Sul','Valentin do Norte','04:03:42','117.52');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('150','Santos do Sul','Talita do Leste','10:15:22','22.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('151','Talita do Leste','Santa Nero','19:00:01','116.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('152','Santa Nero','Milena do Sul','11:06:08','151.77');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('153','Rico do Sul','Joaquim do Norte','11:54:34','100.83');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('154','Joaquim do Norte','Porto Adriano do Sul','11:28:16','136.36');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('155','Porto Adriano do Sul','Verdugo do Leste','04:27:47','146.79');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('156','São Andres','Branco d'Oeste','06:58:55','70.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('157','Branco d'Oeste','Santa Tâmara','22:38:23','49.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('158','Santa Tâmara','Santa Reinaldo do Leste','16:49:21','32.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('159','Zamana do Leste','Luísa do Sul','23:22:53','105.52');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('160','Luísa do Sul','Santa Jaqueline','00:07:29','121.07');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('161','Santa Jaqueline','Santa Théo','04:28:26','139.24');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('162','Uchoa do Sul','Santa Alícia d'Oeste','11:59:52','94.97');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('163','Santa Alícia d'Oeste','Vila Kauan do Norte','06:32:42','138.14');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('164','Vila Kauan do Norte','Porto Ian do Leste','17:10:12','170.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('165','Vila Graziela','Toledo do Sul','15:35:07','158.53');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('166','Toledo do Sul','Quintana do Leste','09:47:49','121.79');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('167','Quintana do Leste','São Gustavo','01:25:54','31.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('168','Fonseca do Norte','São Jefferson','06:30:04','22.52');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('169','São Jefferson','Sebastião do Sul','07:40:10','37.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('170','Sebastião do Sul','Santa Daniel','14:02:51','170.57');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('171','Santa Sergio do Sul','Cecília do Norte','16:23:13','34.29');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('172','Cecília do Norte','Vila Maria d'Oeste','08:43:25','87.88');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('173','Vila Maria d'Oeste','São Heitor d'Oeste','03:20:14','39.22');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('174','Rico d'Oeste','Maia do Norte','09:26:00','176.16');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('175','Maia do Norte','Vila Miguel do Norte','22:14:39','167.64');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('176','Vila Miguel do Norte','Santa Cristina do Sul','10:26:44','59.97');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('177','Pena do Sul','Vila Cláudio do Norte','12:31:13','156.3');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('178','Vila Cláudio do Norte','Vanessa do Leste','05:28:29','185.97');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('179','Vanessa do Leste','Vila Maurício','11:49:11','92.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('180','Santa Renata','Poliana do Norte','23:25:00','138.5');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('181','Poliana do Norte','Estrada d'Oeste','07:52:40','170.38');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('182','Estrada d'Oeste','Mendes do Leste','18:33:50','171.04');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('183','Santa Teobaldo do Sul','Santa Cauan do Sul','00:07:13','0.99');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('184','Santa Cauan do Sul','Vila Júlia','23:08:59','5.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('185','Vila Júlia','Eduarda do Leste','03:36:55','77.79');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('186','São Kauan','Vila Maurício do Sul','03:41:48','94.41');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('187','Vila Maurício do Sul','Porto Manuel','00:38:11','187.45');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('188','Porto Manuel','Luana do Norte','22:18:18','75.09');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('189','Montenegro do Leste','Faria do Sul','09:32:41','62.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('190','Faria do Sul','Vila Nero do Sul','12:38:26','14.41');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('191','Vila Nero do Sul','Zaragoça do Leste','15:04:30','99.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('192','Porto Raphael','Cristóvão do Sul','08:08:53','123.29');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('193','Cristóvão do Sul','Francisco do Leste','04:41:50','184.66');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('194','Francisco do Leste','São Pâmela do Norte','11:22:50','160.88');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('195','Urias do Norte','Márcia d'Oeste','10:13:29','63.83');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('196','Márcia d'Oeste','Heitor do Leste','10:44:45','189.19');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('197','Heitor do Leste','Porto Matias do Sul','01:45:43','164.64');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('198','São Gabi do Sul','Duarte d'Oeste','08:24:48','35.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('199','Duarte d'Oeste','São Mateus do Leste','12:08:53','65.84');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('200','São Mateus do Leste','Vila Reinaldo','12:09:28','194.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('201','Porto Raphael','Santa Agatha d'Oeste','07:50:01','159.12');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('202','Santa Agatha d'Oeste','Vila Lívia','09:36:48','97.07');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('203','Vila Lívia','Porto Natan do Norte','03:01:57','131.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('204','Violeta do Sul','São Augusto','20:38:13','98.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('205','São Augusto','Vila Isadora do Norte','12:46:56','119.46');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('206','Vila Isadora do Norte','Vila Máximo do Sul','04:24:08','143.12');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('207','Vila Sarah do Leste','Porto Cléber','03:59:50','109.93');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('208','Porto Cléber','Liz do Leste','15:13:29','177.24');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('209','Liz do Leste','Vila Letícia','22:40:15','66.01');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('210','São Jefferson','São Téo','16:13:28','96.67');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('211','São Téo','Delgado do Sul','11:43:20','99.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('212','Delgado do Sul','Dias do Sul','18:02:38','6.41');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('213','Danielle do Norte','Jennifer do Norte','10:31:23','39.48');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('214','Jennifer do Norte','Espinoza do Norte','04:37:01','96.35');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('215','Espinoza do Norte','Santa Marcos do Sul','00:14:23','160.86');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('216','Santa Reinaldo do Leste','Vila Denis do Sul','21:24:38','177.27');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('217','Vila Denis do Sul','São Eloá do Sul','03:44:19','15.53');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('218','São Eloá do Sul','Camilo do Norte','07:08:21','19.77');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('219','São Franco','Samara d'Oeste','04:12:11','66.82');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('220','Samara d'Oeste','Santana do Leste','17:58:22','193.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('221','Santana do Leste','Porto Everton','10:25:50','37.89');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('222','Rico do Sul','Flores do Norte','08:02:05','199.36');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('223','Flores do Norte','Porto Sônia do Sul','01:30:05','198.08');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('224','Porto Sônia do Sul','Vila André d'Oeste','00:23:23','2.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('225','Medina do Leste','de Souza do Norte','21:48:20','135.21');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('226','de Souza do Norte','Santa Angélica do Norte','14:25:04','141.42');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('227','Santa Angélica do Norte','Robson do Leste','21:51:55','36.88');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('228','Santa Natan d'Oeste','Manoela do Sul','01:00:32','79.88');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('229','Manoela do Sul','Santa Isabel d'Oeste','18:53:49','125.41');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('230','Santa Isabel d'Oeste','Matias do Sul','06:19:48','103.63');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('231','Camilo do Norte','Thalia do Sul','21:55:29','24.14');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('232','Thalia do Sul','Porto Deivid','20:39:34','49.85');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('233','Porto Deivid','Vila Danilo','06:40:18','134.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('234','Urias do Norte','Stephany do Norte','23:05:01','192.24');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('235','Stephany do Norte','Vila Eunice','17:01:18','26.19');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('236','Vila Eunice','Porto Liz','22:05:54','95.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('237','Santa Antonieta do Sul','Antônio do Norte','22:40:53','41.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('238','Antônio do Norte','Vila Mateus','10:27:50','122.69');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('239','Vila Mateus','Estêvão do Norte','04:23:14','2.13');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('240','Heitor do Leste','Assunção d'Oeste','17:29:23','150.53');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('241','Assunção d'Oeste','São Tessália do Norte','02:00:18','184.95');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('242','São Tessália do Norte','Gael do Norte','07:34:37','82.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('243','São Pâmela do Norte','São Luciano d'Oeste','16:37:35','43.9');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('244','São Luciano d'Oeste','São Raphael do Leste','03:04:33','104.44');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('245','São Raphael do Leste','Vila Rodolfo d'Oeste','13:23:13','166.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('246','Porto Luis','Aranda d'Oeste','02:04:15','75.73');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('247','Aranda d'Oeste','Vila Marcos','23:18:50','110.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('248','Vila Marcos','Porto Evandro do Norte','17:08:47','186.92');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('249','Vila Miguel do Norte','São Wilson do Norte','15:42:17','21.7');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('250','São Wilson do Norte','Santa Irene do Leste','23:02:30','123.57');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('251','Santa Irene do Leste','William d'Oeste','12:17:28','88.48');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('252','Bonilha d'Oeste','Paloma d'Oeste','10:12:05','184.63');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('253','Paloma d'Oeste','Montenegro do Leste','15:49:11','3.67');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('254','Montenegro do Leste','Azevedo do Leste','09:08:39','74.77');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('255','Fonseca do Norte','Rivera do Sul','22:33:01','5.06');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('256','Rivera do Sul','Ferraz do Leste','17:21:26','117.18');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('257','Ferraz do Leste','Porto Emília do Leste','12:51:53','107.45');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('258','Porto Renato','Zaragoça do Sul','21:23:39','111.79');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('259','Zaragoça do Sul','Velasques do Norte','14:56:51','74.24');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('260','Velasques do Norte','Porto Fábio','17:01:05','156.77');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('261','Zamana do Leste','Santa Aline do Leste','15:11:05','51.81');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('262','Santa Aline do Leste','Rodrigues do Leste','09:46:07','51.22');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('263','Rodrigues do Leste','São Heloísa do Norte','10:09:12','89.68');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('264','Enzo do Leste','São Leo','22:53:44','80.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('265','São Leo','Gomes do Leste','14:37:40','1.29');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('266','Gomes do Leste','Arruda do Leste','03:56:47','100.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('267','Santa Théo','São Raysa','08:31:44','172.22');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('268','São Raysa','D'ávila do Sul','05:15:45','88.14');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('269','D'ávila do Sul','Santa Sandra','15:40:49','109.03');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('270','Toledo do Sul','Santa Stefany','13:10:54','66.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('271','Santa Stefany','Santa Fernanda','01:31:29','23.03');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('272','Santa Fernanda','Santa Gabrielly do Leste','14:55:00','165.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('273','D'ávila do Sul','Cruz do Norte','08:10:08','177.15');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('274','Cruz do Norte','Porto Jorge','09:43:11','187.86');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('275','Porto Jorge','Porto Lorena do Sul','12:26:10','197.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('276','São Henrique do Norte','Regiane do Norte','18:41:25','116.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('277','Regiane do Norte','Porto Gabi','14:50:00','146.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('278','Porto Gabi','Santa Aline do Sul','10:49:25','6.67');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('279','Eliane do Leste','Vila Luciana','16:41:56','159.83');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('280','Vila Luciana','Fonseca d'Oeste','03:55:48','91');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('281','Fonseca d'Oeste','Ávila d'Oeste','03:11:20','70.72');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('282','Estêvão do Norte','Porto Gilberto do Leste','09:45:46','37.54');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('283','Porto Gilberto do Leste','Cruz d'Oeste','05:19:01','132.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('284','Cruz d'Oeste','Marin do Norte','17:26:13','68.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('285','Duarte d'Oeste','Pedrosa do Sul','15:47:11','0.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('286','Pedrosa do Sul','Bruna do Leste','09:17:26','67.03');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('287','Bruna do Leste','Santa Kauan do Norte','14:50:46','187.75');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('288','Porto Adriano do Sul','Porto Ricardo','16:15:15','66.63');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('289','Porto Ricardo','Porto Mari','19:53:17','159.06');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('290','Porto Mari','Vila Stefany','01:00:06','150.36');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('291','Vila Ronaldo','Vila Hosana do Sul','09:22:08','42.57');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('292','Vila Hosana do Sul','São Sandra do Norte','10:04:16','49.5');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('293','São Sandra do Norte','Roque d'Oeste','10:53:58','150.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('294','Vila Maurício','Santos do Leste','22:10:28','52.35');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('295','Santos do Leste','Cristiana do Sul','09:24:03','197.13');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('296','Cristiana do Sul','Casanova do Leste','16:09:39','134.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('297','Vila Marcos','Vila Joaquin do Leste','07:27:11','74');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('298','Vila Joaquin do Leste','Salas do Norte','23:16:39','63.4');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('299','Salas do Norte','Vila Rogério','04:12:43','185.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('300','Ávila d'Oeste','Vila Mônica do Sul','03:20:24','151.67');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('301','Vila Mônica do Sul','Santacruz do Norte','23:43:17','16.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('302','Santacruz do Norte','Quintana do Norte','12:38:37','116.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('303','Porto Ian do Leste','Serra do Norte','17:42:54','182.25');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('304','Serra do Norte','Adriano do Leste','23:32:51','112.15');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('305','Adriano do Leste','São Jerônimo d'Oeste','07:42:09','62.81');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('306','Santa Liz d'Oeste','Sales do Leste','08:55:42','46.46');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('307','Sales do Leste','Porto Fátima','16:37:20','170.09');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('308','Porto Fátima','Dayane do Sul','00:26:12','19.66');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('309','Azevedo do Leste','Pedro d'Oeste','08:27:12','128.56');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('310','Pedro d'Oeste','São Rogério do Sul','09:38:00','75.42');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('311','São Rogério do Sul','Hugo do Leste','02:13:29','144.81');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('312','Paloma d'Oeste','Camila do Leste','18:41:15','160.04');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('313','Camila do Leste','Vila Wilson d'Oeste','01:22:51','36.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('314','Vila Wilson d'Oeste','Vila Michele','07:29:15','32.37');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('315','Porto Everton','Vila Betina','00:11:48','13.27');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('316','Vila Betina','Iasmin do Norte','12:16:41','47.83');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('317','Iasmin do Norte','Cristian d'Oeste','20:50:57','65.51');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('318','Zaragoça do Sul','Porto Luzia','18:44:18','149.75');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('319','Porto Luzia','Vila Emanuel d'Oeste','20:42:19','175.9');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('320','Vila Emanuel d'Oeste','Perez do Sul','13:03:41','158.78');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('321','Maldonado d'Oeste','Salazar do Sul','08:49:41','94.77');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('322','Salazar do Sul','Alves do Leste','15:11:52','19.98');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('323','Alves do Leste','São Lúcia do Sul','03:52:00','17.37');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('324','São Laiane do Leste','Leal do Sul','15:57:25','95.57');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('325','Leal do Sul','Rodrigo do Sul','20:40:03','128.75');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('326','Rodrigo do Sul','Emanuel do Leste','17:45:18','25.94');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('327','Torres do Sul','Delgado do Norte','22:40:47','25.76');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('328','Delgado do Norte','São Renato do Leste','00:45:04','186.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('329','São Renato do Leste','Vila Poliana do Norte','13:51:13','21.8');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('330','Heitor do Leste','Gomes do Sul','18:16:40','196.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('331','Gomes do Sul','Porto Isaac','23:15:22','136.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('332','Porto Isaac','Vila Alma','21:10:26','187.12');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('333','Santa Daniel','D'ávila do Sul','17:38:39','9.28');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('334','D'ávila do Sul','Mário do Norte','14:31:08','27.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('335','Mário do Norte','Porto Naiara d'Oeste','03:32:14','190.45');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('336','Rodrigo do Sul','Alessandro do Sul','12:23:52','97.66');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('337','Alessandro do Sul','São Cléber','17:33:57','145.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('338','São Cléber','Vila Danilo','08:06:57','83.22');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('339','Juliano do Norte','Porto Manuel d'Oeste','21:19:49','108.88');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('340','Porto Manuel d'Oeste','São Cezar','06:56:30','13.69');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('341','São Cezar','Correia do Norte','05:22:05','99.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('342','Porto Mari','Neves d'Oeste','00:31:41','167.54');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('343','Neves d'Oeste','Sales do Sul','00:56:05','187.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('344','Sales do Sul','São Diego','03:50:46','71.3');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('345','São Pâmela do Norte','Ricardo do Norte','12:30:55','37.47');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('346','Ricardo do Norte','Vila Manuel','12:27:34','120.04');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('347','Vila Manuel','Neves do Leste','00:52:31','44.03');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('348','Santa Liz d'Oeste','Mateus d'Oeste','09:46:16','35.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('349','Mateus d'Oeste','São Gabrielly d'Oeste','04:46:24','166.97');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('350','São Gabrielly d'Oeste','Vila Talita do Leste','08:18:34','24.75');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('351','Santa Natan d'Oeste','Meireles do Norte','19:07:30','73.49');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('352','Meireles do Norte','Luiz do Leste','05:01:11','1.87');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('353','Luiz do Leste','Daniella d'Oeste','16:45:40','146.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('354','Vila Denis do Sul','São Liz do Leste','14:59:07','142.32');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('355','São Liz do Leste','São Thalita do Sul','15:16:09','138.4');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('356','São Thalita do Sul','Vila Daniela do Sul','04:52:39','30.23');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('357','Vila Adriel','Vila Richard do Norte','05:58:10','117.24');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('358','Vila Richard do Norte','Santa Leo do Leste','20:22:51','198.62');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('359','Santa Leo do Leste','Zaragoça do Norte','06:08:08','158.17');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('360','São Andres','Cortês do Sul','02:30:17','124.84');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('361','Cortês do Sul','Franco do Sul','10:30:28','136.2');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('362','Franco do Sul','Gabrielle d'Oeste','20:33:56','32.79');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('363','Quintana do Norte','Vega do Norte','19:17:11','73.16');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('364','Vega do Norte','Vila Sérgio do Norte','21:52:08','4.02');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('365','Vila Sérgio do Norte','Alcantara do Sul','04:46:23','177.61');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('366','Neves do Leste','Santa Edson do Leste','23:39:44','135.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('367','Santa Edson do Leste','Lia d'Oeste','04:09:25','107.23');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('368','Lia d'Oeste','Pietra do Norte','05:52:12','121.56');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('369','Leal do Sul','Santa Júlio','01:02:47','164.96');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('370','Santa Júlio','Vila Roberto','18:49:48','183.1');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('371','Vila Roberto','Vila Eunice do Norte','10:31:11','94.58');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('372','Porto Franciele','Delvalle do Leste','19:57:51','76.07');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('373','Delvalle do Leste','São Máximo','08:11:33','40.06');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('374','São Máximo','Duarte do Norte','15:59:46','196.19');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('375','Adriano do Leste','Ramires do Norte','14:02:32','181.43');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('376','Ramires do Norte','Santa Jonas d'Oeste','11:41:42','80.67');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('377','Santa Jonas d'Oeste','Vila Afonso do Norte','17:54:40','177.22');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('378','Urias d'Oeste','Fidalgo do Norte','15:33:58','127.99');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('379','Fidalgo do Norte','Valentin do Leste','16:30:24','192.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('380','Valentin do Leste','São Violeta','07:05:11','91.4');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('381','Montenegro do Leste','Santa Graziela do Sul','11:58:30','117.11');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('382','Santa Graziela do Sul','Porto Richard do Norte','11:03:16','118.07');

INSERT INTO trecho (codigo, cidade_partida, cidade_chegada, duracao, preco) VALUES ('383','Porto Richard do Norte','São Stefany do Norte','09:57:40','86.4');


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
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=utf8mb3;


INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('5','2','65','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('6','2','237','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('7','2','238','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('8','2','239','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('9','3','196','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('10','3','240','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('11','3','241','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('12','3','242','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('13','4','194','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('14','4','243','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('15','4','244','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('16','4','245','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('17','5','77','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('18','5','246','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('19','5','247','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('20','5','248','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('21','6','175','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('22','6','249','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('23','6','250','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('24','6','251','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('25','7','34','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('26','7','252','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('27','7','253','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('28','7','254','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('29','8','44','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('30','8','255','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('31','8','256','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('32','8','257','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('33','9','22','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('34','9','258','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('35','9','259','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('36','9','260','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('37','10','143','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('38','10','261','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('39','10','262','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('40','10','263','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('41','11','60','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('42','11','264','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('43','11','265','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('44','11','266','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('45','12','161','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('46','12','267','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('47','12','268','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('48','12','269','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('49','13','165','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('50','13','270','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('51','13','271','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('52','13','272','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('53','14','268','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('54','14','273','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('55','14','274','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('56','14','275','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('57','15','80','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('58','15','276','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('59','15','277','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('60','15','278','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('61','16','129','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('62','16','279','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('63','16','280','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('64','16','281','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('65','17','239','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('66','17','282','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('67','17','283','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('68','17','284','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('69','18','198','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('70','18','285','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('71','18','286','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('72','18','287','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('73','19','154','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('74','19','288','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('75','19','289','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('76','19','290','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('77','20','83','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('78','20','291','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('79','20','292','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('80','20','293','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('81','21','179','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('82','21','294','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('83','21','295','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('84','21','296','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('85','22','247','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('86','22','297','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('87','22','298','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('88','22','299','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('89','23','281','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('90','23','300','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('91','23','301','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('92','23','302','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('93','24','164','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('94','24','303','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('95','24','304','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('96','24','305','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('97','25','72','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('98','25','306','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('99','25','307','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('100','25','308','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('101','26','254','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('102','26','309','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('103','26','310','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('104','26','311','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('105','27','252','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('106','27','312','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('107','27','313','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('108','27','314','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('109','28','221','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('110','28','315','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('111','28','316','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('113','29','258','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('114','29','318','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('115','29','319','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('116','29','320','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('117','30','92','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('118','30','321','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('119','30','322','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('120','30','323','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('121','31','86','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('122','31','324','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('123','31','325','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('124','31','326','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('125','32','124','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('126','32','327','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('127','32','328','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('128','32','329','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('133','34','170','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('134','34','333','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('135','34','334','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('136','34','335','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('137','35','325','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('138','35','336','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('139','35','337','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('140','35','338','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('141','36','47','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('142','36','339','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('143','36','340','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('144','36','341','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('145','37','289','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('146','37','342','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('147','37','343','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('148','37','344','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('149','38','194','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('150','38','345','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('151','38','346','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('152','38','347','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('153','39','72','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('154','39','348','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('155','39','349','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('156','39','350','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('157','40','46','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('158','40','351','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('159','40','352','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('160','40','353','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('161','41','216','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('162','41','354','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('163','41','355','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('164','41','356','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('165','42','103','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('166','42','357','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('167','42','358','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('168','42','359','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('169','43','23','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('170','43','360','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('171','43','361','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('172','43','362','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('173','44','38','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('174','44','363','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('175','44','364','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('176','44','365','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('177','45','120','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('178','45','366','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('179','45','367','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('180','45','368','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('181','46','324','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('182','46','369','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('183','46','370','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('184','46','371','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('185','47','25','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('186','47','372','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('187','47','373','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('188','47','374','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('189','48','304','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('190','48','375','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('191','48','376','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('192','48','377','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('193','49','88','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('194','49','378','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('195','49','379','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('196','49','380','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('197','50','142','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('198','50','381','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('199','50','382','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('200','50','383','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('201','101','23','4');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('202','101','19','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('203','101','22','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('204','101','20','1');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('205','102','33','3');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('206','102','27','2');

INSERT INTO trechos_linha (codigo, codigo_linha, codigo_trecho, ordem) VALUES ('207','102','19','1');


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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;


INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('1','1','10204','400','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('2','2','10204','450','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('3','3','10204','229.19','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('4','4','10204','300','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('5','5','10204','500','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('6','6','10204','50','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('7','7','10204','60','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('8','8','10204','500','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('9','9','10204','50','2021-12-07 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('14','14','10204','400','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('15','15','10204','350','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('16','16','10204','450','2021-12-06 00:00:00');

INSERT INTO venda (codigo, codigo_passagem, matricula_vendedor, valor, data_compra) VALUES ('17','17','10204','450','2021-12-06 00:00:00');
