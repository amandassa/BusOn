<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


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
            return ['total_mais_vendida'=> 0, 'linha_mais_vendida_partida'=> '', 'linha_mais_vendida_chegada'=> ''];
        }

        $linha_mais_vendida = Linha::buscar_linha($linha[0]->codigo_linha);
        
        return ['total_mais_vendida'=> $linha_mais_vendida['total'],'linha_mais_vendida_partida'=> $linha_mais_vendida['cidade_partida'], 'linha_mais_vendida_chegada'=> $linha_mais_vendida['cidade_chegada']];

    }
    
    /**
     * Busca a linha menos vendida
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida da linha mais vendida
     */
    public static function linha_menos_vendida ()
    {
        //busca as linhas que nao possuem vendas no banco de dados
        $linhas_sem_vendas = DB::select("SELECT * FROM linha as l WHERE NOT EXISTS (SELECT p.codigo_linha FROM passagem as p WHERE l.codigo = p.codigo_linha)");
        if(!empty($linhas_sem_vendas)){
            $linha_menos_vendida = Linha::buscar_linha($linhas_sem_vendas[0]->codigo);   
            return ['total_menos_vendida'=> $linha_menos_vendida['total'],'linha_menos_vendida_partida'=> $linha_menos_vendida['cidade_partida'], 'linha_menos_vendida_chegada'=> $linha_menos_vendida['cidade_chegada']];
        }
        
        //busca a linha menos vendida no banco de dados
        $linha = DB::select("SELECT codigo_linha, count(*) AS l FROM passagem GROUP BY codigo_linha HAVING count(*) = (SELECT min(l) FROM (SELECT codigo_linha, count(*) AS l FROM passagem GROUP BY codigo_linha) passagem)");
        if(!empty($linha)){
            //se todas as linhas ja possuem alguma venda, entao a linha menos vendida esta correta
            $linha_menos_vendida = Linha::buscar_linha($linha[0]->codigo_linha);

            return ['total_menos_vendida'=> $linha_menos_vendida['total'],'linha_menos_vendida_partida'=> $linha_menos_vendida['cidade_partida'], 'linha_menos_vendida_chegada'=> $linha_menos_vendida['cidade_chegada']];
        
        }
        return ['linha_menos_vendida_partida'=> '', 'linha_menos_vendida_chegada'=> ''];
    }
   
    
   /* public static function buscar ($parametro, $codigo)
    { 
        $query = "SELECT * FROM linha WHERE ".$parametro." = :codigo";
        $linha = DB::select($query, ['codigo' => $codigo]);
        return $linha;
    }*/

    /**
     * Busca o nome da linha pelo codigo
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida de uma linha
     */
    public static function buscar_linha($codigo_linha){

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

    /**
     * Busca o nome as linhas que possuem assentos disponiveis 
     * @return cidadePartida__cidadeChegada_e_total - Lista com o total de passagens vendidas, cidade de chegada e cidade de partida de uma linha
     */
    public static function buscar_linhaPassagens($cidade_partida, $cidade_chegada, $data){
        $linha = DB::select("SELECT * FROM linha WHERE codigo = (SELECT codigo_linha FROM trechos_linha WHERE codigo_trecho = (SELECT codigo FROM trecho WHERE cidade_partida = '$cidade_partida' and cidade_chegada = '$cidade_chegada'));");
        //dd($linha);
        //return ['total'=> $total_passagens[0]->total, 'cidade_partida' => $cidade_partida[0]->cidade_partida, 'cidade_chegada' => $cidade_chegada[0]->cidade_chegada];
        return['linha' => $linha];
    }

    public static function editarLinha(Request $request){

        $codigo = $request['codigo'];
        $consulta= DB::select("SELECT * FROM linha where codigo=?", [$codigo])[0];
        $partida = $request['partida'];
        $destino = $request['destino'];
        $tipo = $request['tipo'];
        $preco = $request['preco'];
        $hPartida = $request['hPartida'];
        $vagas = $request['vagas'];
        $dias = $request['dias'];
        $dia= implode(';', $dias);
        $horario = $request['horario'];


        if(empty($partida) or empty($destino) or empty($tipo) or empty($preco) or empty($hPartida) or empty($vagas)  or empty($dia)){
            return $li=[
                'id' => 1
            ];
        }else{
             return   $li =[
                'codigo'=>$codigo, 
                'partida'=>$partida, 
                'destino'=>$destino,
                'tipo'=>$tipo,
                'preco'=> number_format($preco, 2),
                'hPartida' => $hPartida,
                'vagas' => $vagas,
                'dias' =>$dia,
                'horario' => $hPartida,
                'id' => 2
            ];    
             
        }
           
            

        

    }

    protected static function somarTempo($times) {
        $all_seconds = 0;
        foreach ($times as $time) {          
                list($hour, $minute, $second) = explode(':', $time);
                $all_seconds += $hour * 3600;
                $all_seconds += $minute * 60;
                $all_seconds += $second;
        
        }
    
        $total_minutes = floor($all_seconds/60);
        $seconds = $all_seconds % 60;
        $hours = floor($total_minutes / 60); 
        $minutes = $total_minutes % 60;
    
        // returns the time already formatted
        return sprintf('%02d:%02d:%02d', $hours, $minutes,$seconds);        
    }

    /**
     * Realiza a soma de horario, considerando dias e retorna o dia e horario resultantes
     */
    public static function somarHorasData(String $data, $horas){
        $data_base = date($data); //corrigir horario base        
        $hora =  explode(':', Linha::somarTempo($horas));
        $saida = date('d/m/Y H:i:s', strtotime("{$data_base} + {$hora[0]} hours {$hora[1]} minutes {$hora[2]} seconds"));
        $data_saida = explode(' ', $saida)[0];
        $hora_saida = explode(' ', $saida)[1];
        return [$data_saida, $hora_saida];
    }
    
    public static function consultaEditar(Request $request){

        $codigo = $request['codigo'];
        $consulta= DB::select("SELECT * FROM linha where codigo=?", [$codigo])[0];
        $codigo_trecho = TrechosLinha::getCodigoTrecho('codigo_linha', $codigo);            
        $trecho_inicial = $codigo_trecho[0]->codigo_trecho;            
        $tipo = $consulta->direta;    
        $cidade_partida = DB::select("SELECT cidade_partida FROM trecho WHERE codigo = ?", [$trecho_inicial]); 
        $cidade_partida = $cidade_partida[0]->cidade_partida;      
           
        $trecho_final = $codigo_trecho[sizeof($codigo_trecho)-1]->codigo_trecho;
        $cidade_destino = DB::select("SELECT cidade_chegada FROM trecho WHERE codigo = ?", [$trecho_final]);
        $cidade_destino = $cidade_destino[0]->cidade_chegada; 
        $preco = DB::select("SELECT sum(preco) as soma from trecho where codigo IN (select codigo_trecho from trechos_linha where codigo_linha = ?)", [$codigo]);
        $preco = $preco[0]->soma;
        $hPartida = DB::select("SELECT hora_partida from linha where codigo =?", [$codigo] );
        $hPartida =$hPartida[0]->hora_partida;
        $duracaoViagem = DB::select("SELECT duracao from trecho where codigo =?", [$trecho_inicial]);
        $duracaoViagem = $duracaoViagem[0]->duracao;
        $vagas = DB::select("SELECT total_vagas from linha where codigo =?", [$codigo] );
        $vagas = $vagas[0]->total_vagas;
        $diasSemanais = DB::select("SELECT dias_semana from linha where codigo =?", [$codigo] );
        $diasSemanais = $diasSemanais[0]->dias_semana;
        $horario = strtotime('1970-01-01 '.$duracaoViagem.'UTC') +  strtotime('1970-01-01 '.$hPartida.'UTC') ;
        $hChegada = gmdate('H:i:s', $horario);
              
        
        $linhas = [
        'codigo'=>$codigo, 
        'partida'=>$cidade_partida, 
        'destino'=>$cidade_destino,
        'tipo'=>$tipo,
        'preco'=> number_format($preco, 2),
        'hPartida' => $hPartida,
        'vagas' => $vagas,
        'dias' =>$diasSemanais,
        'horario' => $hChegada
        
        ];
        return $linhas;
    }
    
    
}
