<?php
require_once 'libs/common.php';

$ini_array = parse_ini_file("./config.ini");
$path = $ini_array[u_path];

?>Success! The following URL:<br><br><b>
<?echo $data->url;?></b><br><br>has been shortened into:<br><br><b>
<?echo 'http://'. $_SERVER['HTTP_HOST'] . $path . '?u=' . encodeID($data->result);?></b><?

?>
<br>
<br>
<a href="shortener.php">Go back</a>