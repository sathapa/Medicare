<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      title		</th>
 		<th width="80px">
		      fName		</th>
 		<th width="80px">
		      mName		</th>
 		<th width="80px">
		      lName		</th>
 		<th width="80px">
		      gender		</th>
 		<th width="80px">
		      homePhone		</th>
 		<th width="80px">
		      mobilePhone		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      dID		</th>
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
			<?php echo $row->title; ?>
		</td>
       		<td>
			<?php echo $row->fName; ?>
		</td>
       		<td>
			<?php echo $row->mName; ?>
		</td>
       		<td>
			<?php echo $row->lName; ?>
		</td>
       		<td>
			<?php echo $row->gender; ?>
		</td>
       		<td>
			<?php echo $row->homePhone; ?>
		</td>
       		<td>
			<?php echo $row->mobilePhone; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->dID; ?>
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
