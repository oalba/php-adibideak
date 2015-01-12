<?php
// https://www.dropbox.com/developers/core/start/php

// Include the Dropbox SDK libraries. Using Composer.
require 'vendor/autoload.php';

use Dropbox as dbx;

$accessToken = 'JgexMMUDIkcAAAAAAAAACXGWpyhMSARn7P2fQ-e_lH33iaUfr_fHSkXp7cfwL8p0';

//To test that we've got access to the Core API, try calling getAccountInfo() which will return an Array with information about the user's linked account:
$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$f = fopen("working-draft.txt", "rb");
$result = $dbxClient->uploadFile("/working-draft.txt", dbx\WriteMode::add(), $f);
fclose($f);
print_r($result);

//upload file

?>