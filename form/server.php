<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/29 0029
 * Time: 11:31
 */

if(isset($_GET["name"])&&$_GET["name"]) {
    echo "Hello! ".$_GET["name"];
}else {
    echo "用户名非法";
}