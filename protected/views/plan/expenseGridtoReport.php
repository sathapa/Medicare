<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      plid		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      plan		</th>
 		<th width="80px">
		      datetime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->plid; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->plan; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
