<?php

namespace app\assets\jui_bootstrap;

use yii\web\AssetBundle;

/**
 * @author Novrian <me@novrian.info>
 * @since 2.0
 */
class JuiBootstrapAsset extends AssetBundle
{

    public $sourcePath = '@app/assets/jui_bootstrap';

    public $css = [
        'assets/css/custom-theme/jquery-ui-1.10.3.custom.css',
    ];

    public $js = [
        'assets/js/jquery-ui-1.10.3.custom.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'dmstr\web\AdminLteAsset',
    ];

}
