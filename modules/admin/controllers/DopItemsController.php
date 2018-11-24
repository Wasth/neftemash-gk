<?php

namespace app\modules\admin\controllers;

use app\models\DopCharacs;
use app\models\DopImg;
use app\models\ImageUpload;
use Yii;
use app\models\DopItems;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DopItemsController implements the CRUD actions for DopItems model.
 */
class DopItemsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DopItems models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => DopItems::find()->where(['parent_id'=>$id]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'parent_id' => $id,
        ]);
    }

    /**
     * Displays a single DopItems model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $addPics = DopImg::find()->where(['dop_id' => $id])->all();
        $characs = DopCharacs::find()->where(['dop_id' => $id])->one();
        $children = DopItems::find()->where(['parent_id' => $id])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'addPics'=> $addPics,
            'children' => $children,
            'characs' => $characs
        ]);
    }
    public function actionAddPic($id){
        $model = new ImageUpload();
        if(Yii::$app->request->isPost){
            $file = UploadedFile::getInstance($model,'image');
            $addPic = new DopImg();
            $addPic->dop_id = $id;
            $addPic->name = $model->uploadFile($file);
            if($addPic->save()) {
                return $this->redirect(["view",'id'=>$id]);
            }
        }else {
            return $this->render('image',[
                'model' => $model
            ]);
        }
    }
    public function actionAddCharacs($id){
        if(Yii::$app->request->isPost){
            $charac = DopCharacs::find()->where(['dop_id'=>$id])->one();
            if(!$charac){
                $charac = new DopCharacs();
            }
            $charac->content = Yii::$app->request->post('characs');
            $charac->dop_id = $id;
            if($charac->save()) {
                return $this->redirect(["view",'id'=>$id]);
            }
        }else {
            return $this->render('characs');
        }
    }
    /**
     * Creates a new DopItems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new DopItems();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'parent_id' => $id
            ]);
        }
    }

    /**
     * Updates an existing DopItems model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DopItems model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $parent_id = $this->findModel($id)->parent_id;
        $this->findModel($id)->delete();

        return $this->redirect(['view','id' => $parent_id]);
    }

    /**
     * Finds the DopItems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DopItems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DopItems::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
