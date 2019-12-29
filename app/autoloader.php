<?php
define('CLASS_DIR', '/app/');
set_include_path(get_include_path() . PATH_SEPARATOR . dirname(__FILE__) . CLASS_DIR);
spl_autoload_extensions('.php');
spl_autoload_register();