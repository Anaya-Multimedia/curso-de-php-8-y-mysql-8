<?php

interface Notificador {
  public function enviarMensaje();
}

class NotificadorSMS implements Notificador {

  public function __construct(private int|string $buzon) {}
  
  public function enviarMensaje() {
    echo "Mensaje SMS enviado a :: $this->buzon";
  }
}

class NotificadorCorreoElectronico implements Notificador {

  public function __construct(private int|string $buzon) {}
    
  public function enviarMensaje() {
    echo "Mensaje por correo electrónico enviado a :: $this->buzon";
  }
}

class NotificadorCorreoPostal implements Notificador {

  public function __construct(private int|string $buzon) {}
      
  public function enviarMensaje() {
    echo "Mensaje por correo postal enviado a :: $this->buzon";
  }
}

interface NotificadorFactory {
  public static function getNotificador($notificador, $buzon);
}

class NotificacionElectronicaFactory implements NotificadorFactory {
    
  public static function getNotificador($notificador, $buzon) {
    if (empty($notificador)) {
      throw new Exception("No se ha seleccionador ningún Notificador");
    }  
    return match($notificador) {
      'SMS' => new NotificadorSMS($buzon),
      'email' => new NotificadorCorreoElectronico($buzon),
      default => throw new Exception("Notificador no válido"),
    };
  }
}

class NotificacionTradicionalFactory implements NotificadorFactory {
    
  public static function getNotificador($notificador, $buzon) {
    if (empty($notificador)) {
      throw new Exception("No se ha seleccionador ningún Notificador");
    }  
    return match($notificador) {
      'postal' => new NotificadorCorreoPostal($buzon),
      default => throw new Exception("Notificador no válido"),
    };
  }
}

$usuario_a_notificar = NotificacionElectronicaFactory::getNotificador('SMS', 555567787);
$usuario_a_notificar->enviarMensaje();
echo "<br/>";
$usuario_a_notificar = NotificacionElectronicaFactory::getNotificador('email', "antonio.lizana@flamenco.es");
$usuario_a_notificar->enviarMensaje();
echo "<br/>";
$usuario_a_notificar = NotificacionTradicionalFactory::getNotificador('postal', "Calle Antonio Machado 8, 2J, 06007, Badajoz");
$usuario_a_notificar->enviarMensaje();