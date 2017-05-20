<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      drug_id		</th>
 		<th width="80px">
		      stock_id		</th>
 		<th width="80px">
		      SKU		</th>
 		<th width="80px">
		      drug_cat		</th>
 		<th width="80px">
		      drug_root		</th>
 		<th width="80px">
		      brand_name		</th>
 		<th width="80px">
		      generic_name		</th>
 		<th width="80px">
		      unit_value		</th>
 		<th width="80px">
		      unit_measurement		</th>
 		<th width="80px">
		      unit_price		</th>
 		<th width="80px">
		      stat		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->drug_id; ?>
		</td>
       		<td>
			<?php echo $row->stock_id; ?>
		</td>
       		<td>
			<?php echo $row->SKU; ?>
		</td>
       		<td>
			<?php echo $row->drug_cat; ?>
		</td>
       		<td>
			<?php echo $row->drug_root; ?>
		</td>
       		<td>
			<?php echo $row->brand_name; ?>
		</td>
       		<td>
			<?php echo $row->generic_name; ?>
		</td>
       		<td>
			<?php echo $row->unit_value; ?>
		</td>
       		<td>
			<?php echo $row->unit_measurement; ?>
		</td>
       		<td>
			<?php echo $row->unit_price; ?>
		</td>
       		<td>
			<?php echo $row->stat; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
