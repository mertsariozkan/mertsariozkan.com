<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Mert Sarıözkan</title>
</head>

<body>
    
    <div class="contentBox" style="margin-top:100px">
    	<div class="innerBox" style="padding:30px; text-align:center;">
        	<?php
				include("setting.php");
				session_start();
				if(!isset($_SESSION["login"])){
				echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
				}else{
			?>
				<form action="result_blog.php" method="POST">
					<input type="text" name="blogname"><br><br>
					<textarea name="blogtext" rows="50" cols="85"></textarea><br><br>
					<input type="submit" value=" Kaydet ">
				</form>
				<?php
				}
			?>
		</div>
	</div>
        
</body>
</html>
