<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Linha as Li;

/*
Nome: Linha (classe)
Funcionalidade: Representa a entidade linha e as informações contidas na mesma
Autor(es): Israel Braitt 
*/
class Linha extends Model {

    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
    
    public static function getLinhas(){
        $linhas = DB::select("SELECT * FROM linhas;");
        return $linhas;
    }

    public static function getTipo ($coluna, $param) {
        $query = "SELECT direta FROM linha WHERE ".$coluna." LIKE :cod";
        $direta = DB::select($query, ['cod' => $param]);
        if ($direta) {
            return $direta;
        } else {
            return null;
        }
    }

    public static function getData($coluna, $parametro){
        $query = "SELECT dias_semana FROM linha WHERE ".$coluna." LIKE :cod";
        $data = DB::select($query, ['cod' => $parametro]);
        return $data;
    }

    public static function getHoraPartida($coluna, $parametro){
        $query = "SELECT hora_partida FROM linha WHERE ".$coluna." LIKE :cod";
        $hora_partida = DB::select($query, ['cod' => $parametro]);
        return $hora_partida;
    }

    /**
     * Busca a linha mais vendida
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida da linha menos vendida
     */
    public static function linha_mais_vendida ()
    {
        //busca a linha mais vendida no banco de dados
        $linha = DB::select("SELECT codigo_linha, count(*) AS l FROM passagem GROUP BY codigo_linha HAVING count(*) = (SELECT max(l) FROM (SELECT codigo_linha, count(*) AS l FROM passagem GROUP BY codigo_linha) passagem)");
        if(empty($linha)){
            return ['linha_mais_vendida_partida'=> '', 'linha_mais_vendida_chegada'=> ''];
        }
        $linha_mais_vendida = Li::buscar_linha($linha[0]->codigo_linha);
        
        return ['total_mais_vendida'=> $linha_mais_vendida['total'],'linha_mais_vendida_partida'=> $linha_mais_vendida['cidade_partida'], 'linha_mais_vendida_chegada'=> $linha_mais_vendida['cidade_chegada']];

    }
    
    /**
     * Busca a linha menos vendida
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida da linha mais vendida
     */
    public static function linha_menos_vendida ()
    {
        //busca a linha mais vendida no banco de dados
        $linha = DB::select("SELECT codigo_linha, count(*) AS l FROM passagem GROUP BY codigo_linha HAVING count(*) = (SELECT min(l) FROM (SELECT codigo_linha, count(*) AS l FROM passagem GROUP BY codigo_linha) passagem)");
        if(empty($linha)){
            return ['linha_menos_vendida_partida'=> '', 'linha_menos_vendida_chegada'=> ''];
        }
        $linha_menos_vendida = Li::buscar_linha($linha[0]->codigo_linha);

        return ['total_menos_vendida'=> $linha_menos_vendida['total'],'linha_menos_vendida_partida'=> $linha_menos_vendida['cidade_partida'], 'linha_menos_vendida_chegada'=> $linha_menos_vendida['cidade_chegada']];

    }

    /**
     * Busca o nome da linha pelo codigo
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida de uma linha
     */
    public static function buscar ($codigo_linha)
    { 
        return Li::buscar_linha ($codigo_linha);

    }

    /**
     * Busca o nome da linha pelo codigo
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida de uma linha
     */
    public static function buscar_linha ($codigo_linha)
    { 
        //busca o nome da linha pelo codigo
        $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = $codigo_linha and ordem = 1)");
        $ordem = DB::select("SELECT max(ordem) as ordem from trechos_linha where codigo_linha =  $codigo_linha");
        $cidade_chegada = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = (select codigo_trecho from trechos_linha where codigo_linha = $codigo_linha and ordem = :ordem)", ['ordem' => $ordem[0]->ordem]);
        $total_passagens = DB::select("SELECT count(*) as total FROM passagem WHERE codigo_linha = $codigo_linha");

        //checa se todas as listas tem algum valor
        if(empty($total_passagens) or empty( $cidade_chegada) or empty($cidade_partida)) {
            return ['total' => 0, 'cidade_partida' => '', 'cidade_chegada' => ''];
        }

        return ['total'=> $total_passagens[0]->total, 'cidade_partida' => $cidade_partida[0]->cidade_partida, 'cidade_chegada' => $cidade_chegada[0]->cidade_chegada];
    }
}
