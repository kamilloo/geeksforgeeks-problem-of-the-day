<?php

//composer autoload
require_once './vendor/autoload.php';

$number_of_bits = new \App\Console\Commands\MinimizeTheHeightsCommand();

$number_of_bits->execute();

die();
