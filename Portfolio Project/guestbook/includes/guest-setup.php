<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Connect to DB
require ($_SERVER['DOCUMENT_ROOT'].'/../guestconnect.php');
$cnxn = connect();