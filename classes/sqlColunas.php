<?php
/*
 *	Sistema: Gerador de Classes PHP5
 *	Autor: Diego Gomes Araujo
 *	Email: diegogomesaraujo@hotmail.com
 *	Versão: 1.0
 *	Licença: GPL/GNU
 *	Data da criação: 22/03/2008
 *	Hora da criação: 13:45:05
 */

class sqlColunas {

	private $resp;
	
	public function getResp() {
		return $this->resp;
	}

	public function __construct() {}
	
	public function retornaColunas($tabela) {
		$db = new DB();
		$db->conexao();
		$db->selecionaDB();
		$sql = "SHOW COLUMNS FROM ".$tabela;
		//exit($sql);
		$db->query($sql);
		while($obj = $db->fetchObj()) {
			$arr[] = new basicasColunas($obj->Field, $obj->Key);
		}
		//exit($db->getErro());
		$this->resp = $arr;
		$db->exitConexao();
		return true;
	}
	

}
?>