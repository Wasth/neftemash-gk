<?php

namespace app\controllers;

use app\models\DopCharacs;
use app\models\DopImg;
use app\models\DopItems;
use app\models\Item;
use app\models\Variety;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * @inheritdoc
     */
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
        $items = Item::find()->all();
        return $this->render('index',[
            'items' => $items
        ]);
    }
    public function actionItem($id){
        $item = Item::findOne($id);
        if($item){
            return $this->render('item',[
                'item'=>$item,
                'items' => $item->varieties
            ]);
        }
        return $this->render('error');
    }
    public function actionVariety($id){
        $variety = Variety::findOne($id);
        if($variety) {
            return $this->render('item', [
                "item" => $variety,
            ]);
        }
        return $this->render('error');
    }

    public function actionMyadmin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin/');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionExitadmin(){
        Yii::$app->user->logout();
        return $this->redirect('/myadmin');
    }


    public function actionCatalog(){
        $items = Item::find()->all();
        return $this->render('catalog',[
            'items' => $items
        ]);
    }
    public function actionMedia(){
        return $this->render('photos');
    }
    public function actionContacts(){
        return $this->render('contacts');
    }
    public function actionSendmail(){
        if(Yii::$app->request->isPost){
            $req = Yii::$app->request;
            $name = $req->post('name');
            $number= $req->post('number');
            $ordertext= $req->post('ordertext');
            $email= $req->post('email');
            $mess = "Имя - $name\r\nНомер - $number\r\nE-mail - $email\r\nТекст: $ordertext";
            $htmlmess = "Имя - $name<br>Номер - $number<br>E-mail - $email<br><br>Текст:<br>$ordertext";
            $mailobj = Yii::$app->mailer->compose()
                ->setFrom('zayavka@neftemash-gk.ru')
                ->setTo('gk-neftemash@mail.ru')
                ->setSubject('Заявка с формы сайта neftemash-gk.ru')
                ->setTextBody($mess)
                ->setHtmlBody($htmlmess);
            if(UploadedFile::getInstanceByName('zayavka')) {
                $mailobj->attach(UploadedFile::getInstanceByName('zayavka')->tempName,['fileName'=>UploadedFile::getInstanceByName('zayavka')->name]);
            }
            if(UploadedFile::getInstanceByName('rekvizits')) {
                $mailobj->attach(UploadedFile::getInstanceByName('rekvizits')->tempName,['fileName'=>UploadedFile::getInstanceByName('rekvizits')->name]);
            }
            $mailobj->send();
            Yii::$app->session->set('sent', '1');
        }
        return $this->goBack();
    }
}
