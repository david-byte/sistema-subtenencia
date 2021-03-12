<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered dataTable" width="60%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Ord.</th>
                                <th>Grupo</th>
                                <th>Descrição</th>
                                <th class="text-center">Ativo</th>
                                <th class="text-center no-sort">Ação</th>
                            </tr>
                        </thead>
                        <?php foreach ($groups as $group) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $start++; ?></td>
                                    <td><?php echo $group->name; ?></td>
                                    <td><?php echo $group->description; ?></td>
                                    <td class="text-center"><?php echo ($group->active == 1 ?  '<span class="badge badge-success">Sim</span>' : '<span class="badge badge-danger">Não</span>'); ?></td>
                                    <td class="text-center">
                                        <a title="Editar" href="<?php echo base_url('auth/edit_group/' . $group->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-users">&nbsp;</i>Editar</a>
                                        <a title="Excluír" href="javascript(void)" data-toggle="modal" data-target="#group-<?php echo $group->id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-users-slash">&nbsp;</i>Excluír</a>
                                    </td>
                                    <!-- modal dell -->
                                    <div class="modal fade" id="group-<?php echo $group->id; ?>" tabindex="-1" role="dialog"aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Tem certeza que deseja excluir o <strong><?php echo $group->name ?></strong></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Não</button>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('auth/del/' . $group->id); ?>">Sim</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fim modal -->
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->