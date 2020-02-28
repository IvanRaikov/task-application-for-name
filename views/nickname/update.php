<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NickName */

$this->title = 'Update Nick Name: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Nick Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nick-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
