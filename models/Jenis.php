<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property int $id
 * @property string $nama_jenis
 * @property string $keterangan
 *
 * @property Barang $id0
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_jenis', 'keterangan'], 'required'],
            [['id'], 'integer'],
            [['nama_jenis', 'keterangan'], 'string', 'max' => 50],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id' => 'id_jenis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jenis' => 'Nama Jenis',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Barang::className(), ['id_jenis' => 'id']);
    }
}
