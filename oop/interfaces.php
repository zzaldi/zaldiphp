<?php
class notification
{
        const webDev = "belajar web development php";
}
interface study
{
        public function personalStudy();
}
class school implements study
{
        public function personalStudy()
        {
                echo notification::webDev;
        }
}

$school = new school();
$school->personalStudy();