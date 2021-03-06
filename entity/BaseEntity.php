<?php

namespace Absolute\Core\Entity;

class BaseEntity
{

    use \Nette\SmartObject;

    public function toJsonString()
    {
        return json_encode($this->toJson());
    }

    public function toJson()
    {
        return [];
    }

}
