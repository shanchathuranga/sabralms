<div class="grid_3">
	&nbsp;
</div>
<div class="grid_9">
	<!--<form action="<?php echo base_url(); ?>admin/add_attachment" method="POST"  enctype="multipart/form-data">
                <label for="">Title:</label>
		<br/>
		<input type="text" name="title">
                <br/>
                <label for="">Path:</label>
		<br/>
		<input type="text" name="path">
                <br/>
		<label for="">Add:</label>
		<br/>
		<input type="text" name="add">
                <br/>
                
                <label for="">Select File To Upload:</label>
                <br />
                <input type="file" name="userfile"  />
                <br /><br />
                <input type="submit" name="submit" value="Upload" class="btn btn-success" />
                
                <label for="">Year:</label>
                <br/>
                <select name="year">
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                </select>
                <br/>
                <br/>
		<input type="submit" name="submit" value="Upload" class="btn btn-success" />
		<br/>
	</form>-->
      <h1>Upload File</h1>
        <form method="post" action="" id="upload_file">
            <label for="title">Title</label>
            </br>
            
            <input type="text" name="title" id="title" value="" />
            </br>
            <label for="">Add some text:</label>
            <br/>
            <input type="text" name="add">
            <br/>
            
            <label for="">Year:</label>
                <br/>
                <select name="year">
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                </select>
                <br/>
                
                <label for="">Semester:</label>
                <br/>
                <select name="year">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    
                </select>
                <br/>
            
            <label for="userfile">File</label>
            </br>
            
            <input type="file" name="userfile" id="userfile" size="20" />
            </br>
            </br>
            <input type="submit" name="submit" id="submit" />
            </br>
            
        </form>
    <!--<h2>Files</h2>
    <div id="files"></div>-->
</div>
