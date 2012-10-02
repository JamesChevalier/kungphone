<?php
	define('INCLUDE_CHECK',1);
	require "config.php";
	$uri= mysql_real_escape_string($_GET["code"]); // Checks for 4-digit invite code in URI
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $sitetitle; ?></title>
	<meta name="keywords" content="<?php echo $sitekeywords; ?>"/>
	<meta name="description" content="<?php echo $sitedescription; ?>"/>
	<meta name="google-site-verification" content="<?php echo $sitegooglewebmastertools; ?>" />
	<link rel="stylesheet" href="style.css" type="text/css">
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', '<?php echo $sitegoogleanalytics; ?>']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script>
</head>
<body>

	<div id="top">
	</div>

	<div id="outer">

		<h1><?php echo $sitetitle; ?></h1>
		<p><?php echo $siteblurb; ?></p>
		<form action="interested.php" method="post" id="collect">
		<p><input type="text" size=50 name="email" id="email" value=""> <input type="submit" value="I'm Interested"></p>
		<input type="hidden" name="uri" value="<?php echo $uri; ?>">
		</form>
		<p class="tiny">(We're sort of on <a href="http://twitter.com/<?php echo $twittername; ?>" target="_blank">Twitter</a>.)</p> 

	</div>

	<div id="bottom">
	</div>

</body>
</html>
