<?php
error_reporting( E_ALL );
ini_set( "display_errors",1);
$title = "Beginning PHP 8 & MySQL";
$content = "Here is the main content for this page";

$html ="
<!doctype html>

<html lang='en'>
<head>
  <meta charset='utf-8'>

  <title>$title</title>
  <meta name='description' content='Basic HTML5 Page'>
  <meta name='author' content='Your name'>

  <link rel='stylesheet' href='css/styles.css?v=1.0'>

</head>

<body>
$content
</body>
</html>";

echo $html;
