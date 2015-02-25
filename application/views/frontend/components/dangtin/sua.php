<?
	include("../../modules/loaitin/modules/editor/editor1.php");
?>

<?
	$sql=" select * from post where postid ='$_GET[id]'";
	$post=mysql_query($sql);
	$dong=mysql_fetch_array($post);
?>
<form action="../../modules/loaitin/modules/loaitin/xuly.php?id=<? echo $dong["postid"]?>" method="post">
<div >
	<table width="758" border="0">
    	<tr>
        	<td height="102" colspan="4"><div align="center"><strong> CHỨC NĂNG SỬA TIN ĐÃ ĐĂNG</strong></div></td>
		</tr>
		<tr>
			<td width="123" height="40">Tên công ty</td>
			<td colspan="3"><input type="text" name="recruitmentid" id="recruitmentid" value="<? echo $dong["recruitmentid"]?>"></td>
  		</tr>
  		<tr>
			<td height="74">Tiêu đề</td>
			<td colspan="3"><input name="title" type="text" id="title" value="<? echo $dong["title"]?>" size="70" /></td>
		</tr>
		<tr>
			<td height="63">Vị trí</td>
			<td colspan="3"><input type="text" name="position" id="position"value="<? echo $dong["position"]?>" /></td>
		</tr>
		<tr>
			<td height="56">Ảnh minh họa</td>
			<td colspan="3"><img src ="<? echo $dong["../../modules/loaitin/img"] ?>"width="100"/>
			</td>
		</tr>
		<tr>
			<td height="56">Ngày đăng</td>
			<td width="167"><input type="text" name="postdate" id="postdate" value="<? echo $dong["postdate"]?>"/></td>
			<td width="37">Ngày hết hạn</td>
			<td width="413"><input type="text" name="outdate" id="outdate"value="<? echo $dong["outdate"]?>" /></td>
		</tr>
		<tr>
			<td><p> Mô tả </p>
			<p>công việc</p></td>
			<td colspan="3"><textarea name="describer" id="describer" cols="70" rows="15"> <? echo $dong["describer"] ?> </textarea></td>
		</tr>
		<tr>
			<td height="40">Tóm tắt</td>
			<td colspan="3"><textarea name="brief" id="brief" cols="70" rows="5"> <? echo $dong["brief"]?> </textarea></td>
		</tr>
		<tr>
			<td height="40">Số lượng</td>
			<td colspan="3"><input type="text" name="number" id="number"value="<? echo $dong["number"]?>" /></td>
		</tr>
		<tr>
			<td height="66">&nbsp;</td>
			<td colspan="2">
            	<p>
					<input type="submit" name="sua" id="them" value="       Cậpnhật       ">
				</p></td>
    		<td>
            	<a href="../../modules/loaitin/index.php?quanli=loaitin&amp;ac=lietke"> 

					<p>
						<input name="Button" type="button"    value="Danh sách tin đã đăng">
					</p>        
				</a>
		</tr>
	</table>
</div>
</form>