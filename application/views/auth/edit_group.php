<!-- Main Content -->
<div id="content">

      <!-- Begin Page Content -->
      <div class="container-fluid">
            <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $this->data['title']; ?></li>
                  </ol>
            </nav>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                  <div class="card-body">
                        <!-- Form -->
                        <?php echo form_open() ?>
                        <div class="form-group row">
                              <div class="col-md-4">
                                    <?php echo form_label('Nome:'); ?>
                                    <?php echo form_input($group_name, '', array('class' => 'form-control')); ?>
                                    <?php echo form_error('group_name', '<small class="form-text text-danger">', '</small>'); ?>
                              </div>
                              <div class="col-md-4">
                                    <?php echo form_label('Descrição:') ?>
                                    <?php echo form_input($group_description, '', array('class' => 'form-control')); ?>
                                    <?php echo form_error('group_description', '<small class="form-text text-danger">', '</small>'); ?>
                              </div>
                              <div class="col-md-4">
                                    <?php echo form_label('Ativo:') ?>
                                    <select class="form-control" name="active">
                                          <option value="0" <?php echo ($group->active == 0 ? 'selected' : ''); ?>>Não</option>
                                          <option value="1" <?php echo ($group->active == 1 ? 'selected' : ''); ?>>Sim</option>
                                    </select>

                              </div>
                        </div>
                        <?php echo form_submit('button', 'Salvar', array('class' => 'btn btn-sm btn-primary')) ?>
                        <a title="Voltar" href="<?php echo base_url('auth/group'); ?>" class="btn btn-sm btn-success float-letf">Voltar</a>
                        <?php echo form_close(); ?>
                        <!-- End Form -->
                  </div>
            </div>
            <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
</div>