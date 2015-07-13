<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model nullref\category\models\Category */
/** @var $manager \nullref\core\components\EntityManager */

$this->title = Yii::t('category', 'Create Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('category', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'manager' => $manager,
    ]) ?>

</div>