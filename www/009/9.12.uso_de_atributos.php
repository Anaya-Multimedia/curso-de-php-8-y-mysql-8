<?php

#[Attribute]
class Route
{
    public $value;

    public function __construct(public string $path, public string $name)
    {
    }
}

#[Route('/inicio', name: 'action')]
class Servicio
{
}

function volcarDatosAtributos($reflection) {
    $atributos = $reflection->getAttributes();
    foreach ($atributos as $atributo) {
      var_dump($atributo ->getName());
      var_dump($atributo ->getArguments());
      var_dump($atributo ->newInstance());
    }
  }
  
  echo "<pre>";
  volcarDatosAtributos (new ReflectionClass(Servicio::class));
  echo "</pre>";
  