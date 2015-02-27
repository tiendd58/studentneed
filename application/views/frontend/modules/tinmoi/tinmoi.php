<?
	$sql="select * from post order by postdate desc limit 12";
	$baiviet=mysql_query($sql);
?>
<div class="body">

	<div >
    	<ul>
		<?
			while($dong=mysql_fetch_array($baiviet)){
		?>
        	<div class="box-tin">
				<a href="index.php?quanli=baiviet&id=<? echo $dong["postid"]?>">
				<img src="<? echo $dong["img"]?>"  width="200" height="150">
				</a> 
                <p>
				<a href="index.php?quanli=baiviet&id=<? echo $dong["postid"]?>">
					<? echo $dong["title"]?>
          		</a>
                </p>
				<p>
                	<? echo $dong["brief"]?>
				</p>
                <div class="xoa"></div>
           </div>
		
		<?
		}
		?>
		</ul>
	</div>
</div>

