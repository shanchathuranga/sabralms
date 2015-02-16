    
    <table width="400px" border="1">
        <thead>
            <th>Course code</th>
            <th>lecturer reg no</th>
            
        </thead>
        <tbody>
	<?php  
        //$this->lecturer_model->getAll();
        $result=$this->lecturer_model->getAll();
        foreach ($result as $row) { ?>
	<tr>
	<td><?= $row->course_code ?></td>
	<td><?= $row->lecturer_reg_no ?></td>
	
	</tr>
	<?php } ?>
        </tbody>
    </table>
   