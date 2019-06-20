<?php

namespace application;

use \helpers\Helper as SuperHelper;

class MacBook extends Computer implements IComputer
{
    const IS_DESKTOP = FALSE;

    public function identifyUser()
    {
        SuperHelper::printLine("Apple ID", SuperHelper::$note);
    }
}