<?php 
	include 'header.php';

	$env = php_uname('s');

	if(isset($_POST['host'])){

		$command = "ping %s 2 ".$_POST['host'];
		$fix     = "";
		if($env === 'Windows NT'){
			$fix = sprintf($command, "-r");
		}else{
			$fix = sprintf($command, "-c");
		}
		
		echo "<pre>";
		echo shell_exec($fix);
		echo "</pre>";
	}



?>

            <div id="page-content-wrapper">
                <div class="container-fluid">
					<div class="form-row">
						<form method="POST" autocomplete="OFF">
					  <div class="form-group">
						<label for="exampleFormControlFile1"><b>Check Koneksi dengan Fitur Ping</b></label>
				  	    <div class="form-group col-md-12">
					      <input type="text" class="form-control" placeholder="Enter the Hostname/Url" name="host">
					      <br>
					      <input type="submit" class="btn btn-dark" value="Ping Now">
					    </div>
					  </div>
					</form>
					</div>
                </div>
            </div> <!-- /#page-content-wrapper -->
       

<?php 
	include 'footer.php';
?>