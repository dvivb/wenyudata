<?php
namespace backend\services;

use backend\models\VideoKs;

class VideoKsService extends VideoKs{

    public function getCount()
    {
        $VideoKs = new VideoKs();
        $count = (new \yii\db\Query())
            ->from($VideoKs::tableName())
            ->count();
        return $count;
    }
}
