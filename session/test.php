<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/30 0030
 * Time: 20:13
 */
session_start();
//echo $_SESSION["name"];
if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
}else {
    echo "no name found";
}