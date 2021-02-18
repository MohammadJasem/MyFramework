<?php

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(dirname(__FILE__)));
define('ROOT_URI', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));

require_once(ROOT.DS.'lib'.DS.'init.php');
