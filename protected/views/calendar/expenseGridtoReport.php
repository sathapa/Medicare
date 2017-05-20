<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      Id		</th>
 		<th width="80px">
		      Subject		</th>
 		<th width="80px">
		      Location		</th>
 		<th width="80px">
		      Description		</th>
 		<th width="80px">
		      StartTime		</th>
 		<th width="80px">
		      EndTime		</th>
 		<th width="80px">
		      IsAllDayEvent		</th>
 		<th width="80px">
		      Color		</th>
 		<th width="80px">
		      RecurringRule		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->Id; ?>
		</td>
       		<td>
			<?php echo $row->Subject; ?>
		</td>
       		<td>
			<?php echo $row->Location; ?>
		</td>
       		<td>
			<?php echo $row->Description; ?>
		</td>
       		<td>
			<?php echo $row->StartTime; ?>
		</td>
       		<td>
			<?php echo $row->EndTime; ?>
		</td>
       		<td>
			<?php echo $row->IsAllDayEvent; ?>
		</td>
       		<td>
			<?php echo $row->Color; ?>
		</td>
       		<td>
			<?php echo $row->RecurringRule; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
