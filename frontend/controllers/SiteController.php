<?php
namespace frontend\controllers;

use common\models\SpipRegistrasiPemohon;
use common\models\User;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Web;
use yii\helpers\ArrayHelper;
use common\models\Soal;
use yii\db\Expression;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */


    public function actionIndex()

    {
        $nmr = 0;
        $point = 0;
        $soal = Soal::find()->orderBy(new Expression('rand()'))->limit(2)->all();


        if ($data = Yii::$app->request->post()) {
            if ($data['jawaban'] == "") {
                Yii::$app->session->setFlash('danger', "<strong>ANDA BELUM MEMASUKAN JAWABAN</strong>");
                Yii::$app->session->setFlash('skr', $data['skor']);
                return $this->goBack();
            } else if ($data['jawaban'] == $data['jwb']) {
                $a = $data['skor'];
                $a++;
                Yii::$app->session->setFlash('success', "<strong>JAWABAN ANDA BENAR, POINT ANDA " . $a . "</strong>");
                return $this->render('index', ['soal' => $soal, 'nmr' => $nmr, 'skor' => $a]);
            } else {
                Yii::$app->session->setFlash('danger', "<strong>Jawaban anda salah</strong>");
                Yii::$app->session->setFlash('skr', $data['skor']);

                return $this->goBack();
            }
        }
        return $this->render('index', ['soal' => $soal, 'nmr' => $nmr, 'skor' => $point]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionJawaban()
    {
        if ($data = Yii::$app->request->post()) {
            if ($data['jawaban'] == "") {
                return $this->goBack();
            }
        }
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

   
    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


}
