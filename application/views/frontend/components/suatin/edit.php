<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="suatin"> 
<form action="" method="post" method="post">
<div >
	<table width="758" border="0">
    	<tr>
        	<td height="102" colspan="4"><div align="center"><strong> CHỨC NĂNG SỬA TIN ĐÃ ĐĂNG</strong></div></td>
		</tr>
		<tr>
			<td width="123" height="40">Tên công ty</td>
			<td colspan="3"><input type="text" name="recruitment" id="recruitment" value="<?php echo isset($post['recruitment'])?$post['title']:'';?>" /></td>
  		</tr>
  		<tr>
			<td height="74">Tiêu đề</td>
			<td colspan="3"><input name="title" type="text" id="title" value="<?php echo isset($post['title'])?$post['title']:'';?>" size="70" /></td>
		</tr>
		<tr>
			<td height="63">Vị trí</td>
			<td colspan="3"><input type="text" name="position" id="position"value="<?php echo isset($post['position'])?$post['position']:'';?>" /></td>
		</tr>
		<tr>
			<td height="56">Ảnh minh họa</td>
			<td colspan="3"><img src ="#"width="100"/>
			</td>
		</tr>
		<tr>
			<td height="56">Ngày đăng</td>
			<td width="167"><input type="text" name="postdate" id="postdate" value="<?php echo isset($post['postdate'])?$post['postdate']:'';?>"/></td>
			<td width="157">Ngày hết hạn</td>
			<td width="293"><input type="text" name="outdate" id="outdate"value="<?php echo isset($post['outdate'])?$post['outdate']:'';?>" /></td>
		</tr>
		<tr>
			<td><p> Mô tả </p>
			<p>công việc</p></td>
			<td colspan="3"><textarea name="describer" id="describer" cols="70" rows="15"> <?php echo isset($post['describer'])?$post['describer']:'';?> </textarea></td>
		</tr>
		<tr>
			<td height="40">Số lượng</td>
			<td colspan="3"><input type="text" name="number" id="number"value="<?php echo isset($post['number'])?$post['number']:'';?> "/></td>
		</tr>
		<tr>
			<td height="66">&nbsp;</td>
			<td colspan="2">
            	<p>
					<input type="submit" name="edit" value=" Edit">
				</p></td>
    		<td>
            	<a href="http://localhost/studentneed/tinmoi"> 

					<p>
						<input name="Button" type="button"    value="Danh sách tin đã đăng">
					</p>        
				</a>
		</tr>
	</table>
</div>
</form>
</div>
