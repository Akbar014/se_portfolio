<div style="background: #e5e5e5;padding: 20px; text-align: center;font-family: Lucida Sans Unicode;">
	<table style="padding: 10px;width: 500px;margin: 0 auto;text-align: left;vertical-align: top;">
		<tr>
			<td>Item Name</td>
			<td>Price</td>
			<td>Qty</td>
			<td>Total</td>
		</tr>
		<?php 
			$tot_amount=0;
			$i=0;
		
			foreach($data['Orderdetail'] as $value){
				$i++;
		?>
			<tr>
				<td><?php echo $list[$value['product_id']];?></td>
				<td>&pound; <?php echo $value['price'];?></td>
				<td><?php echo $value['qty'];?></td>
				<td>&pound; <?php echo $value['qty']*$value['price'];?></td>
			</tr>
		<?php 
			$tot_amount=$tot_amount+$value['qty']*$value['price'];
			}
		?>
			<tr>
				<td colspan="3" align="right">Total</td>
				<td>&pound; <?php echo $tot_amount;?></td>
			</tr>
	
	</table>
	<br/>
	<hr/>
	<br/>
	<p>All rights reserved by: <a href="http://leaspice.com" target="_blank" style="padding: 0 3px;">Lea Spice</a>

</div>