<?php

namespace app\models;

class carrinho extends \app\models\appModel{
	static $table_name = 'tb_produtos';

	public static function pegarProdutosCarrinho(Array $produtos){
		$produtosArray = array();
		if(is_array($produtos)):
			foreach($produtos as $id=>$qtde):
				$produtosArray[$id] = array(
					'dados' => parent::find('first', array('conditions'=> array('tb_produtos.id=?',$id))),
					'qtde' => $qtde['qtde']
				);
			endforeach;	
			return $produtosArray;
		endif;	
	}

}