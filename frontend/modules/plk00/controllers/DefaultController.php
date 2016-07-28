<?php

namespace frontend\modules\plk00\controllers;

use yii\web\Controller;
use common\components\AppController;
use yii\data\ArrayDataProvider;


class DefaultController extends AppController
{
   
    public function actionIndex()
    {
        return $this->render('index');
    } // จบ action
    
     public function actionReportNcd(){
         $this->permitRole([1,2,3]);
         
         $sql = " select * from service ";
         $raw = \Yii::$app->db->createCommand($sql)->queryAll();
         $dataProvider = new ArrayDataProvider([
             'allModels'=>$raw
         ]);
                 
         return $this->render('report-ncd',[
             'dataProvider'=>$dataProvider
         ]);
     }// จบ action Report-Ncd
     
    public function actionReportSp(){
        
        $sql = " select * from specialpp ";
         $raw = \Yii::$app->db->createCommand($sql)->queryAll();
         $dataProvider = new ArrayDataProvider([
             'allModels'=>$raw
         ]);
                 
         return $this->render('report-sp',[
             'dataProvider'=>$dataProvider
         ]);
        
    }
    
    
}
