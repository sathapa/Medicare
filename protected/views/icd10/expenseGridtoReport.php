<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      icd10no		</th>
 		<th width="80px">
		      icd10details		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->icd10no; ?>
		</td>
       		<td>
			<?php echo $row->icd10details; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
