<?php

namespace app\models;

abstract class appModel extends \ActiveRecord\Model implements \app\interfaces\iSql{

	public static function listar(){
		return parent::find('all');
	}

	public static function cadastrar($attributes){
		$cadastrar = parent::create($attributes);
		return $cadastrar;
	}

	public static function atualizar($id,$attributes){
		$atualizar = parent::find($id);
		$atualizar->update_attributes($attributes);
	}

	public static function deletar($id){
		$deletar = parent::find($id);
		$deletar->delete();
	}

	public static function pegarPeloId($campo, $valor, $tipo = null) {
    $tipoListagem = ($tipo == null) ? 'first' : 'all';
    return parent::find($tipoListagem, array('conditions' => array($campo . '=?', $valor)));
  }

}
