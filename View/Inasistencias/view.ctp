<!-- *********** Acordeon ************* -->
<?php echo $this->Html->script('acordeon'); ?>
<!-- ************************************** -->

<!-- *********** Slider ************* -->
<?php echo $this->Html->script('slider'); ?>
<?php echo $this->Html->css('slider.css'); ?>
<!-- ************************************** -->

<!-- start main -->
<div class="TituloSec">Detalle<?php //echo ($inscripcion['Inscripcion']['legajo_nro']); ?></div>
<div id="ContenidoSec">

<div class="row">
   <div class="col-md-8">	
	 <div class="unit">
 		<div class="row perfil">
  		
   <!--<h3>Datos del Alumno</h3>-->
   <div class="col-md-4 col-sm-6 col-xs-8">	
		
   	<b>Ciclo:</b>		
	<?php echo ($this->Html->link($inasistencia['Ciclo']['ciclo'], array('controller' => 'ciclos', 'action' => 'view', $inasistencia['Ciclo']['ciclo']))); ?></p>
    
   	<b>Fecha:</b>		
	<?php echo ($this->Html->formatTime($inasistencia['Inasistencia']['creado'])); ?></p>

    <b>Tipo:</b>		
	<?php echo ($inasistencia['Inasistencia']['tipo']); ?></p>

    <b>Justificada:</b>		
	<?php echo ($inasistencia['Inasistencia']['justificado']); ?></p>

    <b>Causa:</b>		
	<?php echo ($inasistencia['Inasistencia']['causa']); ?></p>

			</div>
		</div>
	</div>

</div><div class="col-md-4">
		 <div class="unit">
 			<div class="subtitulo">Opciones</div>
			<div class="opcion"><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $inasistencia['Inasistencia']['id'])); ?></div>
			<div class="opcion"><?php echo $this->Html->link(__('Borrar'), array('action' => 'delete', $inasistencia['Inasistencia']['id'] ), null, sprintf(__('Esta seguro de borrar la inasistencia "'.$inasistencia['Inasistencia']['id'].'"'), $this->Form->value('Inasistencia.id'))); ?></div>
 			<div class="opcion"><?php echo $this->Html->link(__('Exportar a PDF'), array('action' => 'view', $inasistencia['Inasistencia']['id'], 'ext' => 'pdf')); ?></div>
		</div>	
	</div>
</div>
 <!-- end main -->

<!-- Cursos Relacionadas -->
	<div id="click_01" class="titulo_acordeon">Cursos Relacionadas</div>
	<div id="acordeon_01">
		<div class="row">
		<?php if (!empty($inasistencia['Curso'])):?>
  			<div class="col-xs-12 col-sm-6 col-md-8">
	<?php foreach ($inasistencia['Curso'] as $curso): ?>
	<div class="col-md-6">
		<div class="unit">
            <!--<?php echo '<b>ID:</b> '.($this->Html->link($curso['id'], array('controller' => 'cursos', 'action' => 'view', $curso['id'])));?><br>-->
			<?php echo '<b>Año:</b> '.$curso['anio'];?><br>
            <?php echo '<b>Division:</b> '.$curso['division'];?><br>
            <?php echo '<b>Turno:</b> '.$curso['turno'];?><br>
            <?php echo '<b>Tipo:</b> '.$curso['tipo'];?><br>
            <!--<?php echo '<b>Cursada:</b> '.$curso['organizacion_cursada'];?><br>-->
            <?php echo '<b>Titulación:</b> '.($this->Html->link($curso['titulacion_id'], array('controller' => 'titulacions', 'action' => 'view', $curso['titulacion_id'])));?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'cursos', 'action' => 'edit', $curso['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'cursos', 'action' => 'view', $curso['id']), array('class' => 'btn btn-success')); ?>
			<?php echo $this->Html->link(__('Borrar'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), array('class' => 'btn btn-danger')); ?>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
			</div>
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>
	</div>
</div>
<!-- end Cursos Relacionados -->

<!-- Materias Relacionadas -->
	<div id="click_02" class="titulo_acordeon">Materias Relacionadas</div>
	<div id="acordeon_02">
		<div class="row">
		<?php if (!empty($inasistencia['Materia'])):?>

  	<!-- Swiper -->
    <div class="swiper-container" style="height: 200px;">
        <div class="swiper-wrapper" >
	<?php foreach ($inasistencia['Materia'] as $materia): ?>

	<div class="swiper-slide">
	<div class="col-md-6">
		<div class="unit">
            <!--<?php echo '<b>ID:</b> '.($this->Html->link($materia['id'], array('controller' => 'materias', 'action' => 'view', $materia['id'])));?><br>-->
			<?php echo '<b>Alia:</b> '.$materia['alia'];?><br>
            <!--<?php echo '<b>Curso Id:</b> '.($this->Html->link($materia['curso_id'], array('controller' => 'cursos', 'action' => 'view', $materia['curso_id'])));?><br>-->
            <?php echo '<b>Carga horaria en:</b> '.$materia['carga_horaria_en'];?><br>
            <?php echo '<b>Carga horaria semanal:</b> '.$materia['carga_horaria_semanal'];?><br>
            <?php //echo '<b>Contenido:</b> '.$materia['contenido'];?><br>

            <div class="text-right">
            <?php echo $this->Html->link(__('Editar'), array('controller' => 'materias', 'action' => 'edit', $materia['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Html->link(__('Ver'), array('controller' => 'materias', 'action' => 'view', $materia['id']), array('class' => 'btn btn-success')); ?>
			<?php echo $this->Html->link(__('Borrar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), array('class' => 'btn btn-danger')); ?>
            </div>
		</div>
	</div>
</div>
		
		<?php endforeach; ?>
			</div>
			        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Include plugin after Swiper -->
		<?php else: echo '<div class="col-md-12"><div class="unit text-center">No se encuentran relaciones.</div></div>'; ?>
		<?php endif; ?>

        </div>
</div>
<!-- end Materias Relacionadas -->

</div>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
    });
    </script>