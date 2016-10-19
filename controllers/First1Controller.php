<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $arr = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'จิระเดช', 'lname' => 'นงษ์รัก', 'email' => 'jiradet_9@hotmail.com']
            ];
        $title ='ระบบรายงาน';
        return $this->render('index',['title'=> $title,'person'=> $arr]);
    }

}
