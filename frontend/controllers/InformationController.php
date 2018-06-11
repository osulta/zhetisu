<?php

namespace frontend\controllers;


use backend\models\Info;
use yii\web\Controller;

class InformationController extends Controller
{
    public function actionIndex()
    {
        return $this->redirect('');
    }

    public function actionForInvestors()
    {
        $docs = Info::find()->where(['type' => Info::FOR_INVESTORS])->orderBy(['id' => 'DESC'])->all();
        return $this->render('for-investors', [
            'docs' => $docs
        ]);
    }

    public function actionForShareholders()
    {
        $docs = Info::find()->where(['type' => Info::FOR_SHAREHOLDERS])->orderBy(['id' => 'DESC'])->all();
        return $this->render('for-shareholders', [
            'docs' => $docs
        ]);
    }
}