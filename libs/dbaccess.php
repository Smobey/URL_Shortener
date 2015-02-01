<?php
require_once 'libs/dbconnect.php';
require_once 'libs/common.php';

function createURL($url) // Checks if DB already has the URL; if it does, it returns its ID. If it doesn't, it creates a database entry and then returns its ID.
{
    $sql = "SELECT ID, URL FROM URLs WHERE URL = ? LIMIT 1";
    $query = getConnection()->prepare($sql);
    $query->execute(array($url));
    
    $result = $query->fetchObject();
    
    if ($result == null) 
    {
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO URLs(URL, Creationdate) VALUES(?,?)";
		$connection = getConnection();
		$query = $connection->prepare($sql);
		$query->execute(array($url, $date));
		$ok = $connection->lastInsertId();
        
        return $ok;
    } 
    else
    {
        return $result->ID;
    } 
}

function fetchURL($url) // Fetches the database ID of an URL, returning the database entry as a whole (and naturally returns NULL if the ID doesn't exist in the database)
{
    $sql = "SELECT URL FROM URLs WHERE ID = ? LIMIT 1";
    $query = getConnection()->prepare($sql);
    $query->execute(array($url));
    
    $result = $query->fetchObject();
    
    return $result;
}

function directToURL($id) // Takes the *decoded* ID of an URL as a parameter, and 301 redirects the user to the URL if the ID is valid. If it's not, it gives a 404 error.
{
    $ini_array = parse_ini_file("./config.ini");
    $notfound_page = $ini_array[notfound_page];
    $url = fetchURL(decodeID($id));

    if ($url == NULL)
    {
        header("HTTP/1.1 404 Not Found");
        include($notfound_page);
    }
    else
    {
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: " . $url->URL);
    }
}