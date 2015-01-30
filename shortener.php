<?php

require_once 'libs/common.php';

$error=$_GET['error'];

showView('shortener_view.php', array('error' => $error));