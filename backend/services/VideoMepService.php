<?php
namespace backend\services;

use backend\models\VideoMep;

class VideoMepService extends VideoMep{

    public function getCount()
    {
        $VideoMep = new VideoMep();
        $count = (new \yii\db\Query())
            ->from($VideoMep::tableName())
            ->count();
        return $count;
    }
}
