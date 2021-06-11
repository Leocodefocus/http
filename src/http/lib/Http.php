<?php
namespace Leocodefocus\http;

/**
 * HTTP 请求操作类
 * Class Http
 * @package Leocodefocus\http
 */
class Http
{
    /**
     * GET请求类
     * @param $url
     * @return bool|string
     */
    public static function requestByGet($url){
        return file_get_contents($url);
    }
}
