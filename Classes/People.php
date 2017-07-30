<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/28 0028
 * Time: 17:53
 */
//const MAX_MAN_NUM = 200;
class People
{
    /**
     * People constructor.
     * @param $age int age
     * @param $name string name
     * @param $gender string gender
     */
    private $age, $name, $gender;
    private static $NUM = 0;
    public function __construct($age, $name, $gender)
    {
        $this->age = $age;
        $this->name = $name;
        $this->gender = $gender;
//        People::$NUM++;
//        if(People::$NUM > MAX_MAN_NUM) {
//            throw new Exception("不能创建更多的人。");
//        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    public static function sayHello()
    {
        echo "Hello!";
    }

    public function hi()
    {
        return $this->name.", hi!";
    }
}