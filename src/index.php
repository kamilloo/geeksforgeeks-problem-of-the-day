<?php

//composer autoload
require_once './vendor/autoload.php';

$simmetric_tree_command = new \App\Console\Commands\SymmetricTreeCommand();

$simmetric_tree_command->execute();

die();
