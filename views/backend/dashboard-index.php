<?php
use yii\web\Session;

$session = new Session;
// @DEBUG
foreach ($session as $key => $val) {
    var_dump($key, $val);
}
?>
