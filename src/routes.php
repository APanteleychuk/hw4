<?php

use Vendor\Univer\Controllers;

Route::get('/', function()
{
    $universityController = new Controllers\UniversityController();
    $universityController->indexAction();
});

