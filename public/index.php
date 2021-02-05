<?php
require_once '../vendor/autoload.php';

var_dump(Hillel\str::after('My name is Ibragim', 'name'));
var_dump(Hillel\str::afterLast('App\Http\Controllers\Controller', '\\')); // 'Controller'
    ?>