<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      obid		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      objective		</th>
 		<th width="80px">
		      datetime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->obid; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->objective; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
