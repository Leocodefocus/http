<?php
//全局自动加载
require __DIR__ . '/vendor/autoload.php';
//调用类方法，打印返回值字符串的长度
var_dump(strlen(\Leocodefocus\http\Http::requestByGet('https://github.com')));
