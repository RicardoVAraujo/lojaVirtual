<table width="100%" cellspacing="0" id="table-carrinho" class="table table-striped">
	
	<thead style="background-color: #000;color: #FFF;">
		<tr>
			<th>Produto</th>
			<th>Preço</th>
			<th>Qtde</th>
			<th>Subtotal</th>
			<th>Excluir</th>
		</tr>
	</thead>
	<tbody>
		<?php if(empty($produtos)): ?>
			<tr>
				<td colspan="5" align="center">Nenhum produto no carrinho</td>
			</tr>
		<?php else: ?>
			<?php 
				$total = 0;
				$subtotal = 0;
			?>
			<?php 
				foreach($produtos as $produto):
				$subtotal = $produto['dados']->tb_produtos_preco * $produto['qtde'];	
			?>
				<tr>
					<td><?php echo $produto['dados']->tb_produtos_nome; ?></td>
					<td>R$ <?php echo number_format($produto['dados']->tb_produtos_preco,2,',','.'); ?></td>
					<td>
						<input type="text" class="input-qtde" value="<?php echo $produto['qtde'] ?>" style="width: 30px;">
						<a href="#" class="btn-alterar" data-id="<?php echo $produto['dados']->id; ?>">Alterar</a>
					</td>
					<td>R$ <?php echo number_format($subtotal,2,',', '.'); ?></td>
					<td style="text-align: center;"><a href="#" class="btn-excluir" data-id="<?php echo $produto['dados']->id; ?>"><img src="<?php echo site_url() ?>/public/images/x.png" /></a>
				</tr>
			<?php endforeach;?>
		<?php endif; ?>	
	</tbody>

</table>