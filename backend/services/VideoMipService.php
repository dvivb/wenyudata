<?php
namespace backend\services;

use backend\models\VideoMip;

class VideoMipService extends VideoMip{

    public function getCount()
    {
        $VideoMip = new VideoMip();
        $count = (new \yii\db\Query())
            ->from($VideoMip::tableName())
            ->count();
        return $count;
    }
}
