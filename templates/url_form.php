
<style type="text/css">

html body {
	margin-top: 100px !important;
}

#top_form {
	position: fixed;
	top:0;
	left:0;
	width: 100%;
	
	margin:0;
	
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	
	border-bottom:1px solid #151515;
	
    background:#FFC8C8;
	
	height:50px;
	line-height:25px;
}

#top_form input[name=url] {
	width: 550px;
	height: 10px;
	padding: 5px;
	font: 13px "Helvetica Neue",Helvetica,Arial,sans-serif;
	border: 0px none;
	background: none repeat scroll 0% 0% #FFF;
}



</style>

<script src="//www.php-proxy.com/assets/url_form.js"></script>

<div id="top_form">

	<div style="width:800px; margin:0 auto;">
	
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" value="Home" onclick="window.location.href='index.php'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" value="Go">
		</form>
    <form action="<?=$script_base;?>" method="post" target="_top"style="margin:0; padding:0;" >
      <input type="button" value="Home" onclick="window.location.href='<?=$script_base;?>'">
      <input name="google" type="text" style="width:400px;" autocomplete="off" />
      <input type="hidden" name="form" value="1">
      <input type="submit" value="Google" />
    </form>
		
	</div>
	
</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>
