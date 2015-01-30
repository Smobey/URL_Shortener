<?php

require_once 'libs/common.php';
require_once 'libs/dbaccess.php';

$id = decodeID($_GET['u']);

$url = fetchURL($id);

if ($url == NULL)
{
    header("Location: shortener.php?error=1");
}
else
{
    header("Location: " . $url->URL);
}