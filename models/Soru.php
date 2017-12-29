<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "soru".
 *
 * @property integer $soru_id
 * @property integer $soran_id
 * @property integer $soru_basligi
 * @property integer $kategori_id
 * @property string $soru_detayi
 * @property integer $aldigi_oy
 * @property string $resim_yolu
 * @property string $tarih
 * @property string $saat
 */
class Soru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soran_id', 'soru_basligi', 'kategori_id', 'soru_detayi', 'aldigi_oy', 'resim_yolu', 'tarih', 'saat'], 'required'],
            [['soran_id', 'soru_basligi', 'kategori_id', 'aldigi_oy'], 'integer'],
            [['soru_detayi'], 'string'],
            [['tarih'], 'safe'],
            [['resim_yolu'], 'string', 'max' => 100],
            [['saat'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'soru_id' => 'Soru ID',
            'soran_id' => 'Soran ID',
            'soru_basligi' => 'Soru Basligi',
            'kategori_id' => 'Kategori ID',
            'soru_detayi' => 'Soru Detayi',
            'aldigi_oy' => 'Aldigi Oy',
            'resim_yolu' => 'Resim Yolu',
            'tarih' => 'Tarih',
            'saat' => 'Saat',
        ];
    }
}
