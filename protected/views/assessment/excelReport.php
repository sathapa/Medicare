<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      asid		</th>
 		<th width="80px">
		      sid		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      icd10code		</th>
 		<th width="80px">
		      datetime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->asid; ?>
		</td>
       		<td>
			<?php echo $row->sid; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->icd10code; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
