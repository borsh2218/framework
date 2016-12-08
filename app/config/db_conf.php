<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => 'ovl.io',
    'user' => 'borsh2218',
    'pass' => 'Mamadu1971',
    'name' => 'borsh2218'
));
$config->connect();
unset($config);