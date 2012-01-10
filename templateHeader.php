<?php
function generateHeader ($cat, $date) {
return <<<HTML
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Fluffy Muffin: Comics</title>
  <meta name="description" content="comic, college, life, post college, undergrad, humor, true">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/pages.css">
  <link rel="stylesheet" href="css/comic.css">
  <!-- end CSS-->

  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body class="background">

<div id="container">
    <header>

    </header>
	<div class="sidebar">
		<div id="logo"><a class="logo" href="index.html"></a>
		</div>
		<div id="avatar"><a href="about.html"><img src="img/Avatars/alice avatar.jpg" height="150px" width="150px" title="alice"/></a>
		</div>
		<div id="avatar"><span class="date">$date</span>
		<div id="avatar">
			<a href="https://www.facebook.com/pages/Fluffy-Muffin/270127326368214"><img src="img/facebook button.png" title="Fluffy Muffin Facebook"/></a>
			<a href="http://twitter.com/fluffymuffinmix"><img src="img/twitter button.png" title="@fluffymuffinmix"/></a>
			<a href="http://fluffymuffinmix.tumblr.com/"><img src="img/tumblr button.png" title="fluffymuffinmix.tumblr.com"/></a>
		</div>
		</div>
	</div>


HTML;
}
?>