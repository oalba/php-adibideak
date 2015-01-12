<?php
// https://www.dropbox.com/developers/core/start/php

// Include the Dropbox SDK libraries. Using Composer.
require 'vendor/autoload.php';

use Dropbox as dbx;

$accessToken = 'JgexMMUDIkcAAAAAAAAACXGWpyhMSARn7P2fQ-e_lH33iaUfr_fHSkXp7cfwL8p0';

//To test that we've got access to the Core API, try calling getAccountInfo() which will return an Array with information about the user's linked account:
$dbxClient = new dbx\Client($accessToken, "PHP-Example/1.0");
$f = fopen("downloaded-working-draft.txt", "w+b");
$fileMetadata = $dbxClient->getFile("/working-draft.txt", $f);
fclose($f);
print_r($fileMetadata);
//upload file

?>