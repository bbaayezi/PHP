<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/28 0028
 * Time: 21:14
 */

require_once "People.php";
class Man extends People
{
    public function __construct($age, $name)
    {
        parent::__construct($age, $name, "男");
    }
    public function hi()
    {
//        return parent::hi(); // TODO: Change the autogenerated stub
        echo "Man ".$this->getName()." says hi"."<br>";
    }
}