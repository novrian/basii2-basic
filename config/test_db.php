<?php
$db = require(__DIR__ . '/db.php');
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'mysql:host=10.0.2.2;dbname=basii2_basic_test';

return $db;
