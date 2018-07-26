<?php

namespace Absolute\Core\Helper;

use Nette\Utils\DateTime;

class DateHelper
{

    public static function validateDate($date)
    {
        $date = trim($date);
        try
        {
            $date = ($date) ? new DateTime($date) : null;
        }
        catch (\Exception $e)
        {
            $date = null;
        }
        return $date;
    }

}
