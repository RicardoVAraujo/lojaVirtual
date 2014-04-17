<h2>Detalhes do produto: <?php echo $produto->tb_produtos_nome; ?></h2>

<div id="foto-produto">
	<img src="<?php echo site_url().'/public/'.$produto->tb_produtos_foto; ?>">
</div>
<div id="descricao-produto">
	<?php echo $produto->tb_produtos_descricao; ?>
	<button class="btn btn-danger">Comprar</button>
</div>