<?php

require_once 'libs/common.php';
require_once 'libs/dbaccess.php';

if (trim($_POST['shorten']) == NULL) // Check for an empty URL
    header("Location: shortener.php?error=2");
if (strpos($_POST['shorten'], '.') === FALSE) // Check for a full stop in URL
    header("Location: shortener.php?error=1");

$url=formatURL($_POST['shorten']);

$result = createURL($url);
showView('createurl_view.php', array('url' => $url, result => $result));