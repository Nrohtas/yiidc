<?php
$this->title = " รายงาน NCD ";
$this->params['breadcrumbs'][] = ['label'=>'รายงานของอำเภอ...','url'=>['/plk00/default/index']];
$this->params['breadcrumbs'][] = "รายงาน NCD"

?>


<?php
use kartik\grid\GridView;
echo GridView::widget([    
    'dataProvider'=>$dataProvider,
    'panel'=>['before'=>'รายงาน......'],
    'formatter' => [
        'class' => 'yii\i18n\Formatter',
        'nullDisplay' => '-'
    ],
]);

?>

