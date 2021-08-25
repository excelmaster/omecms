<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA GRID</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/modules.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets/css/grid.css'); ?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</head>

<body class="grid-container" style="background-image: url(<?php echo base_url('public/img/' . $site . '/template/bcg_template.jpg'); ?>);">
    <div class="header">
        <div class="container-fluid">
            <a href="<?php echo base_url('courses/' . $site); ?>">
                <img src="<?php echo base_url('public/img/' . $site . '/template/texto_logo.png'); ?>" alt="AdminLTE Logo" class="animate__animated animate__lightSpeedInRight animate_delay_4s">
            </a>
        </div>

    </div>
    <div class="menu">
        <div class="mn_1">
            <a href="https://www.colorear-online.com/" target="blank_" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_pincel.gif'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__duration_4s animate__rotateInDownLeft animate_delay_10s" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                    <h6>PAINT ACTIVITY</h6>
                </span>
            </a>
        </div>
        <div class="mn_2">
            <a href="<?php echo base_url('dict/' . $site);  ?>" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_dictionary.jpg'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__bounceInUp animate_delay_4s" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                    <h6>DICTIONARY</h6>
                </span>
            </a>
        </div>
        <div class="mn_3">
            <?php
            if ($site == 'kids') {
                echo '<a href="https://www.youtube.com/watch?v=TN0u_-msioQ" class="nav-link" target="blank_">';
            } else {
                echo '<a href="https://www.youtube.com/watch?v=9AYl10qxc0M" class="nav-link" target="blank_">';
            }
            ?>
            <img src="<?php echo base_url('public/img/' . $site . '/template/sidebar_music.gif'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__bounceInUp animate_delay_4s" style="width: 70px; height: 70px; ">
            <span class="badge badge-info bg-green">
                <h6>MUSIC</h6>
            </span>
            </a>
        </div>
        <div class="mn_4">
            <a href="https://api.whatsapp.com/send/?phone=3228315698&text=Necesito+soporte+de+la+plataforma&app_absent=0" class="nav-link" target="_blank">
                <img src="<?php echo base_url('public/img/' . $site . '/template/whatsapp_logo.png'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__bounceInUp animate_delay_4s" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                    <h6>SUPPORT</h6>
                </span>
            </a>
        </div>
        <div class="mn_5">
            <a href="<?php echo base_url('faq/' . $site); ?>" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/faq.png'); ?>" class="img-thumbnail img-fluid img-circle animate__animated animate__bounceInUp animate_delay_4s" style="width: 70px; height: 70px; ">
                <span class="badge badge-info bg-green">
                    <h6>PREGUNTAS?</h6>
                </span>
            </a>
        </div>
        <div class="mn_6">
            <a class="button" onclick="sonido()" style="width: 100px;" class="nav-link">
                <img src="<?php echo base_url('public/img/' . $site . '/template/footer_no_volume.PNG'); ?>" id="volume" class="img-thumbnail img-fluid animate__animated animate__bounceInUp animate_delay_4s" style="width: 70px; height: 70px;  ">
            </a>
            <audio id="myAudio" autoplay preload="auto" allow="autoplay">
                <source src="<?php echo base_url('public/sound/' . $site . '/sound_body_rdc.mp3'); ?>" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio><br>
        </div>
    </div>
    </div>
    <div class="sidebar">lateral</div>
    <div class="content">
        <div class="framezone">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper bg-transparent">
                <!-- Content Header (Page header) -->
                <!-- <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos.gif'); ?>" alt="">
            </div>
            <div class="col-sm-6">
            </div>
          </div>
        </div>
      </section> -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <?php $this->renderSection('content'); ?>
                            </div>
                        </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <div class="navigation">
            navf
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('public/assets/dist/js/demo.js'); ?>"></script>

    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "330px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0px";
        }
        var myAudio = document.getElementById("myAudio");
        var icono = document.getElementById("volume");
        myAudio.volume = .10;
        myAudio.play();
        myAudio.loop = true;

        function sonido() {
            if (myAudio.paused) {
                icono.setAttribute("src", "<?php echo base_url('public/img/' . $site . '/template/footer_no_volume.PNG'); ?>");
                myAudio.play();
                myAudio.loop = true;
            } else {
                icono.setAttribute("src", "<?php echo base_url('public/img/' . $site . '/template/volume.PNG'); ?>");
                myAudio.pause();
            }
        }

        var element = document.querySelector("body");
        //element.requestFullscreen();
    </script>

</body>

</html>