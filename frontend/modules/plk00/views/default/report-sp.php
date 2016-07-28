<?php
$this->title = " รายงาน Specialpp ";
$this->params['breadcrumbs'][] = ['label'=>'รายงานของอำเภอ...','url'=>['/plk00/default/index']];
$this->params['breadcrumbs'][] = "รายงาน Specialpp"

?>


<?php
use kartik\grid\GridView;
echo GridView::widget([    
    'dataProvider'=>$dataProvider,
    'panel'=>['before'=>'รายงาน......']
]);

?>

