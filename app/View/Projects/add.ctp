<div class="operation_area">
  <a href="/projects"><?php echo __('Back to project list'); ?></a>
</div>
<div class="users form">
<?php echo $this->Form->create('Project'); ?>
<table>
  <tr>
    <th>
      <?php echo __('Name'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('name', array('label' => false)); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Description'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('description', array('label' => false)); ?>
    </td>
  </tr>
</table>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
