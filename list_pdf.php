<?php 
	include 'header.php';

		$dir = str_replace("\\","/", __DIR__);
		$dir .= "/uploads/document/"; 
		$the_dir = scandir($dir);
?>

            <div id="page-content-wrapper">
                <div class="container-fluid">
                	<div class="row col-md-14 col-md-offset-2 custyle">
                    <table class="table table-striped custab">
				    <thead>
				        <tr>
							<th>Action</th>
				            <th>List local file PDF</th>

				        </tr>
				    </thead>
				        <?php
						foreach($the_dir as $name){
							if($name === '..' or $name === '.'){
								continue;
							}
							$url = './uploads/document/'.$name;	
							
							echo '<tr><td><a href="'.$url.'">Click Disini</a></td><td>'.$name.'</td></tr>';
						}
					   ?>
					</table>
				</div>
                </div>
            </div> <!-- /#page-content-wrapper -->
 			</table>      	

<?php 
	include 'footer.php';
?>