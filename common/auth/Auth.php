<?php
namespace common\auth;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
class Auth extends AuthAbstract
{
    /**
     * Roles and permission
     *
     * @var array $roles
     */
    protected static $roles = [
        // untuk admin
        'admin' => [
            // user
            'user.index',
            'user.create',
            'user.update',
            'user.delete',
            'user.view',

            //data pemohon
            'berkas.index',
            'berkas.create',
            'berkas.update',
            'berkas.delete',
            'berkas.view',

            'jabatan.index',
            'jabatan.create',
            'jabatan.update',
            'jabatan.delete',
            'jabatan.view',

            'pangkat.index',
            'pangkat.create',
            'pangkat.update',
            'pangkat.delete',
            'pangkat.view',

            'pegawai.index',
            'pegawai.create',
            'pegawai.update',
            'pegawai.delete',
            'pegawai.view',

            'pimpinan.index',
            'pimpinan.create',
            'pimpinan.update',
            'pimpinan.delete',
            'pimpinan.view',


            'site.index',
            'site.logout',

        ],

        'pegawai' => [

            //permohonan
            'spip-permohonan.index',
            'spip-pemohonan.view',
            'spip-permohonan.update',

            'site.index',
            'user.view',
            'site.logout',

        ],
        'pimpinan' => [

            //permohonan
            'spip-permohonan.index',
            'spip-pemohonan.view',
            'spip-permohonan.update',

            'site.index',
            'user.view',
            'site.logout',

        ],
        'Pemohon' => [
            'site.index',
            'user.view',
            'site.logout',
        ]
    ];
    private static $controller;
    private static $action;
    /**
     * Periksa authorization
     *
     * @param $action
     * @param $user
     *
     * @return bool
     */
    public static function authorization($action, $user = null)
    {
        self::$action = $action->id;
        self::$controller = $action->controller->id;
        $user = isset(Yii::$app->user->identity->role) ?
            Yii::$app->user->identity->role : $user;
        if ($user) {
            if (isset(self::$roles[$user])) {
                return in_array(
                    self::$controller . '.' . self::$action,
                    self::$roles[$user]
                );
            }
        }
        return self::checkOpenAuth();
    }
    /**
     * handle all behaviors of controller class
     *
     * @param array $params
     * @return array
     */

    public static function behaviors($params)
    {
        $params = new \ArrayObject($params, \ArrayObject::ARRAY_AS_PROPS);
        self::setOpenAuth('site', 'login');
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [
                    'logout',
                    'index',
                    'create',
                    'balas',
                    'update',
                    'delete'
                ],
                'rules' => [
                    [
                        'actions' => [
                            'logout',
                            'index',
                            'create',
                            'balas',
                            'update',
                            'delete'
                        ],
                        'allow' => true,
                        'matchCallback' =>
                            isset($params->match) ? $params->match :
                                function ($rule, $action) {
                                    return Auth::authorization($action);
                                },
                    ],
                ],
                'denyCallback' =>
                    isset($params->deny) ?
                        $params->deny : new \Exception()
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    private static $openAuth = [];
    /**
     * memeriksa akses control yang terbuka
     *
     * @return bool
     */
    public static function checkOpenAuth()
    {
        if (self::$controller && self::$action) {
            return in_array(self::$controller . '.' . self::$action,
                self::$openAuth) ? true : false;
        }
        return false;
    }
    /**
     * mengatur controller dengan action yang terbuka
     *
     * @param $controller
     * @param $action
     */
    public static function setOpenAuth($controller, $action)
    {
        self::$openAuth[] = $controller . "." . $action;
    }
    /**
     * mengambil role saat ini
     *
     * @return string
     */
    public static function getRole()
    {
        return Yii::$app->user->identity->role;
    }
    /**
     * memeriksa role
     *
     * @return string
     */
    public static function checkRole($role)
    {
        return Yii::$app->user->identity->role === $role;
    }
}
