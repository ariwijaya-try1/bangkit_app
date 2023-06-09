

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <link type="text/css" rel="stylesheet" href="<?= base_url('assets'); ?>/grocery_crud/themes/flexigrid/css/flexigrid.css" />
            <link type="text/css" rel="stylesheet" href="<?= base_url('assets'); ?>/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />
            <script src="<?= base_url('assets'); ?>/grocery_crud/js/jquery-2.2.4.min.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/js/common/list.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/themes/flexigrid/js/cookies.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/themes/flexigrid/js/flexigrid.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/js/jquery_plugins/jquery.numeric.min.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/themes/flexigrid/js/jquery.printElement.min.js"></script>
            <script src="<?= base_url('assets'); ?>/grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"></script>
        </div>
        <?php if (isset($data['go_back'])) echo $data['go_back']; ?>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->