<?php
// Autoloader 
// Instead of having multiple requires and includes the autoloader will require the class once its instantiated

// Config File
require_once 'config.php';

spl_autoload_register(function ($class_name) {
    require_once 'lib/' . $class_name . '.php';
});