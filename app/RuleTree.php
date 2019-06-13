<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Finite\StatefulInterface;

class RuleTree implements StatefulInterface
{
    private $state; 

    public function setFiniteState($state)
    {
        $this->state = $state;
    }

    public function getFiniteState()
    {
        return $this->state;
    }
}
