<?php
$activos = 0;
$inactivos = 0;
$data = [$course, $lesson];
$this->extend('templates/template', $data);
$this->section('content');
?>
<!-- Default box -->
<div class="card bg-transparent">
    <div class="card-header">
        <div class="row mb-2">
            <div class="col-sm-5">
                <img class="img-fluid" src="<?php echo base_url('public/img/' . $site . '/template/bienvenidos_' . $course . '.gif'); ?>" alt="">
                <div class="col-sm-8 direct-chat-text bg-blue">Escoge la Actividad que quieres estudiar!</div>
            </div>
            <div class="col-sm-4">
                <div class="callout callout-success bg-blue">
                    <h6><?php echo 'MUNDO ' . $course . '   >>   LECCIÓN ' . $lesson; ?></h6>
                </div>
            </div>
            <div class="col-sm-3">
                <a href="<?php echo base_url('lessons/' . $site . '/' . $courseId . '/' . $course); ?>"><img src="<?php echo base_url('public/img/' . $site . '/activities/volver_leccion.gif'); ?>"></a>
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
            <?php
            foreach ($lessons as $c) {
            ?>
                <div class="col-sm-2">
                    <div class="card text-white bg-yellow">
                        <h5 class="text-center">Activity <?php echo $c['activityNumber']; ?></h5>
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <form action="contenido.html" method="post"></form>
                        <?php
                        echo '<a type="button" class="btn btn-primary" href="' . base_url('content/' . $site . '/' . $c['objectId'] . '/' . $c['lessonId'] . '/' . $course . '/' . $lesson . '/' . $courseId . '/' . $c['tipo'] . '/' . $c['activityNumber']) . '">';
                        ?>
                        <img src="<?php echo base_url('public/img/' . $site . '/activities/cards/' . $c['img_path']) ?>" alt="" class="img-fluid rounded">
                        </a>
                    </div>
                </div>
            <?php
                $activos += 1;
            }
            $inactivos = $activos + 1;
            ?>
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