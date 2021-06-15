<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/template');
$this->section('content');
?>

<!-- Default box -->
<div class="card bg-transparent">
  <div class="card-header">
    <div class="row mb-2">
      <div class="col-sm-5">
        <img class="img-fluid" src="<?php echo base_url('public/img/'.$site. '/template/bienvenidos_' . $course . '.gif'); ?>" alt="">
      </div>
      <div class="col-sm-5">
        <div class="col-sm-4 direct-chat-text bg-blue">Escoge la lección que quieres estudiar!</div>
      </div>
      <div class="col-sm-2">
        <a href="<?php echo base_url('activities/' . $site . '/' . $lessonId . '/' . $course . '/' . $lesson . '/' . $courseId); ?>"><img src="<?php echo base_url('public/img/'.$site. '/content/volver_actividad.gif'); ?>"></a>
      </div>
    </div>


    <!-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> -->
  </div>
  <div class="card-body">

    <div class="row">
      <div class="col-xl-12">
        <?php
        switch ($tipo) {
          case 'hvp':
            echo '<iframe src="https://mdl.mundoeducativodigital.com/mod/hvp/embed.php?id=' . $objectId . '" width="838" height="496" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
            echo '<script src="https://mdl.mundoeducativodigital.com/mod/hvp/library/js/h5p-resizer.js" charset="UTF-8"></script>';
            break;

          case 'scorm':
            echo '<iframe src="https://content.mundoeducativodigital.com/scorm_'.$site.'/m'.$course.'/l'.$lesson.'/'.$lesson.'_'.$activity.'/index.html#/cover" class="embed-responsive-item" style="width: 900px;height:550px;"></iframe>';
            break;
          
          case 'resource':
            echo '<iframe src="https://mdl.mundoeducativodigital.com/mod/resource/view.php?id='. $objectId . '" width="838" height="496" frameborder="0" allowfullscreen="allowfullscreen"></iframe>';
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