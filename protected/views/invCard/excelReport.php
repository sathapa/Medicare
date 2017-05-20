<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      cardNo		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      time		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->cardNo; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->date; ?>
		</td>
       		<td>
			<?php echo $row->time; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
