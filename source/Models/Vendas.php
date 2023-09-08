<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Vendas extends DataLayer
{
    public function __construct()
    {
        parent::__construct("vendas",["value", "id_saller", "commission"], "id");
    }

    public function vendedor()
    {
        return (new Vendedor())->find("id_saller = :uid", ":uid={$this->id} ")->fetch(true);
    }
}
