<h3>รายงาน NCD</h3>

<?php
use kartik\grid\GridView;
echo GridView::widget([    
    'dataProvider'=>$dataProvider,
    'panel'=>['before'=>'รายงาน......']
]);

?>

