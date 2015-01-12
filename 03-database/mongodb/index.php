<?php
// connect

$m = new MongoClient("mongodb://test:test@ds033400.mongolab.com:33400/zmwebdev-test");

$db = $m->selectDB('zmwebdev-test');

$collection = $db->books;
// add a record
$document = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
$collection->insert($document);

// add another record, with a different "shape"
$document = array( "title" => "XKCD", "online" => true );
$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();

foreach ( $cursor as $id => $value )
{
    echo "$id: ";
    var_dump( $value );
}

// iterate through the results
/*
foreach ($cursor as $document) {
    echo $document["title"] . "\n";
}
*/

// more examples
// http://php.net/manual/en/mongocollection.find.phphttp://php.net/manual/en/mongocollection.find.php
?>