<?
	$ac=$_GET['ac'];
	if($ac=="them"){
		include("modules/loaitin/them.php");
	}
	else { 
		if($ac=="sua"){
			include("modules/loaitin/sua.php");
		}
		else
			if($ac=="lietke"){
				include("modules/loaitin/lietke.php");
			}
	}
?>