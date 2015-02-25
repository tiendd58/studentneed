<?
	include("config.php");
	$recruitmentid= $_POST["recruitmentid"];
	$title =$_POST["title"];
	$number =$_POST["number"];
	$position=$_POST["position"];
	$postdate=$_POST["postdate"];
	$outdate=$_POST["outdate"];
	$describer =$_POST["describer"];
	$brief=$_POST["brief"];
	$id=$_GET["id"];
	if(isset($_POST["them"])){
		$tenanh=$_FILES["img"]["name"];
		if($tenanh!=""){
			$time= date("Ymdhis");
			$tenanh=$time . $tenanh;
			$dich="../../uploads/".$tenanh;
			copy($_FILES["img"]["tmp_name"],$dich);
			$dich=substr($dich,6);
		}
		
		$sql=" insert into post(recruitmentid, title,img, number,position,postdate,outdate,describer,brief) 
		values('$recruitmentid','$title','$dich','$number','$position','$postdate','$outdate','$describer','$brief')";
		mysql_query($sql);
		header("location: ../../index.php?quanli=loaitin&ac=them");
	}
		else{
			if(isset($_POST["sua"])){

					$sql="UPDATE post SET recruitmentid='$recruitmentid',title='$title',number='$number',position='$position',postdate='$postdate',outdate='$outdate',describer='$describer',brief='$brief'
		where postid='$id'";
		
				mysql_query($sql);
				header("location:../../index.php?quanli=loaitin&ac=lietke");
			}
			else {
				$sql= "delete from post where postid ='$id'";
				mysql_query($sql);
				header("location: ../../index.php?quanli=loaitin&ac=lietke");
			}
		}
?>