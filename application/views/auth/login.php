<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('public/css/app.css'); ?>">

  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row centered justify-content-center">
      <div class="shadow p-3 g-white rounded">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <?php $attributes = array('class' => 'col-md12', 'id' => 'myform', 'role' => 'form'); ?>
            <?php echo form_open('auth/login', $attributes); ?>
            <div class="form-group">
              <?php echo form_label('Identidade:', '', array('class' => 'mt-3')); ?>
              <?php echo form_input($identity, '', array('class' => 'form-control', 'autofocus', 'placeholder' => 'Identidade')); ?>
              <?php echo form_error('identity', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <?php echo form_label('Senha:'); ?>
              <?php echo form_input($password, '', array('class' => 'form-control', 'placeholder' => 'Senha')); ?>
              <?php echo form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <?php echo form_submit('button', 'Entrar', array('type' => 'submit', 'class' => 'btn btn-md btn-primary')); ?>
            <?php echo form_close(); ?>
          </div>
          <div class="col-md-4">
            <div class="justify-content-md-center col-md-10">
              <img src="<?php echo base_url('public/img/logo.jpeg'); ?>" class="img-thumbnail" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>