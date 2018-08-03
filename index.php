<?php

session_start();

include 'config/application.php';
include 'System/Helpers/autoload.php';
include 'System/Helpers/helpers.php';
include 'App/Helpers/functions.php';

include 'routes/web.php';

use System\Library\Route;

Route::parse();

Route::dispatch();