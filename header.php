<?php 

    include 'config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>My Best Features</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>

        <nav class="navbar navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
                </ul>
                <form class="form-inline my-2 my-md-0"> </form>
            </div>
        </nav>
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"> <a href="index.php"> System Storage </a> </li>
                    <li> <a href="upload_images.php">Upload Images</a> </li>
                    <li> <a href="list_foto.php">List Uploaded Images</a> </li>
                    <li> <a href="upload_pdf.php">Upload PDF</a> </li>
                    <li> <a href="list_pdf.php">List Uploaded PDF</a> </li>
                    <li> <a href="upload_mp3.php">Upload MP3 (Audio)</a> </li>
                    <li> <a href="list_mp3.php">List Uploaded MP3</a> </li>
                    <li> <a href="ping.php">Ping Features</a> </li>
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->

