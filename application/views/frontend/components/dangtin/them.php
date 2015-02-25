<?
	include("../editor/editor1.php");
?>
<form action="../../modules/loaitin/modules/loaitin/xuly.php" method="post" enctype="multipart/form-data">
<div >
	<table width="758" border="0">
		<tr>
			<td height="102" colspan="4"><div align="center"><strong> CHỨC NĂNG ĐĂNG TIN</strong></div></td>
		</tr>
		<tr>
			<td width="123" height="40">Tên công ty</td>
			<td colspan="3"><input type="text" name="recruitmentid" id="recruitmentid" size="60"></td>
		</tr>
		<tr>
			<td height="74">Tiêu đề</td>
			<td colspan="3"><input name="title" type="text" id="title" value="" size="70" /></td>
		</tr>
		<tr>
			<td height="63">Vị trí</td>
			<td colspan="3"><input type="text" name="position" id="position" size="40" /></td>
		</tr>
		<tr>
			<td height="56">Ảnh minh họa</td>
			<td colspan="3"><input type="file" name="img"></td>
		</tr>
		<tr>
			<td height="56">Ngày đăng</td>
			<td width="161"><input type="text" name="postdate" id="postdate" /></td>
			<td width="120">Ngày hết hạn</td>
			<td width="336"><input type="text" name="outdate" id="outdate" /></td>
		</tr>
		<tr>
			<td><p> Mô tả </p>
      			<p>công việc</p></td>
			<td colspan="3"><textarea name="describer" cols="70" rows="20" id="describer"></textarea></td>
		</tr>
		<tr>
			<td height="40">Tóm tắt</td>
			<td colspan="3"><textarea name="brief" cols="70" rows="5" id="brief"></textarea></td>
		</tr>
		<tr>
			<td height="40">Số lượng</td>
			<td colspan="3"><input type="text" name="number" id="number" /></td>
		</tr>
		<tr>
			<td height="66">&nbsp;</td>
			<td colspan="2">
            	<p>
					<input type="submit" name="them" id="them" value="       Thêm       ">
				</p>
			</td>
			<td>
				<a href="../../modules/loaitin/index.php?quanli=loaitin&amp;ac=lietke"> 

				<p>
					<input name="Button" type="button"    value="Danh sách tin đã đăng">
				</p>        
   
				</a>
			</td>
		</tr>
	</table>
</div>
</form>