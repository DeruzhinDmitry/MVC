<?php
namespace App\Controller;

use App\Core\Controller;

/**
 * Class NotFount
 * @package App\Controller
 */
class NotFount extends Controller
{
    /**
     * Action index
     */
    public function actionIndex()
    {
        Controller::generate('404');
    }
}