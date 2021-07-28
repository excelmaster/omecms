<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template');
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
  <div class="card-header">
    <div class="row">
      <div class="col-md-4">
        <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.gif'); ?>" alt="" style="height: 70%;width: 70%">
      </div>
      <div class="col-md-5">
        <a href="#"><img class="bg-gradient-white" src="<?php echo base_url('public/img/' . $site . '/content/videos.gif'); ?>"></a>
      </div>
      <div class="col-md-2">
        <div class="col-sm-10 direct-chat-text bg-blue"><?php echo 'Lesson ' . $lesson . ' - Activity ' . $activity; ?></div>
        
      </div>
      <div class="col-md-1">
        <a href="<?php echo base_url('activities/' . $site . '/' . $lessonId . '/' . $course . '/' . $lesson . '/' . $courseId); ?>"><img style="height: 80%;width: 80%" src="<?php echo base_url('public/img/' . $site . '/content/volver_actividad.gif'); ?>"></a>
      </div>
    </div>
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-lg-12">
        <?php
        switch ($tipo) {
          case 'hvp':
            echo '<iframe class="embed-responsive-item" src="https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' . $objectId . '" width="838" height="503" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          case 'scorm':
            $ruta = 'public/scorm_' . $site . '/m' . $course . '/l' . $lesson . '/' . $lesson . '_' . $activity . '/index.html';
            echo '<iframe src="' . base_url($ruta) . '" class="embed-responsive-item" style="width: 900px;height:530px;"></iframe>';
            break;

          case 'resource':
            echo '<iframe src="https://mdl.mundoeducativodigital.com/mod/resource/view.php?id=' . $objectId . '" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          default:
            # code...
            break;
        }
        ?>

      </div>
    </div>
  </div>

  <!-- /.card-body -->
  <div class="card-footer">
    <!-- Footer -->
  </div>

  <!-- /.card-footer-->
</div>

<!-- /.card -->


<?php
$this->endSection();
?>