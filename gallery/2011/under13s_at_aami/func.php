<?php

/******************************************************

  FhImage

  Copyright (c) 2003 Flash-here.com (support@flash-here.com)

*******************************************************/

/* 
 * show an image thumbnail
 * if aSubDir is not empty, the thumbnail should be the first image of 
 * a sub folder. So the corresponding link should open the directory...
 *
 */
function showImg($aPath, $aFn, $aIdx, $aThisPage, $aSubDir="")
{
  global $g_twidth, $g_dispFn, $g_thumb_worh, $g_showInPopup, $g_popupWidth, $g_popupHeight, $g_shrinkPopup;

  $fullpath = $aPath.$aFn;

  // find the width and height of the thumbnail
  $imgsize = GetImageSize($fullpath);
  if($g_thumb_worh == 'w') {
    $twidth = $g_twidth;
    $theight = $imgsize[1] / ($imgsize[0]/$twidth);
  } else {
    $theight = $g_twidth;
    $twidth = $imgsize[0] / ($imgsize[1]/$theight);
  }

  // generate the html
  echo "<td>";
  if($aSubDir != "") {
    echo "<center><a href=\"$PHP_SELF?path=$aPath\"><img border=\"0\" width=\"$twidth\" height=\"$theight\" src=\"genthumbs.php?image=$fullpath&w=$twidth\"></img></a></center>";
  } else {
    // need scrollbar?
    $sb = "yes";
    if($g_showInPopup == 'check') {
      $w = $g_popupWidth;
      $h = $g_popupHeight;
      if($g_shrinkPopup == 'check') {
        $picsize = GetImageSize($aPath.$aFn);
        if($picsize[0]+10 < $w && $picsize[1]+10 < $h) {
          $w = $picsize[0]+10;
          $h = $picsize[1]+10;
          $sb = "no";
        }
		
      }
      echo "<center><a href=# onclick=\"javascript:window.open('$aPath$aFn', '_blank', 'width=$w, height=$h, scrollbars=$sb');return false\"><img border=\"0\" width=\"$twidth\" height=\"$theight\" src=\"genthumbs.php?image=$fullpath&w=$twidth\"></img></a></center>";
      
    } else
      echo "<center><a href=\"$PHP_SELF?path=$aPath&page=$aThisPage&img=$aFn&idx=$aIdx\"><img border=\"0\" width=\"$twidth\" height=\"$theight\" src=\"genthumbs.php?image=$fullpath&w=$twidth\"></img></a></center>";
  }

  // display filename?
  if($g_dispFn) {
    echo "<br><center>";
    if($aSubDir == "") {
      $l = strlen($aFn) - 4;
      echo substr($aFn, 0, $l);
    } else {
      echo $aSubDir."[dir]";
    }
    echo "</center>";
  }
  echo "</td>";

}

/*
 * show the image in real size
 */
function showBigImg($aPath, $aIdx)
{
  global $files, $isDir; 

  echo "<center>";
  echo "<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\">";

  if($isDir[$files[$aIdx]]) {
    showDir($aPath, $files[$aIdx]);
  } else {
    // generate the html
    echo "<td>";
    echo "<center><img border=\"0\" src=\"".$aPath.$files[$aIdx]."\"></img></center>";
    echo "</td>";

    echo "</table>";
    echo "</center>";
  }
}

/*
 * get the filename of the first image from a folder
 */
function getFirstImgFn($aPath, $aExt)
{
  $dir_handle = @opendir($aPath) or die("Unable to open $aPath");

  while($file = readdir($dir_handle)) {
    $fullpath = $aPath.$file;

    if(is_dir($fullpath) == false) {
      $ext = substr($file, -4);
      if(strtolower($ext) == $aExt) {
        return $file;
      }
    }
  }
  /*
   * return empty if no img exists.
   */
  return "";
}

/*
 * get the filename of a random image from a folder
 */
