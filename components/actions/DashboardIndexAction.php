<?php

namespace app\components\actions;

use Yii;
use yii\base\Action;

class DashboardIndexAction extends Action
{

    public function run()
    {
        return $this->controller->render('@app/views/backend/dashboard-index');
    }

}
