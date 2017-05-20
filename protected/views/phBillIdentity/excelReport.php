<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      phbiid		</th>
 		<th width="80px">
		      phid		</th>
 		<th width="80px">
		      phbid		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      eid		</th>
 		<th width="80px">
		      price		</th>
 		<th width="80px">
		      datetime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->phbiid; ?>
		</td>
       		<td>
			<?php echo $row->phid; ?>
		</td>
       		<td>
			<?php echo $row->phbid; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->eid; ?>
		</td>
       		<td>
			<?php echo $row->price; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
