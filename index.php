<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="expires" content="0">
	
</head>

<body>
<?php

date_default_timezone_set("America/Mexico_City");

require_once('Slim/Slim.php');
require_once('Slim/Middleware.php');
require_once('lib/appconfig.php');
require_once('config.php');
require_once('lib/appresources.php');
require_once('lib/pagehelpers.php');
require_once('lib/socialhelpers.php');

	 
use \Slim\Slim;

Slim::registerAutoloader();

$app = new Slim();
$app->config('debug', AppConfig::get('APP_DEBUG'));
require_once ('routes.php');


$app->run();
?>


</body>
</html>



