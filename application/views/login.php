<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>

    <body class="hold-transition login-page" style="background-image: url('../uploads/assets/bg-school.jpg'); background-size: cover; background-repeat: no-repeat;">
        <div class="login-box">
            <div class="login-logo">
                <img src="../uploads/assets/logo-school.jpg" style="width:30%" alt="User Image">
                <h4><b>SMAN 1 Moyo Utara</b></h4>  
            </div>
            <div class="login-box-body">
                <h4 class="login-box-msg"><b>Aplikasi Pendaftaran Ekstrakurikuler</b></h4>
                <p class="login-box-msg">Silahkan masuk Untuk Memulai</p>
                <?= form_open('auth/process', array('method' => 'post')); ?>
                <!-- <form action="<?= site_url('auth/process') ?>" method="post"> -->
                <?php if ($this->session->flashdata('msg_alert')) : ?>
                    <div class="alert alert-danger">
                        <label style="font-size: 17px;"><?= $this->session->flashdata('msg_alert'); ?></label>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label class="label" style="font-size:16px; color:grey; margin-left: -10px;">Username</label>
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label" style="font-size:16px; color:grey; margin-left: -10px;">Password</label>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>

        <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' /* optional */
                });
            });
        </script>
    </body>
</html>