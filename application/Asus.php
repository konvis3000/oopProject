<?php

namespace application;

class Asus extends Computer implements IComputer
{
    const IS_DESKTOP = TRUE;

    public function identifyUser()
    {

        \helpers\Helper::printLine("Login and password", \helpers\Helper::$note);

    }
}