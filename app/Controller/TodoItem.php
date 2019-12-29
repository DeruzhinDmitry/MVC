<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Todo as TodoModel;

/**
 * Class TodoItem
 * @package App\Controller
 */
class TodoItem extends Controller
{
    /**
     * @var TodoModel
     */
    private $todoModel;

    /**
     * TodoItem constructor.
     */
    public function __construct()
    {
        $this->todoModel = new TodoModel();
    }

    /**
     * Action edit
     */
    public function actionEdit()
    {
        if (isset($_GET['item_id']) && $itemId = $_GET['item_id']) {
            Controller::generate('Item/edit', $this->todoModel->getItemDataById($itemId));
        }
    }

    /**
     * Action edit
     */
    public function actionNew()
    {
        Controller::generate('Item/edit');
    }

    /**
     * Action save
     */
    public function actionSave()
    {
        if ($this->todoModel->save($_POST)) {
            header('Location: ' . $this->getUrlByPath('index/index', ['save' => 'success']));
        } else {
            header('Location: ' . $this->getUrlByPath('index/index', ['save' => 'fail']));
        }
    }
}