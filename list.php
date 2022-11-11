<?php
require "vendor/autoload.php";
use StudentHandler;

$handler = new StudentHandler;

$records = $handler->getList();
