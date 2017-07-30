<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/28 0028
 * Time: 21:52
 */
//$f = fopen("data", "w");
//if($f) {
//    fwrite($f, "Hello PHP");
//    fclose($f);
//    echo "ok";
//}else {
//    echo "without permission";
//}


print_r(json_decode(file_get_contents("data")));
