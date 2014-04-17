<?php

namespace app\interfaces;

interface icarrinho{

	public function adicionarCarrinho($id);
	public function atualizarCarrinho($id,$qtde);
	public function deletarProdutoCarrinho($id);
	public function deletarCarrinho();
	public function produtosCarrinho();
	public function debugCarrinho();

}