<table width="300" border="0">
	<tr>
    	<td width="512" height="107">
        	<div align="center">
            	<strong>CÁC THÔNG TIN ĐÃ ĐĂNG</strong>
            </div>	
        </td>
	</tr>
</table>

<?
	$sql ="select * from post order by number asc";
	$loaitin =mysql_query($sql);
?>
<div >
	<table width="594" border="1" id="customers">
		<tr>
    		<td width="401"><div align="center">Tiêu đề</div></td>
    		<td width="80"><div align="center">Ngày đăng</div></td>
    		<td colspan="2"><div align="center">Quản lí</div></td>
		</tr>
<?
 	while($dong =mysql_fetch_array($loaitin)){
?>
	<tr>
		<td><? echo $dong["title"]?></td>
		<td><? echo $dong["postdate"]?></td>
		<td width="44">
			<div align="center">
				<a href="index.php?quanli=loaitin&ac=sua&id=<? echo $dong["postid"]?>">
        			<img src="img/b_edit.png" />
       			</a> 
        	</div>
		</td>	
        <td width="41"><a href="modules/loaitin/xuly.php?xoa=loaitin&id=<? echo $dong["postid"]?>"><img src="img/b_drop.png" /></a></td>
	</tr>
<?
	}
?>
</table>
</div>