
<?php echo $this->Form->create('Empleado',array('type'=>'get','action'=>'index'));?>
<?php echo $this->Form->input('nombre_completo_empleado' , array('label' => 'Nombre completo: ','class' => 'form-control'));	?>
<?php echo $this->Form->input('documento_nro' , array('label' => 'Nro de Documento: ','class' => 'form-control'));	?>
</p><div class="text-center">
			<?php echo $this->Form->end(array('label' => 'BUSCAR', 'class' => 'btn btn-success btn-lg'));?>
	</div>