<?php

namespace app\models;

class menu{

	private $menu;
	private $categorias;

	public function __construct(){
		$this->categorias = \app\models\categoria::listar();
	}

	private function listarMenulateral(){
		$this->menu = '<ul>';
			$this->menu.= '<li><a href="/">Início</a></li>';
			foreach($this->categorias as $categoria):
				$this->menu.= '<li>';
					$this->menu.= $categoria->tb_categorias_nome;
				$this->menu.= '<ul>';
					foreach(\app\models\subcategoria::where('tb_subcategorias_categoria', $categoria->id, 'all') as $subcategoria):
						$this->menu.= '<li id="li-subcategoria">';
						$this->menu.= '<a href="/subcategoria/'.$subcategoria->tb_subcategorias_slug.'">'.$subcategoria->tb_subcategorias_nome.'</a>';
						$this->menu.= '</li>';
					endforeach;	
				$this->menu.= '</li>';
				$this->menu.= '</ul>';
			endforeach;	
		$this->menu.= '</ul>';
		return $this->menu;
	}

	public function exibirMenuLateral(){
		return $this->listarMenulateral();
	}


}