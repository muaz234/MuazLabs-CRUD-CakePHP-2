<div class="listings form">
<?php echo $this->Form->create('Listing'); ?>
	<fieldset>
		<legend><?php echo __('Edit Listing'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('list_name');
		echo $this->Form->input('distance');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Listing.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Listing.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Listings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
