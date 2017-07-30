<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/30 0030
 * Time: 15:24
 */

$files = $_FILES["file"];
$fileName = $files["name"];
move_uploaded_file($files["tmp_name"], $fileName);

echo "<img src = '$fileName'>";