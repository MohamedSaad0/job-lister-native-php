<?php
// Include only the autoloader file
include_once 'config/init.php';

$template = new Template('templates/frontpage.php');

// Add Dynamic Values To The View - by echo title as a var within frontpage.php 
$template->title = 'Front Page';

echo $template;
