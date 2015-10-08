<div class="operation_area">
  <a href="/users"><?php echo __('Back to user list'); ?></a>
</div>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
<table class="edit_table">
  <tr>
    <th>
      <?php echo __('Username'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('username', array('label' => false, 'class' => 'input_text')); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Password'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('password', array('label' => false, 'class' => 'input_text')); ?>
    </td>
  </tr>
</table>
<div class="submit_buttons">
  <?php echo $this->Form->end(__('Add')); ?>
</div>
</div>
