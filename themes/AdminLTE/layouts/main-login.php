<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-page">

<?php $this->beginBody() ?>

<div class="login-box">
    <div class="login-logo">
        <?= Html::a("Yii Application Logo", Yii::$app->homeUrl, [ 'encode' => false ]) ?>
    </div><!-- .login-logo -->
    <div class="login-box-body">
        <?= $content ?>
    </div><!-- .login-box-body -->
</div><!-- .login-box -->

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
