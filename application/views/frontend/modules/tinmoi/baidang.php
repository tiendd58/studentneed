<?
	$sql=" select * from post where postid ='$_GET[id]'";
	$baiviet=mysql_query($sql);
	$dong=mysql_fetch_array($baiviet);
?>

<div >
    	<p class="text">
        	-------<? echo $dong["title"]?>-------
        </p>
		<img src="<? echo $dong["img"]?>"  width="500" height="500"> 
		</p>
        <p class="text">Công ty: </p>
        <p>        	
        	<? echo $dong["recruitmentid"] ?>
        </p>
        <p class="text">Vị trí tuyển dụng: </p>
        <p>
        	<? echo $dong["position"] ?>
        </p>
        <p class="text">Số lượng tuyển: </p>
        <p>
        	<? echo $dong["number"] ?>
        </p>
        <p class="text">Mô tả công việc: </p>
        <p>
        	<? echo $dong["describer"] ?>
        </p>
        <p class="text">Hạn nộp hồ sơ</p>
        <p>
        	<? echo $dong["outdate"] ?>
        </p>
</div>