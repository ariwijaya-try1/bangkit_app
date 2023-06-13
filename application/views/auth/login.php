

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NilaiPlus</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper" id="begin">

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 248px; margin: auto; background-color: rgb(254, 209, 181);">

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <br>
                        <div class="row">  
                            <div class="col-md-6"  style="margin: auto;">
                                <div class="card card-primary">
                                    <div style="
                                         background-image: url(<?= base_url('assets'); ?>/img/bg_header.jpg);
                                         background-repeat: no-repeat;
                                         background-size: 100% ;
                                         border: 1px solid #dadce0;
                                         border-radius: 8px;
                                         min-height: 160px;
                                         ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">                               
                            <div class="col-md-6"  style="margin: auto;">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <!-- auth -->
                                        <div>
                                            <h1><?php echo lang('login_heading'); ?></h1>
                                            <p><?php echo lang('login_subheading'); ?></p>

                                            <div id="infoMessage"><?php echo $message; ?></div>

                                            <?php echo form_open("auth/login"); ?>

                                            <p>
                                                <?php echo lang('login_identity_label', 'identity'); ?>
                                                <?php echo form_input($identity); ?>
                                            </p>

                                            <p>
                                                <?php echo lang('login_password_label', 'password'); ?>
                                                <?php echo form_input($password); ?>
                                            </p>

                                            <p>
                                                <?php echo lang('login_remember_label', 'remember'); ?>
                                                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                                            </p>


                                            <p><?php echo form_submit('submit', lang('login_submit_btn')); ?></p>

                                            <?php echo form_close(); ?>

                                            <!--<p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>-->
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>                            
                        </div>
                        <!-- /.row -->

                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer col-md-6"  style="margin: auto;">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Copyright &copy; 2022-2023 <a href="https://www.dhammacakka.org/">dhammacakka.org</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/dist/js/demo.js"></script>
        <!-- jquery-validation -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/jquery-validation/additional-methods.min.js"></script>
        <!-- Select2 -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/select2/js/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/moment/moment.min.js"></script>
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/inputmask/jquery.inputmask.min.js"></script>
        <!-- date-range-picker -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- dropzonejs -->
        <!--<script src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/dropzone/min/dropzone.min.js"></script>-->


        <!-- Page specific script -->

    </body>
</html>
