<?php

class BaseDatos {
  
  private Mysqli $conexion;
  private mixed $resultado;
  
  function __construct(
    private string $servidor = SERVIDOR,
    private string $usuario = USUARIO,
    private string $pass = PASS,
    private string $base_datos= BASE_DATOS
  ) {
    $this->conexion = $this->conectar();
  }
  
  private function conectar(): Mysqli {
    $conexion = new Mysqli($this->servidor, $this->usuario, $this->pass, $this->base_datos);
    if($conexion->connect_error){
        die('Error en la conexión');
    }
    return $conexion;
  }

  public function consulta(string $consultaSQL): void {
      $this->resultado = $this->conexion->query($consultaSQL);
  }
  
  public function extraer_registro(): mixed {
    return ( $fila = $this->resultado->fetch_array(MYSQLI_ASSOC ))? $fila:false;
  }

  public function extraer_todos(): array {
    return $this->resultado->fetch_all(MYSQLI_ASSOC);
  }

  public function filasAfectadas(): int{
    return $this->conexion->affected_rows;
  }

  public function ultimoIdInsertado(): int{
    return $this->conexion->insert_id;
  }

}
