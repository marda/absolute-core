<?php

namespace Absolute\Core\Helper;

class StringHelper
{
  public static function fileSize($bytes, $decimals = 0) 
  {
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " " . @$sz[$factor] . ((@$sz[$factor] != "B") ? "b" : "");
  }
}

