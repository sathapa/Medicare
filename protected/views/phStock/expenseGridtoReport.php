<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      stock_id		</th>
 		<th width="80px">
		      SKU		</th>
 		<th width="80px">
		      dis_id		</th>
 		<th width="80px">
		      min_quantity		</th>
 		<th width="80px">
		      instore_quantity		</th>
 		<th width="80px">
		      mfd_data		</th>
 		<th width="80px">
		      exp_data		</th>
 		<th width="80px">
		      stat		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      create_date		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->stock_id; ?>
		</td>
       		<td>
			<?php echo $row->SKU; ?>
		</td>
       		<td>
			<?php echo $row->dis_id; ?>
		</td>
       		<td>
			<?php echo $row->min_quantity; ?>
		</td>
       		<td>
			<?php echo $row->instore_quantity; ?>
		</td>
       		<td>
			<?php echo $row->mfd_data; ?>
		</td>
       		<td>
			<?php echo $row->exp_data; ?>
		</td>
       		<td>
			<?php echo $row->stat; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->create_date; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
