<div class="encuestas form">
<?php echo $this->Form->create('Encuesta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Encuesta'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Encuesta.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Encuesta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Encuestas'), array('action' => 'index')); ?></li>
	</ul>
</div>
