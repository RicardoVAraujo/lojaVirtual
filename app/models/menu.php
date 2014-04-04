<?php

namespace app\models;
use \app\models\subcategoria;

class menu extends subcategoria{

  private $menu;

  private function listaMenuLateral($categorias){
    $this->menu= '<ul>';
        foreach ($categorias as $cat):
          $this->menu.= '<li>';
            $this->menu.= $cat->tb_categorias_nome;
              $this->menu.= '<ul>';
                foreach(\app\models\subcategoria::pegarPeloId('tb_subcategorias_categoria',$cat->id,'all') as $sub):
                  $this->menu.= '<li>';
                    $this->menu.= $sub->tb_subcategorias_nome;
                  $this->menu.= '</li>';
                endforeach;
              $this->menu.= '</ul>';
          $this->menu.= '</li>';
        endforeach;
    $this->menu.= '</ul>';
    return $this->menu;
  }

  public function exibirMenuLateral(){
    $categorias = \app\models\categoria::listar();
    return $this->listaMenuLateral($categorias);
  }

}
