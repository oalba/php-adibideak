<?php
# Include the Dropbox SDK libraries. Using Composer.
require 'vendor/autoload.php';

use Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJsonFile("./config.json");
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "PHP-Example/1.0");

?>
