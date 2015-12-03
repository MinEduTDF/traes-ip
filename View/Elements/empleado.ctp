<div class="col-md-6">
	<div class="unit">
       <span class="name"><span class="glyphicon glyphicon-user"></span><b>Nombre:</b><?php echo $empleado['Empleado']['apellidos'].' '.$empleado['Empleado']['nombres']; ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-earphone"></span> <b>Tel:</b><?php echo $empleado['Empleado']['telefono_nro']; ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-envelope"></span> <b>Email:</b><?php echo $this->Html->link($empleado['Empleado']['email'],'mailto:'.$empleado['Empleado']['email']); ?></span><br/>
       <span class="text"><span class="glyphicon glyphicon-map-marker"></span> <b>Ciudad:</b><?php echo $empleado['Empleado']['ciudad']; ?><br/>
                   <div class="text-right"> 
       			   <span class="link"><?php echo $this->Html->link('Editar', array('controller' => 'empleados', 'action' => 'edit', $empleado['Empleado']['id']), array('class' => 'btn btn-warning')); ?></span>
			   <span class="link"><?php echo $this->Html->link('Ver', array('controller' => 'empleados', 'action' => 'view', $empleado['Empleado']['id']), array('class' => 'btn btn-success')); ?></span>
  			   <span class="link"><?php echo $this->Html->link('Borrar', array('controller' => 'empleados', 'action' => 'delete', $empleado['Empleado']['id']), array('class' => 'btn btn-danger')); ?></span>
			   </div>
		</div>
</div>