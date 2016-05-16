<?php
use yii\helpers\Html;
use common\models\SiteModel;
?>

  <?= Html::a(Html::encode($model->sitename), ['sites/view', 'id' => $model->id])  ?>




