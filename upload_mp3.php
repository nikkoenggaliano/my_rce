<?php 
	include 'header.php';
?>

            <div id="page-content-wrapper">
                <div class="container-fluid">
					<div class="form-row">
						<form method="POST" enctype="multipart/form-data"  action="uploadm.php" autocomplete="OFF">
					  <div class="form-group">
						<?php
							if(isset($_SESSION['ret'])){
								$pesan = $_SESSION['ret']['messages'];
								$type  = $_SESSION['ret']['type'];
								echo '<div class="alert alert-'.$type.'" role="alert">'.$pesan.'</div>';
								unset($_SESSION['ret']);
							}
						?>
						<label for="exampleFormControlFile1"><b>Silahkan Upload Mp3 Audio Anda</b></label>
					  	<div class="form-group col-md-12">
						    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="mp3" accept="audio/mpeg">
						    <br>
						    <input type="submit" class="btn btn-dark" value="Upload Now">
					    </div>
					  </div>
					</form>
					</div>
                </div>
            </div> <!-- /#page-content-wrapper -->
       

<?php 
	include 'footer.php';
?>