<?php
session_start();
use App\Core\Route;

include PATH . '/app/autoloader.php';

Route::execute();
