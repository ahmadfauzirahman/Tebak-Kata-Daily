<?php

namespace common\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $nip
 * @property string $username
 * @property string $password
 * @property string $role
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'username', 'password', 'role'], 'required'],
            [['password', 'role'], 'string'],
            [['nip'], 'string', 'max' => 20],
            [['username'], 'string', 'max' => 50],
            ['nip', 'unique', 'targetClass' => '\common\models\User', 'message' => 'NIP Sudah Ada!']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = $password;//Security::generatePasswordHash($password);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByNip($nip)
    {
        return static::findOne(['nip' => $nip]);
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return self::findOne(['id' => $this->id()]);
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {

        return $this->password === $password;
    }

    /**
     * @return \yii\db\ActiveQuery
     */


}
