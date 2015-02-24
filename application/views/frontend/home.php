<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url();?>"></base>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link href="<?php echo base_url();?>public/frontend/css/layout.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/frontend/css/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/frontend/css/css/table.css" rel="stylesheet">
	<link href="<?php echo base_url();?>public/frontend/css/css2/style.css" rel="stylesheet">
	<style type="text/css"></style>
</head>
<body>
<div id="wrapper">
	<div id="wrapper">
    	<div id="header">
        	<?php $this->load->view('frontend/modules/header.php');?>
        </div>
        <div id="content">
        </div>
        <div id="footer">
		</div>
	</div>
</div>
</body>
</html>