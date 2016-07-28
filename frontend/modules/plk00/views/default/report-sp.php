<?php
$this->title = " รายงาน Specialpp ";
$this->params['breadcrumbs'][] = ['label'=>'รายงานของอำเภอ...','url'=>['/plk00/default/index']];
$this->params['breadcrumbs'][] = "รายงาน Specialpp"

?>


<?php
use yii\helpers\Html;
use kartik\grid\GridView;
echo GridView::widget([    
    'dataProvider'=>$dataProvider,
    'panel'=>['before'=>'จำนวนแฟ้ม specialpp ราย สอ.'],
    'columns'=>[
        ['attribute'=>'hoscode','label'=>'รหัส'],
        
        [
            'attribute'=>'hosname',
            'label'=>'หน่วยงาน',
            'format'=>'raw',
            'value'=>function($data){
                $hosname=$data['hosname'];
                return Html::a($hosname, ['/plk00/default/sp-indiv','hoscode'=>$data['hoscode']]);
            }
        ],
        
        ['attribute'=>'total','label'=>'จำนวน']
    ]
]);

?>

