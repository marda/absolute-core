<?php

namespace Absolute\Core\Manager;

use Nette\Database\Context;

class BaseManager
{
  /** @var Nette\Database\Context */
  protected $database;

  public function __construct(Context $database)
  {
    $this->database = $database;
  }  
}