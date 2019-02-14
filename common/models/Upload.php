<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property int $id_upload
 * @property string $nip
 * @property string $tgl_upload
 * @property string $status
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'tgl_upload', 'status'], 'required'],
            [['tgl_upload'], 'safe'],
            [['nip'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_upload' => 'Id Upload',
            'nip' => 'Nip',
            'tgl_upload' => 'Tgl Upload',
            'status' => 'Status',
        ];
    }

    public function getPegawais()
    {
        return $this->hasOne(Pegawai::className(), ['nip' => 'nip']);
    }

    public function getDetails()
    {
        return $this->hasOne(DetailUpload::className(), ['id_upload' => 'id_upload']);
    }
}
