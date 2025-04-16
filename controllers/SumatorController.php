<?php

namespace app\controllers;

use app\Request\SumEvenRequest;
use app\Service\SumatorService;
use yii\rest\Controller;

class SumatorController extends Controller
{
    public function actionIndex()
    {
        return $this->asJson([
            'success' => true,
            'description' => 'This default demo route'
        ]);
    }

    public function actionSumEven()
    {
        $postData = $this->request->getRawBody();
        $sumEvenRequest = new SumEvenRequest($postData);
        $numbersDto = $sumEvenRequest->getRequestDto();

        $sumatorService = new SumatorService();
        $result = $sumatorService->sumEven($numbersDto);

        return $this->asJson([
            "sum" => $result
        ]);
    }
}