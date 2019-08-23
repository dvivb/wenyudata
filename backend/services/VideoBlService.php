<?php
namespace backend\services;

use backend\models\VideoBl;

class VideoBlService extends VideoBl{

    public function getCount()
    {
        $VideoBl = new VideoBl();
        $count = (new \yii\db\Query())
            ->from($VideoBl::tableName())
            ->count();
        return $count;
    }
}
