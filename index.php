<?php

class User
{
    private $userName = 'keke';

    public function __construct()
    {
        $myName = $this->userName;
        $this->getName($myName);


    }

    public function getName($name)
    {
        echo 'hello flower and '.$name;

    }

    public function getInfo()
    {
        echo 'info 24324';
    }


//end of the class
}
//end of the file