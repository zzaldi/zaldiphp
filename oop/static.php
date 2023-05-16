<?php

class staticmethod
{
        public static function staticFunc()
        {
                echo "ini adalah static function";
        }
}
staticmethod::staticFunc();
echo "<br>";

class staticmethod2
{
        public static $oop = "ini adalah metode statik metode versi v2";
        public static function staticFunc2()
        {
                echo self::$oop;
        }
}
staticmethod2::staticFunc2();