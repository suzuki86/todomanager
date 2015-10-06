<div class="operation_area">
  <a href="/projects"><?php echo __('Back to project list'); ?></a>
</div>
<div class="users form">
<?php echo $this->Form->create('Project'); ?>
<table>
  <tr>
    <td>
      <?php echo __('Name'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('name', array('label' => false)); ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo __('Description'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('description', array('label' => false)); ?>
    </td>
  </tr>
</table>
<div class="submit_buttons">
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
