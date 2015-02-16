<div class="grid_3">
    &nbsp;
</div>
<div class="grid_9">
    <table width="400px" border="1">
        <thead>
            <th>Code</th>
            <th>Cost</th>
            
        </thead>
        <tbody>
	<?php  foreach ($result as $row) { ?>
	<tr>
	<td><?= $row->caurse_code ?></td>
	<td><?= $row->lecturer_reg_no ?></td>
	
	</tr>
	<?php } ?>
        </tbody>
    </table>
</div>    