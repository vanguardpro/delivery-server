<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

/* @var $this \yii\web\View */
/* @var $content string */

\backend\assets\BackendAsset::register($this);

$this->params['body-class'] = array_key_exists('body-class', $this->params) ?
    $this->params['body-class']
    : null;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body class="<?= ArrayHelper::getValue($this->params, 'body-class') ?> <?= 'skin-blue' ?>">
<?php $this->beginBody() ?>
    <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>