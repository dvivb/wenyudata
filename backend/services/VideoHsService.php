<?php
namespace backend\services;

use backend\models\VideoHs;

class VideoHsService extends VideoHs{

    public function getCount()
    {
        $VideoHs = new VideoHs();
        $count = (new \yii\db\Query())
            ->from($VideoHs::tableName())
            ->count();
        return $count;
    }
}
