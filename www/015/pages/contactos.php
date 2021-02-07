<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Contactos</h2>
        </div>
        <div class="col text-end">
            <a href="contactos/contacto" role="button" class="btn btn-primary">Nuevo Contacto</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col"><?=$filasAfectadas?> contactos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contactos as $contacto):?>
                <tr>
                    <th scope="row"><?=$contacto->getId()?></th>
                    <td><?=$contacto->getNombre()?></td>
                    <td><?=$contacto->getApellidos()?></td>
                    <td><?=$contacto->getTelefono()?></td>
                    <td><?=$contacto->getCorreo()?></td>
                    <td>
                        <div class="btn-group" role="group">
                        <a href="contactos/contacto/<?=$contacto->getId()?>" role="button" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <button class="btn btn-sm btn-outline-danger" type="button"
                            onclick="fetch('contactos/contacto/<?=$contacto->getId()?>', {method: 'DELETE'})
                                .then(data => location.reload())"><i class="bi bi-trash"></i>
                        </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
