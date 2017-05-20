<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      cardID		</th>
 		<th width="80px">
		      pID		</th>
 		<th width="80px">
		      stat		</th>
 		<th width="80px">
		      clerk		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->cardID; ?>
		</td>
       		<td>
			<?php echo $row->pID; ?>
		</td>
       		<td>
			<?php echo $row->stat; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
