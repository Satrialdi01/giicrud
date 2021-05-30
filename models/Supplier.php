<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property string $nama_supplier
 * @property string $notelp
 * @property string $email
 * @property string $alamat
 *
 * @property Barang $id0
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama_supplier', 'notelp', 'email', 'alamat'], 'required'],
            [['id'], 'integer'],
            [['nama_supplier'], 'string', 'max' => 50],
            [['notelp'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 25],
            [['alamat'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Barang::className(), 'targetAttribute' => ['id' => 'id_supplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_supplier' => 'Nama Supplier',
            'notelp' => 'Notelp',
            'email' => 'Email',
            'alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Barang::className(), ['id_supplier' => 'id']);
    }
}
