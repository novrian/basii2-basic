<?php

/**
 * Cek file db-dev.php (konfigurasi db development)
 * jika ada maka db-dev.php yang diload
 */
if (file_exists(__DIR__ . '/db-dev.php')) {
    return require(__DIR__ . '/db-dev.php');
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
