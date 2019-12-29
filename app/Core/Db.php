<?php
namespace App\Core;

/**
 * Class Db
 * @package App\Core
 */
class Db
{
    /**
     * @var false|\mysqli
     */
    public $connect;

    /**
     * @var array
     */
    private $connectionParams = [
        'host' => 'localhost',
        'user' => 'root',
        'password' => 'Silver',
        'database' => 'todo',
        'port' => '8889',
        'socket' => '',
    ];

    /**
     * Db constructor
     */
    public function __construct()
    {
        if ($this->connect == null) {
            $this->connect = mysqli_connect(
                $this->connectionParams['host'],
                $this->connectionParams['user'],
                $this->connectionParams['password'],
                $this->connectionParams['database'],
                $this->connectionParams['port'],
                $this->connectionParams['socket']
            ) or die("Connect denied" . mysqli_connect_error());
        }
    }

    /**
     * Get connection
     *
     * @return \mysqli
     */
    public function getConnect()
    {
        return $this->connect;
    }
}
