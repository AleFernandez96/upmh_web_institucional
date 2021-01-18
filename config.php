<?php

$script_url = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'];

//$base_url = str_replace('index.php', '', $script_url);

$base_url = 'http://www.upmetropolitana.edu.mx/';

AppConfig::set('APP_DEBUG', FALSE);

AppConfig::set('BASE_URL', $base_url);
AppConfig::set('UPLOADS_URL', 'uploads/');

AppConfig::set('DB_HOST', 'localhost');
AppConfig::set('DB_USER', 'root');
AppConfig::set('DB_PASSWORD', 'web2011');
AppConfig::set('DB_NAME', 'upmetropolitana');
AppConfig::set('DB_LOG_QUERYS', FALSE);

AppConfig::set('EMAIL_CONTACTO_ACCOUNT', 'metropagina@upmh.edu.mx');
AppConfig::set('EMAIL_CONTACTO_PASSWD', 'xdxd3ywr');
AppConfig::set('EMAIL_CONTACTO_TO', 'afernandez@upmh.edu.mx');

AppConfig::set('CACHE_DIR', 'cache');
AppConfig::set('CACHE_EXPIRACION_INICIO', 000);
AppConfig::set('CACHE_EXPIRACION_NOTA', 604800);

AppConfig::set('CACHE_TIPO_INICIO', 1);
AppConfig::set('CACHE_TIPO_NOTA', 2);
