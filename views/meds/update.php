<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Meds */

$this->title = 'Update Meds: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Meds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
