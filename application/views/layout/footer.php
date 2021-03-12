      <!-- Footer -->
      <?php if (!$this->router->fetch_class() === 'auth') : ?>
          <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                      <span>Copyright &copy; Your Website 2019</span>
                  </div>
              </div>
          </footer>
      <?php endif; ?>
      <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">Deseja sair do sistema ?</div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancela</button>
                      <a class="btn btn-danger" href="<?php echo base_url('auth/login'); ?>">Sair</a>
                  </div>
              </div>
          </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url('public/vendor/jquery/jquery.min.js'); ?>"></script>
      <script src="<?php echo base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url('public/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url('public/js/sb-admin-2.min.js'); ?>"></script>

      <!-- Page level plugins -->
      <script src="<?php echo base_url('public/vendor/chart.js/Chart.min.js'); ?>"></script>

      <!-- Page level custom scripts -->
      <script src="<?php echo base_url('public/js/demo/chart-area-demo.js'); ?>"></script>
      <script src="<?php echo base_url('public/js/demo/chart-pie-demo.js') ?>"></script>

      <!-- custom js -->
      <?php if (isset($scripts)) : ?>
          <?php foreach ($scripts as $script) : ?>
              <script src="<?php echo base_url('public' . $script); ?>"></script>
          <?php endforeach; ?>
      <?php endif; ?>
      </body>
      </html>