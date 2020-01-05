<?php 
include 'config.php';
if(isset($_POST['nama'], $_FILES['image'])){
	if(!empty($_FILES['image']['type'])){

		//return alert 
		$returned = [];


		//dir
		$dir = str_replace("\\","/", __DIR__);
		$dir .= "/uploads/images/"; 
		//Tampung image 
		$images = $_FILES['image'];


		$typew = array('image/jpeg','image/jpg', 'image/gif', 'image/png');		
		$nama_ganti = htmlentities($_POST['nama']);
		$path = pathinfo($images['name']);
		$ext  = strtolower($path['extension']);

		//Cut the length name
		if(strlen($nama_ganti) > 20 ){
			$nama_ganti = substr($nama_ganti, 0, 11);
		}elseif (strlen($nama_ganti) < 3) {
			$nama_ganti = $images['name'];
		}else{
			$nama_ganti = htmlentities($_POST['nama']);
		}
	 
		//Check type mime
		$mime = $images['type'];
		if(!in_array($mime, $typew)){

			$returned['type'] = 'danger';
			$returned['messages'] = 'File yang anda upload bukan terdeteksi gambar';
			$_SESSION['ret'] = $returned;
			header("location: upload_images.php");
			exit;
		}

		//check extensi
		if(preg_match('/php/i',$ext)){
			
			$returned['type'] = 'danger';
			$returned['messages'] = 'Extensi file anda terdeteksi berbahaya';
			$_SESSION['ret'] = $returned;
			header("location: upload_images.php");
			exit;
		}

		//check size file //3mb
		if($images['size'] > 3000000){

			$returned['type'] = 'warning';
			$returned['messages'] = 'Ukuran File yang anda upload terlalu besar';
			$_SESSION['ret'] = $returned;
			header("location: upload_images.php");
			exit;

		}


		$fixedname = $nama_ganti.".".$ext;

		if(!move_uploaded_file($images['tmp_name'], $dir.$fixedname)){
        	
        	$returned['type'] = 'danger';
			$returned['messages'] = '!Maaf mungkin terjadi kesalahan pada sistim kami'.$dir."x".$fixedname;
			$_SESSION['ret'] = $returned;
			header("location: upload_images.php");
			exit;
        }else{
        	
        	$returned['type'] = 'success';
			$returned['messages'] = 'File anda sudah tersimpan dengan nama'.$fixedname;
			$_SESSION['ret'] = $returned;
			header("location: upload_images.php");
			exit;

        }
	}
}