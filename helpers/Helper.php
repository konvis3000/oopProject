<?php

namespace helpers;
class Helper
{
    public static $success = 'green';
    public static $failure = 'red';
    public static $warning = 'orange';
    public static $note = 'blue';

    public static function printLine($message, $color = 'black')
    {
        echo "<p style='color: $color'>$message</p>";
    }
}