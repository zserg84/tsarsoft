<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function init(){
        $this->getView()->title = 'tsar-soft.ru';
        return parent::init();
    }
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionFeedback(){
        if ($post = Yii::$app->request->post()){
            $siteEmail = Yii::$app->params['siteEmail'];
            $siteEmailPassword = Yii::$app->params['siteEmailPassword'];
            $adminEmail = Yii::$app->params['adminEmail'];

            $fio = isset($post['fio']) ? $post['fio'] : '';
            $phone = isset($post['phone']) ? $post['phone'] : '';
            $email = isset($post['email']) ? $post['email'] : '';
            $service = isset($post['service']) ? $post['service'] : '';
            $desc = isset($post['desc']) ? $post['desc'] : '';
            $transport = \Swift_SmtpTransport::newInstance('mail.tsar-soft.ru', 25)
                ->setUsername($siteEmail)
                ->setPassword($siteEmailPassword)
            ;
            $mailer = \Swift_Mailer::newInstance($transport);
            $body = "
                ФИО: ".$fio."
                Контактный телефон: ".$phone."
                Email: ".$email."
                Услуга: ".$service."
                Услуга: ".$desc."
            ";
            $message = \Swift_Message::newInstance('Заявка от tsar-soft.ru')
                ->setFrom(array($siteEmail => 'tsar-soft.ru'))
                ->setTo(array($adminEmail))
                ->setBody($body)
            ;

            $result = $mailer->send($message);
            echo $result;
        }
    }
}
