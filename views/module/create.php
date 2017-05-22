<?php
#Copyright (c) 2017 Rafal Marguzewicz pceuropa.net
use yii\helpers\Html;

$this->title = 'Form generator Yii2';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'All forms') , 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Your forms') , 'url' => ['user']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Form create');


echo \pceuropa\forms\FormBuilder::widget([
		'test_mode' => false,
		'easy_mode' => false
]);
?>
