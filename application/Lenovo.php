<?php

namespace application;

use \helpers\Helper;

class Lenovo extends Computer implements IComputer
{
    const IS_DESKTOP = TRUE;

    public function identifyUser()
    {
        Helper::printLine("fingerprints", Helper::$note);

    }
}