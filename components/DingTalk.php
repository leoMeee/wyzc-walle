<?php

namespace app\components;

use Yii;

class DingTalk
{

    // 王磊id 0566626224947871
    // 从磊id manager5484
    const WALLE_CHAT_ID = 'chat10b0fbd7ef564e3de3ecf4418183f514';

    const APPLY_PIC = '@lALObsa2QEBA';
    const APPLY_SUCCESS_PIC = '@lALObr3c4EBA';
    const APPLY_FAIL_PIC = '@lALObscdqUBA';

    const TYPE_APPLY = 1;
    const TYPE_DEPLOY_SUCCESS = 2;
    const TYPE_DEPLOY_FAIL = 3;


    public static function sendMsg($title, $message, $type)
    {
        $message_url = 'http://walle.gkk.cn';
        $picUrl = '';
        switch ($type) {
            case self::TYPE_APPLY:
                $picUrl = self::APPLY_PIC;
                break;
            case self::TYPE_DEPLOY_SUCCESS:
                $picUrl = self::APPLY_SUCCESS_PIC;
                break;
            case self::TYPE_DEPLOY_FAIL:
                $picUrl = self::APPLY_FAIL_PIC;
                break;
        }
        $data = Yii::$app->dingtalk->setPostJson()->httpExec(
            "/chat/send",
            [
                'chatid' => self::WALLE_CHAT_ID,
                'sender' => 'manager5484',
                'msgtype' => 'link',
                "link" => [
                    'message_url' => $message_url,
                    'picUrl' => $picUrl,
                    'title' => $title,
                    'text' => $message,
                ],
            ]
        );

        return $data;
    }
}