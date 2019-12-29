<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Auth as AuthModel;

/**
 * Class Auth
 * @package App\Controller
 */
class Auth extends Controller
{
    /**
     * @var AuthModel
     */
    private $authModel;

    /**
     * Auth constructor.
     */
    public function __construct ()
    {
        $this->authModel = new AuthModel;
    }

    /**
     * Action index
     */
    public function actionIndex()
    {
        Controller::generate('auth');
    }

    /**
     * Action login
     */
    public function actionLogin()
    {
        $result = $this->authModel->authCheck($_POST['login'], $_POST['password']);
        if (!$result['error']) {
            $_SESSION['login'] = $_POST['login'];
            header('Location: ' . $this->getUrlByPath('index/index'));
        } else {
            Controller::generate('auth', $result);
        }
    }

    /**
     * Action logout
     */
    public function actionLogout()
    {
        if (isset($_SESSION['login'])) {
            unset($_SESSION['login']);
        }
        header('Location: ' . $this->getUrlByPath('index/index'));
    }
}