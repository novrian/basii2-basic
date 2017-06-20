<?php

namespace app\models;

use Yii;
use yii\base\Model;
use NoYii\User\models\LoginForm as Login;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Login
{
}
