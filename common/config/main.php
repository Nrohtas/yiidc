<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'test' => [
            'class' => 'frontend\modules\test\Test',
        ],
        'import' => [
            'class' => 'frontend\modules\import\Import',
        ],
         'report' => [
            'class' => 'frontend\modules\report\Report',
        ],
        'amcharts' => [
            'class' => 'frontend\modules\amcharts\Amcharts',
        ],
        'plk00' => [
            'class' => 'frontend\modules\plk00\Plk00',
        ],
    ],
    'controllerMap' => [
        'file' => 'mdm\\upload\\FileController', // use to show or download file
    ],
];
