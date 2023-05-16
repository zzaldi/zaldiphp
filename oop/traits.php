<?php

class notification
{
        const OOP = "oop is so funny ton learn, but so hard";
}

trait Learn 
{
        public function learnOOP()
        {
                echo notification::OOP;
        }
        
}
class learnToday
{
        use Learn;
}

$learn = new learnToday();
$learn->learnOOP();