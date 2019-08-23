<?php
namespace backend\services;

use backend\models\VideoDy;

class VideoDyService extends VideoDy{

    public function getCount()
    {
        $VideoDy = new VideoDy();
        $count = (new \yii\db\Query())
            ->from($VideoDy::tableName())
            ->count();
        return $count;
    }
}
