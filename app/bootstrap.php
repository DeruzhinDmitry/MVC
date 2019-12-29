<?php session_start(); ?>
<?php
use App\Core\Route;

include PATH . '/app/autoloader.php';

Route::execute();
