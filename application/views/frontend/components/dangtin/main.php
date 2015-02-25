<?
	$ac=$_GET['ac'];
	if($ac=="them"){
		include("../../modules/loaitin/modules/loaitin/them.php");
	}
	else { 
		if($ac=="sua"){
			include("../../modules/loaitin/modules/loaitin/sua.php");
		}
		else
			if($ac=="lietke"){
				include("../../modules/loaitin/modules/loaitin/lietke.php");
			}
	}
?>