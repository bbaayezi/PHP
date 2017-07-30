<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/28 0028
 * Time: 21:38
 */

$obj = array('h'=>"Hello", 'w'=>"World", array(3,2,1));
$jsonArr = "{\"h\":\"Hello\",\"w\":\"World\",\"0\":[3,2,1]}";
echo json_encode($obj)."<br>";
$arr = json_decode($jsonArr);
//print_r($arr);
echo $arr->h;