<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $title; ?></h6>
            </div>
            <!-- Mensagens de error -->
            <?php if ($message = $this->session->flashdata('error')) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fas fa-exclamation-triangle"></i>&nbsp;<?php echo $message; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Mensagens de Sucesso -->
            <?php if ($message = $this->session->flashdata('sucesso')) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- Mensagens de Info -->
            <?php if ($message = $this->session->flashdata('info')) : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong><i class="far fa-smile-wink"></i>&nbsp;<?php echo $message; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered dataTable" width="60%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Ord.</th>
                                <th>Grupo</th>
                                <th>Descri????o</th>
                                <th class="text-center">Ativo</th>
                                <th class="text-center no-sort">A????o</th>
                            </tr>
                        </thead>
                        <?php foreach ($groups as $group) : ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $start++; ?></td>
                                    <td><?php echo $group->name; ?></td>
                                    <td><?php echo $group->description; ?></td>
                                    <td class="text-center"><?php echo ($group->active == 1 ?  '<span class="badge badge-success">Sim</span>' : '<span class="badge badge-danger">N??o</span>'); ?></td>
                                    <td class="text-center">
                                        <a title="Editar" href="<?php echo base_url('auth/edit_group/' . $group->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-users">&nbsp;</i>Editar</a>
                                        <a title="Exclu??r" href="javascript(void)" data-toggle="modal" data-target="#group-<?php echo $group->id; ?>" class="btn btn-sm btn-danger"><i class="fas fa-users-slash">&nbsp;</i>Exclu??r</a>
                                    </td>
                                    <!-- modal dell -->
                                    <div class="modal fade" id="group-<?php echo $group->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">??</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Tem certeza que deseja excluir o <strong><?php echo $group->name ?></strong></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">N??o</button>
                                                    <a class="btn btn-danger btn-sm" href="<?php echo base_url('auth/delete_group/' . $group->id); ?>">Sim</a>
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