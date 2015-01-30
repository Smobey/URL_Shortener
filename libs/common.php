<?php
function showView($sivu, $data = array())
{
	$data = (object)$data;
	require 'views/template.php';
	exit();
}

function encodeID($id)
{
    return base_convert($id, 10, 36);
}

function decodeID($id)
{
    return base_convert($id, 36, 10);
}

function formatURL($url)
{
    $url = trim($url);
    if(strpos($url, 'http://') === FALSE)
        $url = 'http://' . $url;
    return $url;
}