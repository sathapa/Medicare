<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      rbid		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      dr_eid		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      discount		</th>
 		<th width="80px">
		      vat		</th>
 		<th width="80px">
		      tax		</th>
 		<th width="80px">
		      total		</th>
 		<th width="80px">
		      tender		</th>
 		<th width="80px">
		      change		</th>
 		<th width="80px">
		      remarks		</th>
 		<th width="80px">
		      datetime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->rbid; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->dr_eid; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->discount; ?>
		</td>
       		<td>
			<?php echo $row->vat; ?>
		</td>
       		<td>
			<?php echo $row->tax; ?>
		</td>
       		<td>
			<?php echo $row->total; ?>
		</td>
       		<td>
			<?php echo $row->tender; ?>
		</td>
       		<td>
			<?php echo $row->change; ?>
		</td>
       		<td>
			<?php echo $row->remarks; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
