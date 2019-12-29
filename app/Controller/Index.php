<?php
namespace App\Controller;

use App\Core\Controller;
use App\Model\Todo as TodoModel;

/**
 * Class Index
 * @package App\Controller
 */
class Index extends Controller
{
    /**
     * @var TodoModel
     */
    private $todoModel;

    /**
     * Index constructor.
     */
    public function __construct ()
    {
        $this->todoModel = new TodoModel;
    }

    /**
     * Action index
     */
    public function actionIndex()
    {
        $page = $_GET['page'] ?: 1;
        $todoListData = $this->todoModel->getDataForPage($page);

        $paginator = [
            'current' => $_GET['page'],
            'count' => $this->todoModel->getPageCount()
        ];
        Controller::generate(
            "todoList",
            [
                'list' => $todoListData,
                'paginator' => $paginator
            ]
        );
    }
}