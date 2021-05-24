<?php
$activos = 0;
$inactivos = 0;

$this->extend('templates/kids_template');
$this->section('content');

echo '<!-- Default box -->';
echo '<div class="card bg-transparent">';
echo '<div class="card-header">';
echo '<h3 class="card-title">Escoge el mundo que quieres empezar a estudiar</h3>';
echo '';
/*echo '<div class="card-tools">';
echo '<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">';
echo '<i class="fas fa-minus"></i>';
echo '</button>';
echo '<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">';
echo '<i class="fas fa-times"></i>';
echo '</button>';
echo '</div>';*/
echo '</div>';
echo '<div class="card-body">';
echo '<div class="row" >'; 

    foreach ($courses as $c) {               
        echo '<div class="col-sm-2">';
        echo '<div class="card text-white bg-yellow" >';
        echo '<h5 class="text-center">World '.$c['mundo'].'</h5>';
        echo '<a href="lecciones_k'.$c['mundo'].'.html" >';
        echo '<img src="'.base_url('public/img/kids/courses/'.$c['img']).'" alt="" class="img-fluid" style="width: 100%;">';
        echo '</a>';
        echo '</div>';
        echo '</div>'; 
        $activos += 1;        
    }
    $inactivos= $activos +1;

    for ($i=$activos; $i < 8; $i++) { 
        echo '<div class="col-sm-2">';
        echo '<div class="card text-white bg-yellow">';
        echo '<h5 class="text-center">World '.$inactivos.'</h5>';
        echo '<a href="#" >';
        echo '<img src="'.base_url('public/img/kids/courses/mundos.jpg').'" alt="" class="card-fluid fichas" style="width:100%">';
        echo '</a>';
        echo '</div>';
        echo '</div>';
        $inactivos += 1;
    }

echo '</div>';
echo '</div>';
echo '<!-- /.card-body -->';
echo '<div class="card-footer">';
//echo 'Footer';
echo '</div>';
echo '<!-- /.card-footer-->';
echo '</div>';
echo '<!-- /.card -->';
echo '</div>';
echo '</div>';

$this->endSection();