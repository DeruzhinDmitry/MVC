<?php
namespace App\Core;

/**
 * Class Model
 * @package App\Core
 */
class Model extends Db
{
    /**
     * @var \mysqli
     */
    protected $dbConnect;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $dbObject = new Db();
        $this->dbConnect =  $dbObject->getConnect();
    }
}