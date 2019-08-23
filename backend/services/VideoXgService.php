<?php
namespace backend\services;

use backend\models\VideoXg;

class VideoXgService extends VideoXg{

    public function getCount()
    {
        $VideoXg = new VideoXg();
        $count = (new \yii\db\Query())
            ->from($VideoXg::tableName())
            ->count();
        return $count;
    }
}
