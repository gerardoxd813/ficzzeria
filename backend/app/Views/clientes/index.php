<?= $this->extend('layouts/base_layout');

$this->section('title') ?> Listado de clientes <?= $this->endSection() ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row py-4">
        <div class="col-xl-12 text-end">
            <a href="<?= base_url('clientes/new') ?>" class="btn btn-primary">Nuevo cliente</a>
        </div>
    </div>
</div>

<div class="row py-2">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Clientes</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(count($clientes) > 0):
                            foreach($clientes as $cliente): ?>
                            <tr>
                                <td><?= $cliente['id_cliente']?></td>
                                <td><?= $cliente['nombre_cliente']?></td>
                                <td><?= $cliente['apellido_cliente']?></td>
                                <td><?= $cliente['telefono_cliente']?></td>
                                <td><?= $cliente['correo:cliente']?></td>
                                <td class="d-flex">
                                    <a href="<?= base_url("clientes/".$cliente['id']) ?>" class="btn btn-sm btn-info mx1" title="Mostrar"><i class="bi bi-info-square"></i></a>
                                    <a href="<?= base_url("clientes/editCRUD/".$cliente['id']) ?>" class="btn btn-sm btn-success mx1" title="Editar"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            <?php endforeach;
                            else: ?>
                            <tr rowspan="1">
                                <td colspan="4">
                                    <h6 class="text-danger text-center">No se encontraron usuarios</h6>
                                </td>
                            </tr>
                            <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>