<?php
    include_once 'header.php';
    $id = $_REQUEST['id'];
    include_once 'model.php';
    $del = new Model();
    $delete = $del->del($id);

    if ($delete) {
		echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'records.php';</script>";
	}


    include_once 'footer.php';
?>