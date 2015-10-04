<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<?php echo __('Please enter your username and password'); ?>
<?php
  echo $this->Form->input('username');
  echo $this->Form->input('password');
?>
<?php echo $this->Form->end(__('Login')); ?>
</div>
