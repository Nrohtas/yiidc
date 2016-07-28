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
         
         $sql = " select * from service limit 100 ";
         $raw = \Yii::$app->db->createCommand($sql)->queryAll();
         $dataProvider = new ArrayDataProvider([
             'allModels'=>$raw
         ]);
                 
         return $this->render('report-ncd',[
             'dataProvider'=>$dataProvider
         ]);
     }// จบ action Report-Ncd
     
    public function actionReportSp(){
        
        $sql = " SELECT h.hoscode,h.hosname,t.total FROM chospital_amp h LEFT JOIN 
(SELECT  t.HOSPCODE,COUNT(t.HOSPCODE) total FROM specialpp t
GROUP BY t.HOSPCODE ) t
on t.HOSPCODE = h.hoscode ";
        
         $raw = \Yii::$app->db->createCommand($sql)->queryAll();
                
         
         $dataProvider = new ArrayDataProvider([
             'allModels'=>$raw,
         ]);
                 
         return $this->render('report-sp',[
             'dataProvider'=>$dataProvider
         ]);
        
    }
    
    
}
