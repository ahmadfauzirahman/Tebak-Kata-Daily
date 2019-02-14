<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "web".
 *
 * @property int $id
 * @property string $nama_web
 * @property string $keyword
 * @property string $keterangan
 */
class Web extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword', 'keterangan'], 'string'],
            [['nama_web'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_web' => 'Nama Web',
            'keyword' => 'Keyword',
            'keterangan' => 'Keterangan',
        ];
    }
}
