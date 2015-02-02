<?php

require_once 'libs/common.php';
require_once 'libs/dbaccess.php';

if (trim($_POST['shorten']) == NULL) // Check for an empty URL
{
    header("Content-Type: text/plain");
    echo 'ERROR: Empty URL';
}
elseif (strpos($_POST['shorten'], '.') === FALSE) // Check for a full stop in URL
{
    header("Content-Type: text/plain");
    echo 'ERROR: Invalid URL';
}
else
{
    $url=formatURL($_POST['shorten']);
    header("Content-Type: text/plain");
    echo encodeID(createURL($url)); // Returns the encoded ID of the URL that was created as plain text
}
?>