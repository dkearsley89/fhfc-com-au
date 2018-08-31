<head>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">


<?php

/******************************************************

  FhImage

  Copyright (c) 2003 Flash-here.com (support@flash-here.com)

*******************************************************/

  if (is_file("./settings.php")) {
    include("settings.php");
  }
  if (is_file("./styles.php")) {
    include("styles.php");
  }

  global $g_bgcolor, $g_titlecolor, $g_desccolor;

?>



<?php
  
  // in case register global is off
  foreach($HTTP_GET_VARS as $key => $val) {
     $$key = $val;
     global $$key;
  }

  global $files, $isDir, $g_twidth, $g_cols, $g_rows, $g_title, $g_desc, $g_dispFn, $g_sortByFn, $g_folderImg, $g_showInPopup, $g_popupWidth, $g_popupHeight;

  include("func.php");
  $path = adjustPath($path);
  if(!$page)
    $page = 0;


  if(!$g_cols)
    $g_cols = 4;
  if(!$g_rows)
    $g_rows = 1;
  if(!$g_title)
    $g_title = "Image Gallery";
  if(!$g_twidth)
    $g_twidth = 100;

  $files = array();
  $isDir = array("." => false);
  @readFiles($path, $files, $isDir);
?>

<title>Flagstaff Hill F.C - <?php echo $g_title; ?></title>
</head>
<html>

<body <?php if($g_textcolor != "") echo "text=\"$g_textcolor\" ";
        if($g_linkcolor != "") echo "link=\"$g_linkcolor\" ";
        if($g_vlinkcolor != "") echo "vlink=\"$g_vlinkcolor\" "; ?> >

<div align="center">
<table border="0" cellspacing="0" cellpadding="10">
	<tr>
		<td>
		<div align="center" class="headline"><?php echo $g_title; ?></div>
		</td>
	<tr>
		<td>
		<p>
		<div align="center">
		<?php
			@showPageLinks($path, count($files), $page, $idx,
				$g_cols, $g_rows);
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		<?php
			if ($idx == "") {
			  @showImgTable($path, $files, $isDir, $page,
				$g_cols, $g_rows);
			} else {
			  @showBigImg($path, $idx);
			}
		?>
		</td>
	</tr>
</table>
</div>
</body>
</html>
