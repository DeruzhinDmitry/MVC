<?php
namespace App\Model;

use App\Core\Model;

/**
 * Class Auth
 * @package App\Model
 */
class Auth extends Model
{
    /**
     * Auth check
     *
     * @param string $login
     * @param string $password
     * @return array
     */
    public function authCheck($login, $password)
    {
        $result = [
            'error' => true,
            'message' => 'Wrong Access Details'
        ];

        if ($login == 'admin' && $password == '123') {
            $result = [
                'error' => false,
                'message' => ''
            ];
        }

        return $result;
    }
}