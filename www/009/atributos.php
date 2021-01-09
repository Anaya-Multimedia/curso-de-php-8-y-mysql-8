<?php

namespace App\Atributo; 

use Attribute;

#[Attribute]
class Route
{
    public function __construct(
        public string $path,
        public string $name
    ) {}
}