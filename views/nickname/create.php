<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NickName */

$this->title = 'Create Nick Name';
$this->params['breadcrumbs'][] = ['label' => 'Nick Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nick-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
