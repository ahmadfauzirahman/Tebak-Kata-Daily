<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "soal".
 *
 * @property int $id
 * @property string $kata_acak
 * @property string $jawaban
 */
class Soal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'soal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kata_acak', 'jawaban'], 'string', 'max' => 110],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kata_acak' => 'Kata Acak',
            'jawaban' => 'Jawaban',
        ];
    }
}
