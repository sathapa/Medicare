<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      dtid		</th>
 		<th width="80px">
		      uid		</th>
 		<th width="80px">
		      sunM		</th>
 		<th width="80px">
		      sunD		</th>
 		<th width="80px">
		      sunE		</th>
 		<th width="80px">
		      sunN		</th>
 		<th width="80px">
		      monM		</th>
 		<th width="80px">
		      monD		</th>
 		<th width="80px">
		      monE		</th>
 		<th width="80px">
		      monN		</th>
 		<th width="80px">
		      tueM		</th>
 		<th width="80px">
		      tueD		</th>
 		<th width="80px">
		      tueE		</th>
 		<th width="80px">
		      tueN		</th>
 		<th width="80px">
		      wedM		</th>
 		<th width="80px">
		      wedD		</th>
 		<th width="80px">
		      wedE		</th>
 		<th width="80px">
		      wedN		</th>
 		<th width="80px">
		      thrM		</th>
 		<th width="80px">
		      thrD		</th>
 		<th width="80px">
		      thrE		</th>
 		<th width="80px">
		      thrN		</th>
 		<th width="80px">
		      friM		</th>
 		<th width="80px">
		      friD		</th>
 		<th width="80px">
		      friE		</th>
 		<th width="80px">
		      friN		</th>
 		<th width="80px">
		      satM		</th>
 		<th width="80px">
		      satD		</th>
 		<th width="80px">
		      satE		</th>
 		<th width="80px">
		      satN		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->dtid; ?>
		</td>
       		<td>
			<?php echo $row->uid; ?>
		</td>
       		<td>
			<?php echo $row->sunM; ?>
		</td>
       		<td>
			<?php echo $row->sunD; ?>
		</td>
       		<td>
			<?php echo $row->sunE; ?>
		</td>
       		<td>
			<?php echo $row->sunN; ?>
		</td>
       		<td>
			<?php echo $row->monM; ?>
		</td>
       		<td>
			<?php echo $row->monD; ?>
		</td>
       		<td>
			<?php echo $row->monE; ?>
		</td>
       		<td>
			<?php echo $row->monN; ?>
		</td>
       		<td>
			<?php echo $row->tueM; ?>
		</td>
       		<td>
			<?php echo $row->tueD; ?>
		</td>
       		<td>
			<?php echo $row->tueE; ?>
		</td>
       		<td>
			<?php echo $row->tueN; ?>
		</td>
       		<td>
			<?php echo $row->wedM; ?>
		</td>
       		<td>
			<?php echo $row->wedD; ?>
		</td>
       		<td>
			<?php echo $row->wedE; ?>
		</td>
       		<td>
			<?php echo $row->wedN; ?>
		</td>
       		<td>
			<?php echo $row->thrM; ?>
		</td>
       		<td>
			<?php echo $row->thrD; ?>
		</td>
       		<td>
			<?php echo $row->thrE; ?>
		</td>
       		<td>
			<?php echo $row->thrN; ?>
		</td>
       		<td>
			<?php echo $row->friM; ?>
		</td>
       		<td>
			<?php echo $row->friD; ?>
		</td>
       		<td>
			<?php echo $row->friE; ?>
		</td>
       		<td>
			<?php echo $row->friN; ?>
		</td>
       		<td>
			<?php echo $row->satM; ?>
		</td>
       		<td>
			<?php echo $row->satD; ?>
		</td>
       		<td>
			<?php echo $row->satE; ?>
		</td>
       		<td>
			<?php echo $row->satN; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
