<?php

namespace app\models;

use yii\web\IdentityInterface;
use NoYii\User\models\User as U;

class User extends U implements IdentityInterface
{
}
