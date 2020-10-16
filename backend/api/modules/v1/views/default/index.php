<?php


use api\assets\swagger\SwaggerAsset;
use yii\helpers\Html;

$sa = SwaggerAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="root"></div>
<script>
    const ui = SwaggerUIBundle({
        url: 'openapi3.yml',
        dom_id: '#root'
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
