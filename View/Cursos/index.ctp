<!-- start main -->
<div class="TituloSec">Cursos</div>
<div id="ContenidoSec">
<div id="main">
<!-- start second nav -->
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-8">

<div id="second-nav">
			 <div class="unit text-center">
			 	  	  <span class="link"><?php echo $this->Html->link('Agregar', array('action' => 'add'), array('class' => 'btn btn-primary btn-lg')); ?></span>
			 </div>
</div>
 <!-- end second nav -->

	<div class="row">
            <?php foreach ($cursos as $curso): ?>
    
            <?php echo $this->element(('curso'), array( 'curso' => $curso )); ?>
    
            <?php endforeach; ?>
   </div>
			 <div class="unit text-center">
			 	 <?php echo $this->element('pagination'); ?> 
			 </div>
  </div>

  <div class="col-xs-12 col-sm-4 col-md-4">
  	 <div class="unit">
  			 <div class="subtitulo">Buscar</div>
   		
		    <?php echo $this->element('formSearch_curso'); ?>
  	      </div>
	 </div>
  </div>
</div>
<!-- end main -->