<?php
	function convert($url){
     $filename=time();
     $filename="pdf/".$filename.".pdf";
     exec("/usr/bin/xvfb-run -a -s '-screen 0 1280x1080x16' /usr/bin/wkhtmltopdf '$url' $filename");
     return $filename;
  }
  
	$file = convert($_GET["url"]);
  echo "<a href=\"#\" onclick=\"window.open('$file ', 'pdf');\">開啟檔案</a>";
  echo "<br>";
  echo "<a href=\"javascript:history.back()\">回上一頁</a>"
?>
