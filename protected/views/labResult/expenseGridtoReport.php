<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      lrid		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      eid		</th>
 		<th width="80px">
		      loid		</th>
 		<th width="80px">
		      result		</th>
 		<th width="80px">
		      datetime		</th>
 		<th width="80px">
		      suggestion		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->lrid; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->eid; ?>
		</td>
       		<td>
			<?php echo $row->loid; ?>
		</td>
       		<td>
			<?php echo $row->result; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       		<td>
			<?php echo $row->suggestion; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
