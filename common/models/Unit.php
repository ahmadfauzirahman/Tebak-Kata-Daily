<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "unit".
 *
 * @property int $id_unit
 * @property string $nama_unit
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_unit'], 'required'],
            [['nama_unit'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_unit' => 'Id Unit',
            'nama_unit' => 'Nama Unit',
        ];
    }
}
