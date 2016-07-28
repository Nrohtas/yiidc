<?php
$this->title = " รายงาน Specialpp ";
$this->params['breadcrumbs'][] = ['label'=>'รายงานของอำเภอ...','url'=>['/plk00/default/index']];
$this->params['breadcrumbs'][] = "รายงาน Specialpp"

?>
<div class="well">
    ระหว่าง:
    <?php
    
        echo yii\jui\DatePicker::widget([
            'name' => 'date1',
            //'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ]
        ]);
        ?>
    ถึง:
    <?php
    
        echo yii\jui\DatePicker::widget([
            'name' => 'date2',
            //'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ]
        ]);
        ?>
    
</div>


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
    ],
    'formatter' => [
        'class' => 'yii\i18n\Formatter',
        'nullDisplay' => '-'
    ],
]);

?>

