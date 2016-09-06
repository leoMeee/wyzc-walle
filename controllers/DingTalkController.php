<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\DingTalk;

class DingTalkController extends Controller
{
    const WALLE_CHAT_ID = 'chat10b0fbd7ef564e3de3ecf4418183f514';

    public function actionIndex()
    {
        // 获取当前企业的部门列表
        // 王磊id 0566626224947871
        // 从磊id manager5484
//        $data = Yii::$app->dingtalk->setGet()->httpExec("/user/simplelist", [
//            'department_id'=>16591161
//        ]);;

//        $data = Yii::$app->dingtalk->getDepartmentList();


//        $data = Yii::$app->dingtalk->setPostJson()->httpExec(
//            "/chat/create",
//            [
//                'name' => '上线部署',
//                'owner' => '0566626224947871',
//                'useridlist' => ['0566626224947871', 'manager5484'],
//            ]
//        );;

//        $data = Yii::$app->dingtalk->setPostJson()->httpExec(
//            "/chat/send",
//            [
//                'chatid' => self::WALLE_CHAT_ID,
//                'sender' => 'manager5484',
//                'msgtype' => 'text',
//                "text" => [
//                    'content' => "我是walle",
//                ],
//            ]
//        );;

        $data = DingTalk::sendMsg('上线审核申请 [测试环境]', '钱志伟申请 [测试环境] 部署上线,请相关管理员审核!',DingTalk::TYPE_DEPLOY_FAIL);

        var_dump($data);
    }
}


