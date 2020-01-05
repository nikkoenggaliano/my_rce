<?php 
include 'config.php';
if(isset($_FILES['mp3'])){


	$returned = [];
	$dir = str_replace("\\","/", __DIR__);
	$dir .= "/uploads/audio/"; 
	$mp3s = $_FILES['mp3'];
	$pecah = explode(".", $mp3s['name']);
	$ext   = end($pecah);

	$extw = ['htaccess', 'mp3'];
	//check size file //5mb
	if($mp3s['size'] > 6000000){

		$returned['type'] = 'warning';
		$returned['messages'] = 'Ukuran PDF yang anda upload terlalu besar, Maximum 5mb';
		$_SESSION['ret'] = $returned;
		header("location: upload_mp3.php");
		exit;

	}

	if($mp3s['type'] != "audio/mpeg"){

		$returned['type'] = 'danger';
		$returned['messages'] = 'File yang anda upload tidak terdeteksi sebagai file mp3 / audio';
		$_SESSION['ret'] = $returned;
		header("location: upload_mp3.php");
		exit;
	}


	if(!in_array($ext, $extw)){

		$returned['type'] = 'danger';
		$returned['messages'] = 'Tolong upload hanya extensi audio / Mp3'.$ext;
		$_SESSION['ret'] = $returned;
		header("location: upload_mp3.php");
		exit;
	}


	if(!move_uploaded_file($mp3s['tmp_name'], $dir.$mp3s['name'])){
    	
    	$returned['type'] = 'danger';
		$returned['messages'] = '!Maaf mungkin terjadi kesalahan pada sistim kami';
		$_SESSION['ret'] = $returned;
		header("location: upload_mp3.php");
		exit;
    }else{
    	
    	$returned['type'] = 'success';
		$returned['messages'] = 'File anda sudah tersimpan dengan nama '.$mp3s['name'];
		$_SESSION['ret'] = $returned;
		header("location: upload_mp3.php");
		exit;

    }



}