function getRandomImgFn($aPath, $aExt)
{
  $dir_handle = @opendir($aPath) or die("Unable to open $aPath");

  $imgfiles = array();
  while($file = readdir($dir_handle)) {
    $fullpath = $aPath.$file;

    if(is_dir($fullpath) == false) {
      $ext = substr($file, -4);
      if(strtolower($ext) == $aExt) {
        $imgfiles[] = $file;
      }
    }
  }
  
  $num = count($imgfiles);
  if($num <= 0) {
    /*
     * return empty if no img exists.
     */
    return "";
  }

  /* 
   * randomly pick one
   */
  $idx = rand(0, $num-1);
  return $imgfiles[$idx];  
  
}

/*
 * show the thumb / image of a folder
 */
function showDir($aPath, $aFn)
{
  global $g_showFirstThumb, $g_folderImg;
  $fullpath = $aPath.$aFn."/";
  
  // 3 --> first jpg image, 4 --> random jpg image
  if($g_folderImg == '3' || $g_folderImg == '4') {
     $fn = "";
     if($g_folderImg == '3')
       $fn = getFirstImgFn($fullpath, '.jpg');
     else
       $fn = getRandomImgFn($fullpath, '.jpg');	
		
     if($fn != "") {
       showImg($fullpath, $fn, "0", "0", $aFn);
       return;
     }
  }

  echo "<td>";
  $done = false;
  // 2 --> first gif image
  if($g_folderImg == '2') {
    $fn = getFirstImgFn($fullpath, '.gif');
    if($fn != "") {
      $imgsize = GetImageSize($fullpath.$fn);
      echo "<center><a href=\"$PHP_SELF?path=$fullpath\"><img border=\"0\" width=\"$imgsize[0]\" height=\"$imgsize[1]\" src=\"$fullpath$fn\"></img></a></center>";
      $done = true;
    }
  }
  
  // default is folder.gif
  if($done == false) {
    $imgsize = GetImageSize("folder.gif");
    echo "<center><a href=\"$PHP_SELF?path=$fullpath\"><img border=\"0\" width=\"$imgsize[0]\" height=\"$imgsize[1]\" src=\"folder.gif\"></img></a></center>";
  }
  
  echo "<br><center>$aFn</center>";
  echo "</td>";

}

/*
 * show 1 row of thumbs
 */
function showImgRow($aPath, $aFiles, $aIsDir, $aThisPage, $aStart, $aEnd)
{
  echo "<tr>";
  for($i=$aStart; $i<$aEnd; $i++) {
    if($aIsDir["_".$aFiles[$i]]) {
      showDir($aPath, $aFiles[$i]);
    } else {
      showImg($aPath, $aFiles[$i], $i, $aThisPage);
    }
  }
  echo "</tr>";
}

/*
 * show the whole table of thumbs
 */
function showImgTable($aPath, $aFiles, $aIsDir, $aThisPage,
	$aNumCols, $aNumRows)
{
  global $g_spacing;
  
  $numPerPage = $aNumRows * $aNumCols;
  $totalFiles = count($aFiles);
  $start = $aThisPage * $numPerPage;
  $end = $start + $numPerPage;
  $end = min($end, $totalFiles);

  echo "<center>";
  echo "<table border=\"0\" cellspacing=\"$g_spacing\" cellpadding=\"0\">";

  while($start < $end) {
    $e = min($start + $aNumCols, $end);
    showImgRow($aPath, $aFiles, $aIsDir, $aThisPage, $start, $e);
    $start += $aNumCols;
  }

  echo "</table>";
  echo "</center>";
}

/*
 * show the links to different pages
 */
