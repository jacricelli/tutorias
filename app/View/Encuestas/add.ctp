<div class="encuestas form">
<?php echo $this->Form->create('Encuesta'); ?>
	<fieldset>
		<legend><?php echo __('Add Encuesta'); ?></legend>
	<?php
		echo $this->Form->input('estudiante_id');
		echo $this->Form->input('pregunta_id');
		echo $this->Form->input('respuesta');
		echo $this->Form->input('legajo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Encuestas'), array('action' => 'index')); ?></li>
	</ul>
</div>
