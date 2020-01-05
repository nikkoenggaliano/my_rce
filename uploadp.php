<?php 
include 'config.php';
if(isset($_FILES['pdf'])){

	$returned = [];
	$dir = str_replace("\\","/", __DIR__);
	$dir .= "/uploads/document/"; 
	$pdfs = $_FILES['pdf'];

	//check size file //5mb
	if($pdfs['size'] > 5000000){

		$returned['type'] = 'warning';
		$returned['messages'] = 'Ukuran PDF yang anda upload terlalu besar, Maximum 5mb';
		$_SESSION['ret'] = $returned;
		header("location: upload_pdf.php");
		exit;

	}



	if(!move_uploaded_file($pdfs['tmp_name'], $dir.$pdfs['name'])){
    	
    	$returned['type'] = 'danger';
		$returned['messages'] = '!Maaf mungkin terjadi kesalahan pada sistim kami';
		$_SESSION['ret'] = $returned;
		header("location: upload_pdf.php");
		exit;
    }else{
    	
    	$returned['type'] = 'success';
		$returned['messages'] = 'File anda sudah tersimpan dengan nama'.$pdfs['name'];
		$_SESSION['ret'] = $returned;
		header("location: upload_pdf.php");
		exit;

    }



}