function showPageLinks($aPath, $aNumFiles, $aThisPage, $aIdx, $aNumCols, $aNumRows)
{
  global $files;
  $numPerPage = $aNumCols * $aNumRows;
  $numPages = ceil($aNumFiles / $numPerPage);

  /*
   * reverse finding '/' start from the second last char
   * since the last char must be '/'
   */
  $pdir = "";
  $plen = strlen($aPath);
  for($j=$plen-2; $j>0; $j--) {
    if($aPath[$j] == '/') {
      $pdir = substr($aPath, 0, $j+1);
      break;
    }
  }

  echo "<br><center>";
  echo "<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\">";
  echo "<tr>";
  if($aIdx != "") {
    // Showing back link
    echo "<td><a href=\"$PHP_SELF?path=$aPath&page=$aThisPage\">Back To Thumbs</a></td>";
    // show prev, next link
    if($aIdx > 0) {
      $idx = $aIdx - 1;
      echo "<td><a href=\"$PHP_SELF?path=$aPath&page=$aThisPage&idx=$idx\">&lt;</a></td>";
    }
    if($aIdx + 1 < count($files)) {
      $idx = $aIdx + 1;
      echo "<td><a href=\"$PHP_SELF?path=$aPath&page=$aThisPage&idx=$idx\">&gt;</a></td>";
    }
  } else {
    // show the up link
    if($pdir != "") {
      echo "<td><a href=\"$PHP_SELF?path=$pdir\">UP</a></td>";
    }
    // show the page links
    if($numPages == 0) {
      echo "<td>No image in this folder</td>";
    } else { 
      // show only 10 pages
      $minp = 0;
      $maxp = 10;
      if($numPages > 10) {
        $minp = floor($aThisPage/10) * 10;
        $maxp = ceil(($aThisPage+1)/10) * 10;
      }
      $maxp = min($maxp, $numPages);

      echo "<td>page:</td>";

      // show the prev link
      if($minp >= 10) {
        $prevp = $minp - 1;
        echo "<td><a href=\"$PHP_SELF?path=$aPath&page=$prevp\">&lt;</a></td>";
      }

      // show page no(s)
      for($i=$minp; $i<$maxp; $i++) {
        $p = $i + 1;
        if($aThisPage == $i) {
          echo "<td><b>$p</b></td>";
        } else {
          echo "<td><a href=\"$PHP_SELF?path=$aPath&page=$i\">$p</a></td>";
        }
      }

      // show the next link
      if($maxp < $numPages) {
        $nextp = $maxp;
        echo "<td><a href=\"$PHP_SELF?path=$aPath&page=$nextp\">&gt;</a></td>";
      }
    }
  }
  echo "</tr>";
  echo "</table>";
  echo "</center>";
}

// case insensitive comparison
function cicmp($a, $b)
{
  return strcasecmp($a, $b);
}


/*
 * read file / dir names from a directory 
 */
function readFiles($aPath, &$aFiles, &$aIsDir)
{

  global $g_sortByFn, $g_insensitive_sort;
  $confdir = "imgconfig";

  $dir_handle = @opendir($aPath) or die("Unable to open $aPath");

  while($file = readdir($dir_handle)) {
    $fullpath = $aPath.$file;

    if(is_dir($fullpath)) {
      if($file != '.' && $file != '..' && $file != $confdir) {
        $aFiles[] = $file;
        $tmparray = array("_".$file => true);
        $aIsDir = array_merge($aIsDir, $tmparray);
      }
    } else {
      $ext = substr($file, -4);
      if($file[0] != '.' && (strtolower($ext) == '.jpg')) {
        $aFiles[] = $file;
        $tmparray = array("_".$file => false);
        $aIsDir = array_merge($aIsDir, $tmparray);
      }
    }
    if($g_sortByFn == 'check') {
	  if($g_insensitive_sort == 'check') {
	  	usort($aFiles, "cicmp");
	  } else {
        sort($aFiles);
	  }
    }
  }

  closedir($dir_handle);
}

function adjustPath($aPath)
{
  $ret = $aPath;
  if(!$ret)
    $ret = "./";
  if(substr($ret, -1) != "/")
  $ret = $ret.'/';

  // reset to home, if illegal access
  if(substr($ret, 0, 1) != '.' || strstr($ret, "..")) {
    $ret= './';
  }
  
  return $ret;
}

?>
