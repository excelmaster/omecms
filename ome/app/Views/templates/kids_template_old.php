<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mundo Educativo Digital</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/modules.css'); ?>">
</head>

<body class="hold-transition sidebar-mini layout-footer-fixed" style="background-image: url(<?php echo base_url('public/img/kids/template/bcg_template.jpg'); ?>);height: auto;">
    <!-- video background -->
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo base_url('public/img/kids/template/video_back.mp4'); ?>" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-transparent">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <img src="<?php echo base_url('public/img/kids/template/sidebar_menu.gif'); ?>" style="width: 2cm; height: 1cm; "></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-transparent">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?php echo base_url('public/img/kids/template/logo.PNG'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Mundo Educativo</span>
            </a>
            <!-- Sidebar -->
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <div class="sidebar">
                            <div class="row">
                                <div>
                                    <a href="https://www.colorear-online.com/" target="blank_" class="nav-link">
                                        <img src="<?php echo base_url('public/img/kids/template/sidebar_pincel.gif'); ?>" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div c>
                                    <a href="diccionario_k1.html" target="blank_" class="nav-link">
                                        <img src="<?php echo base_url('public/img/kids/template/sidebar_dictionary.jpg'); ?>" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <a href="diccionario_k1.html" target="blank_" class="nav-link">
                                        <img src="<?php echo base_url('public/img/kids/template/sidebar_music.gif'); ?>" class="img-thumbnail img-fluid img-circle" style="width: 100px; height: 100px; ">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-transparent">
            <!-- aqui va el contenido ome -->
            <?php $this->renderSection('content'); ?>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-">
            <!-- Control sidebar content goes here -->dark
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
        </div>
        <strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
    <!-- ./footer -->
    <!-- jQuery -->
    <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('public/assets/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('public/assets/dist/js/demo.js'); ?>"></script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "450px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0px";
        }
        // Get the video
        var video = document.getElementById("myVideo");
        // Get the button
        var btn = document.getElementById("myBtn");
        // Pause and play the video, and change the button text
        function myFunction() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        }
        //video.requestFullscreen();
        var myAudio = document.getElementById("myAudio");
        var icono = document.getElementById("volume");
        myAudio.volume = .10;
        myAudio.mutted = true;
        myAudio.play();
        myAudio.loop = true;

        function sonido() {
            if (myAudio.paused) {
                icono.setAttribute("src", "../../../public/img/kids/template/no_volume.PNG");
                myAudio.mutted = true;
                myAudio.play();
                console.log('prendido');
                myAudio.loop = true;
            } else {
                icono.setAttribute("src", "../../../public/img/kids/template//volume.PNG");
                myAudio.mutted = true;
                myAudio.pause();
                console.log('apagado');
            }
        }
        var element = document.querySelector("body");
        //element.requestFullscreen();
    </script>
</body>

</html>