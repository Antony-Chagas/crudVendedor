<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Vendedor extends DataLayer
{

    public function __construct()
    {
        parent::__construct("vendedor", ["name", "email"], "id", false);
    }

}