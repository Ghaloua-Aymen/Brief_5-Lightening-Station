<?php 

// Set your website title.
define('WEBSITE_TITLE', "My Website");

// Set database variables.
define('DB_TYPE','mysql');
define('DB_NAME','lighteningstation');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

// Protocal type http or https.
define('PROTOCAL','http');

// Root and asset paths.
$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));

// Set to true to allow error reporting set to false when you upload online to stop error reporting.
define('DEBUG',true);
if(DEBUG)
{
    ini_set("display_errors",1);
}

else
{
	ini_set("display_errors",0);
}