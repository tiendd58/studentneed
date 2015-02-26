<table width="500" border="0">
	<tr>
    	<td width="512" height="50">
        	<div align="center">
            	<strong>CÁC TIN ĐÃ ĐĂNG</strong>
            </div>	
        </td>
	</tr>
</table>
<div >
	<table width="594" border="1" id="customers">
		<tr>
    		<td width="401"><div align="center">Tiêu đề</div></td>
    		<td width="80"><div align="center">Ngày đăng</div></td>
    		<td colspan="2"><div align="center">Quản lý</div></td>
		</tr>
<?php
	if(isset($post) && count($post))
		foreach($post as $val){
			$id=$val['idpost'];
			
?>
	<tr>
		<td><?php echo $val['title']?></td>
		<td><?php echo $val['postdate']?></td>
		<td width="44">
			<div align="center">
			  <a href="<?php echo "http://localhost/studentneed/suatin/edit/".$val['idpost'] ?>">
   			  <img src="public/frontend/images/b_edit.png" />
       			</a> 
        	</div>
		</td>	
        <td width="41"><a href="<?php echo "http://localhost/studentneed/suatin/delete/".$val['idpost'] ?>"><img src="public/frontend/images/b_drop.png" /></a></td>
	</tr>
<?php
	}
?>
</table>
</div>     