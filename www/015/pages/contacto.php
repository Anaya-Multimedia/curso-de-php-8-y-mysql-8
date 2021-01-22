<form action="/015/contactos/contacto" method="post">
  <?php if(isset($contacto)):?>
  <input type="hidden" name="data[Contacto][id]" value="<?=$contacto->getId()?>">
  <?php endif;?>
  <div class="container mt-4">
    <div class="row">
      <div class="col">
        <h2><?=(isset($contacto))?'Modificar':'Nuevo'?> Contacto</h2>
      </div>
      <div class="col text-end">
        <a href="/015/contactos" role="button" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary"><?=(isset($contacto))?'Modificar':'Crear'?></button>
      </div>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Nombre"
             name="data[Contacto][nombre]" value="<?=(isset($contacto))?$contacto->getNombre():''?>">
      <label for="floatingInput">Nombre</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text"  class="form-control" id="floatingInput" placeholder="Apellidos"
             name="data[Contacto][apellidos]" value="<?=(isset($contacto))?$contacto->getApellidos():''?>">
      <label for="floatingInput">Apellidos</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Dirección"
             name="data[Contacto][direccion]" value="<?=(isset($contacto))?$contacto->getDireccion():''?>">
      <label for="floatingInput">Dirección</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput" placeholder="Teléfono"
             name="data[Contacto][telefono]" value="<?=(isset($contacto))?$contacto->getTelefono():''?>">
      <label for="floatingInput">Teléfono</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="Correo"
             name="data[Contacto][correo]" value="<?=(isset($contacto))?$contacto->getCorreo():''?>">
      <label for="floatingInput">Correo</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text"  class="form-control" id="floatingInput" placeholder="Fecha Nacimiento"
             name="data[Contacto][fecha_nacimiento]" value="<?=(isset($contacto))?$contacto->getFechaNacimiento():''?>"
             aria-describedby="fechaNacimientoHelpBlock">
      <label for="floatingInput">Fecha Nacimiento</label>
      <div id="fechaNacimientoHelpBlock" class="form-text">
        Fecha con formato año-mes-dia YYYY-MM-DD
      </div>
    </div>
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
             name="data[Contacto][familia]" <?=(isset($contacto) && $contacto->getFamilia())?'checked':''?>>
      <label class="form-check-label" for="flexSwitchCheckDefault">Familia</label>
    </div>
  </div>
</form>