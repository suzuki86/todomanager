<div class="operation_area">
  <a href="/todos"><?php echo __('Back to todo list'); ?></a>
</div>
<div class="users form">
<?php echo $this->Form->create('Todo'); ?>
<table>
  <tr>
    <th>
      <?php echo __('Project'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('project_id', array('options' => $projects, 'empty' => __('Select Project'), 'label' => false, 'class' => 'selectbox')); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Title'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('title', array('label' => false)); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Detail'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('detail', array('label' => false)); ?>
    </td>
  </tr>
</table>
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
