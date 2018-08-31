<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flagstaff Hill F.C</title>
<link href="http://www.fhfc.com.au/pictures/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" media="screen" type="text/css" href="../css/fhfc.css" />
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div class="site-wrapper">
<? require("../main/header.htm") ?>
  <div class="body-wrapper">
  <? require("../main/left_menu.htm") ?>
    <div class="content-wrapper">
      <div class="panelBackgroundTop">
        <div class="panel_title">News Page Updater</div>
      </div>
      <div class="panel">
        <div class="panel_content">
<?php
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$titleSize = "";
$titleSizeErr = "";
$titleContent = "";
$titleContentErr = "";
$content = "";
$contentErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["titleSize"]))
  {
    $titleSizeErr = "Title Size is required!";
  }
  else
  {
    $titleSize = test_input($_POST["titleSize"]);
  }
  if (empty($_POST["titleContent"]))
  {
    $titleContentErr = "Title Content is required!";
  }
  else
  {
    $titleContent = test_input($_POST["titleContent"]);
  }
  if (empty($_POST["content"]))
  {
    $contentErr = "Content is required!";
  }
  else
  {
    $content = test_input($_POST["content"]);
  } 
}
?>
<br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Title Size:<span class="error">*</span> <input type="radio" name="titleSize" <?php if (isset($titleSize) && $titleSize=="small") echo "checked";?>  value="small">Small
<input type="radio" name="titleSize" <?php if (isset($titleSize) && $titleSize=="large") echo "checked";?>  value="large">Large
<br><span class="error"><?php echo $titleSizeErr;?></span>
<br><br>
Title:<span class="error">*</span> <input type="text" name="titleContent" value="<?php echo $titleContent;?>" size="40">
<br><span class="error"><?php echo $titleContentErr;?></span>
<br><br>
Content:<span class="error">*</span> <textarea name="content" rows="8" cols="70"><?php echo $content;?></textarea>
<br><span class="error"><?php echo $contentErr;?></span>
<br><br>
<input type="submit" name="preview" value="Preview">
<?php
$htmlTitleSize = "";
$finalHtml == "";
if((isset($_POST['preview']) || isset($_POST['submit'])) && ($contentErr == "" && $titleContentErr == "" && $titleSizeErr == ""))
{
  if (htmlspecialchars($titleSize) == "small")
  {
    $htmlTitleSize = ' class="newsHeaderSmall"';
  }
  else if (htmlspecialchars($titleSize) == "large")
  {
    $htmlTitleSize = ' class="newsHeaderLarge"';
  }
$finalHtml = "<p" . $htmlTitleSize . ">" . htmlspecialchars($titleContent) . "</p><p>" . nl2br(htmlspecialchars($content)) . "</p><p>&nbsp;</p>";
echo $finalHtml;
echo '<br><input type="submit" name="submit" value="Submit">';
}
if (isset($_POST['submit']))
{
$file = 'news.htm';
$current = file_get_contents($file);
$current = str_replace('<div class="panel_content">', '<div class="panel_content">' . $finalHtml, $current);
file_put_contents($file, $current);
echo "<br>Submited!";
}
?>
</form>
        </div>
      </div>
      <div class="panelBackgroundBottom">&nbsp;</div>
    </div>
    <div class="rightMenu">
      <div class="rightSubMenuTop"></div>
      <div class="rightSubMenu">
        <div class="rightSectionHeader">News Menu</div>
        <ul>
          <li><a href="../news/news.htm">Current News</a></li>
          <li><a href="../news/calendar_of_events.htm">Calendar Of Events</a></li>
          <li><a href="../news/falcons_in_the_news.htm">Falcons In The News</a></li>
          <li><a href="../news/archives.htm">News Archives</a></li>
        </ul>
      </div>
      <div class="rightSubMenuBottom"></div>
      <? require("../main/sponsors.htm") ?>
    </div>
  </div>
  <? require("../main/footer.htm") ?>
</div>
</body>
</html>