<a href="/todos"><?php echo __('Back to todo list'); ?></a>
<div class="users form">
<?php echo $this->Form->create('Todo'); ?>
<?php
  echo $this->Form->input('title');
  echo $this->Form->input('detail');
  echo $this->Form->input('status_id', array('options' => $statuses, 'empty' => __('Select Status'), 'label' => false, 'class' => 'selectbox'));
?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
