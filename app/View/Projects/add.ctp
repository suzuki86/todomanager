<a href="/projects"><?php echo __('Back to project list'); ?></a>
<div class="users form">
<?php echo $this->Form->create('Project'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('description'); ?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
