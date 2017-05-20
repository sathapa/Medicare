<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      suid		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      clerk		</th>
 		<th width="80px">
		      blood_pressure		</th>
 		<th width="80px">
		      height		</th>
 		<th width="80px">
		      weight		</th>
 		<th width="80px">
		      temp		</th>
 		<th width="80px">
		      bmi_calc		</th>
 		<th width="80px">
		      eye_left		</th>
 		<th width="80px">
		      eye_right		</th>
 		<th width="80px">
		      audio_right		</th>
 		<th width="80px">
		      audio_left		</th>
 		<th width="80px">
		      complain		</th>
 		<th width="80px">
		      datetime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->suid; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->clerk; ?>
		</td>
       		<td>
			<?php echo $row->blood_pressure; ?>
		</td>
       		<td>
			<?php echo $row->height; ?>
		</td>
       		<td>
			<?php echo $row->weight; ?>
		</td>
       		<td>
			<?php echo $row->temp; ?>
		</td>
       		<td>
			<?php echo $row->bmi_calc; ?>
		</td>
       		<td>
			<?php echo $row->eye_left; ?>
		</td>
       		<td>
			<?php echo $row->eye_right; ?>
		</td>
       		<td>
			<?php echo $row->audio_right; ?>
		</td>
       		<td>
			<?php echo $row->audio_left; ?>
		</td>
       		<td>
			<?php echo $row->complain; ?>
		</td>
       		<td>
			<?php echo $row->datetime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
