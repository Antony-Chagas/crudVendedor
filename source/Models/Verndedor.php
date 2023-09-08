<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Vendedor extends DataLayer
{

    public function __construct()
    {
        parent::__construct("vendedor", ["name", "email"], "id", false);
    }

 //   public function add(Vendas $vendas, string $name, string $email): Vendedor
 //   {
 //       $this->id = $vendas->id_saller;
 //       $this->name = $name;
 //       $this->email = $email;
 //
 //     return $this;
 //  }
}