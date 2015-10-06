<a href="/todos"><?php echo __('Back to todo list'); ?></a>
<div class="users form">
<?php echo $this->Form->create('Todo'); ?>
<?php echo $this->Form->input('project_id', array('options' => $projects, 'empty' => __('Select Project'), 'label' => false, 'class' => 'selectbox')); ?>
<?php echo $this->Form->input('title'); ?>
<?php echo $this->Form->input('detail'); ?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
