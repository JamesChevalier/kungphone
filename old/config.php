<?php
if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

/* Begin Config */
// FQDN to the server hosting the database:
$db_host = 'db.kungphone.net';

// Database admin username:
$db_user = 'kungphonedbadmin';

// Database admin password:
$db_pass = 'tvVCKz3ha4YFby';

// Database name:
$db_database = 'kungphonedb';

// This site's domain name, including the www. if required (ie: google.com):
$sitedomain = 'kungphone.net';

// Title tag for the site:
$sitetitle = 'Kung Phone';

// Keywords for the site:
$sitekeywords = 'kungphone, iPhone, app, game';

// Description for the site, also used in Tweet (for now) so keep it short!:
$sitedescription = 'Kung Phone is Kung Fu for your iPhone';

// Blurb about site, displayed on main page:
$siteblurb = 'Kung Phone: Kung Fu for your iPhone';

// Google Analytics code for the site:
$sitegoogleanalytics = 'UA-6651820-19';

// Google Webmaster Tools:
$sitegooglewebmastertools = 'GWymg-GDbShH8fJJesLzZfV6UQ3-OL0IN_4CEcth04I';

// Twitter name for site:
$twittername = 'KungPhone';
/* End Config */

$link = mysql_connect($db_host,$db_user,$db_pass) or die("Could not connect: " . mysql_error());
mysql_select_db($db_database,$link);
?>
