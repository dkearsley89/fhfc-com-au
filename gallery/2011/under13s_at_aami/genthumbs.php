<?php

/******************************************************

  FhImage

  Copyright (c) 2003 Flash-here.com (support@flash-here.com)

*******************************************************/


function resizejpg($imagefile,$w) 
{ 
    // check path to prevent illegal access to other files
    if(substr($imagefile, 0, 1) != '.' || strstr($imagefile, "..")) {
        echo "Illegal access!";exit;
    }

    // seems gif not supported by GD now
    $ext = substr($imagefile, -3);
    if(strtolower($ext) == "gif") { 
      if (!$src_img = imagecreatefromgif($imagefile)) {
        echo "Error opening Image file!";exit;
      }
    } else if(strtolower($ext) == "jpg") {
      if (!$src_img = imagecreatefromjpeg($imagefile)) {
        echo "Error opening Image file!";exit;
      }
    } else {
      echo "Error file type not supported!";exit;
    }

    $hw = getimagesize($imagefile); 
    $new_w = $w; 
    $new_h = $hw["1"]/($hw["0"]/$w);
    // truecolor supported only in GD 2.0 or later
    $dst_img = @imagecreatetruecolor($new_w, $new_h);
    if(!$dst_img) {
      $dst_img = imageCreate($new_w, $new_h);
    }

    imagecopyresized($dst_img,$src_img,0,0,0,0,$new_w,$new_h,imagesx($src_img),imagesy($src_img)); 
    imagejpeg($dst_img); 
    ImageDestroy($src_img); 
    ImageDestroy($dst_img); 
} 

header("Content-type: image/jpeg"); 

// in case register global is off
foreach($HTTP_GET_VARS as $key => $val) {
   $$key = $val;
   global $$key;
}

if ($w == ""){$w = "100";}
resizejpg("./".$image,$w);


?>
