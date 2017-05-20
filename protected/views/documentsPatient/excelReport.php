<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      doc_id		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      did		</th>
 		<th width="80px">
		      sid		</th>
 		<th width="80px">
		      department		</th>
 		<th width="80px">
		      title		</th>
 		<th width="80px">
		      file		</th>
 		<th width="80px">
		      source		</th>
 		<th width="80px">
		      datetime		</th>
 		<th width="80px">
		      user		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->doc_id; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->did; ?>
		</td>
       		<td>
			<?php echo $row->sid; ?>
		</td>
       		<td>
			<?php echo $row->department; ?>
		</td>
       		<td>
			<?php echo $row->title; ?>
		</td>
       		<td>
			<?php echo $row->file; ?>
		</td>
       		<td>
			<?php echo $row->source; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       		<td>
			<?php echo $row->user; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
