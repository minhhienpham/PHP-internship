<?php
namespace app\controllers;

use yii\rest\ActiveController;

class FeedbackController extends ActiveController
{
	public $modelClass = 'app\models\Feedback';

    /**
     * {@inheritdoc}
     */
	public function behaviors()
	{
		return [
        'corsFilter' => [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
                // restrict access to
                'Origin' => ['*'],
                'Access-Control-Request-Method' => ['POST', 'PUT', 'GET', 'DELETE'],
                // Allow all methods
                'Access-Control-Request-Headers' => ['X-Wsse','Content-Type'],
                // Allow only headers 'X-Wsse'
                'Access-Control-Allow-Credentials' => true,
                // Allow OPTIONS caching
                'Access-Control-Max-Age' => 3600,
                // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
            ],

        ],
    ];
	}

	
}
?>