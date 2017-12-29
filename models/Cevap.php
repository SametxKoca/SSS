<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cevap".
 *
 * @property integer $cevap_id
 * @property integer $soru_id
 * @property string $cevap_detay
 * @property string $tarih
 * @property string $saat
 */
class Cevap extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cevap';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soru_id', 'cevap_detay', 'tarih', 'saat'], 'required'],
            [['soru_id'], 'integer'],
            [['cevap_detay'], 'string'],
            [['tarih'], 'safe'],
            [['saat'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cevap_id' => 'Cevap ID',
            'soru_id' => 'Soru ID',
            'cevap_detay' => 'Cevap Detay',
            'tarih' => 'Tarih',
            'saat' => 'Saat',
        ];
    }
}
