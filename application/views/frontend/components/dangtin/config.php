<?
	$tenmaychu ="localhost";
	$taikhoan="root";
	$matkhau="root";
	$csdl="CSDL";
	$con =mysql_connect($tenmaychu,$taikhoan,$matkhau);
	mysql_select_db($csdl,$con);
?>