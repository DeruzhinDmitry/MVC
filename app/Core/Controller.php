<?php
namespace App\Core;

/**
 * Class Controller
 * @package App\Core
 */
class Controller
{
    /**
     * Generate view
     *
     * @param string $view
     * @param array $data
     */
    public static function generate($view, $data = [])
    {
        include PATH . '/app/View/mainTemplate.phtml';
    }

    /**
     * Get url by path
     *
     * @param string $path
     */
    public function getUrlByPath($path, $params = [])
    {
        $url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path . '/';

        if ($params) {
            $url .= '?' . http_build_query($params);
        }

        return  $url;
    }
}