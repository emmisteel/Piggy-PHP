<div class="accountTypes form">
<?php echo $this->Form->create('AccountType');?>
	<fieldset>
 		<legend><?php __('Add Account Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('ofx_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Account Types', true), array('action' => 'index'));?></li>
	</ul>
</div>