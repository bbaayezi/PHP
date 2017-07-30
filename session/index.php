<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/30 0030
 * Time: 20:09
 */

session_start();
//echo session_id();
$_SESSION["name"] = "Robin";
session_destroy();
header("Location: test.php");