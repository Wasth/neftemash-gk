<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dop_schemes".
 *
 * @property integer $id
 * @property integer $dop_id
 * @property string $img
 *
 * @property DopItems $dop
 */
class DopSchemes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dop_schemes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dop_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['dop_id'], 'exist', 'skipOnError' => true, 'targetClass' => DopItems::className(), 'targetAttribute' => ['dop_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dop_id' => 'Dop ID',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDop()
    {
        return $this->hasOne(DopItems::className(), ['id' => 'dop_id']);
    }
}
