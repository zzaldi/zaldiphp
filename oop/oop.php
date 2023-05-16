<?php

class OOP
{
        public function publicMethod()
        {
                echo "ini adalah OOP Metode Publik";
        }
        protected function protectedMethod()
        {
                echo "ini adalah OOP Method protected";
        }
        private function privateMethod()
        {
                echo "ini adalah OOP Method private";
        }

        public function accessmethodOOP()
        {
                $this->publicMethod();
                echo "<br>";
                $this->protectedMethod();
                echo "<br>";
                $this->privateMethod();
        }

}

$oop = new OOP();
$oop->publicMethod();
echo "<br>";
$oop->accessmethodOOP();