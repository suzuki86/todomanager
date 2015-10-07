<div class="operation_area">
  <a href="/todos"><?php echo __('Back to todo list'); ?></a>
</div>
<div class="users form">
<?php echo $this->Form->create('Todo'); ?>
<table class="edit_table">
  <tr>
    <td>
      <?php echo __('Project'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('project_id', array('options' => $projects, 'empty' => __('Select Projects'), 'label' => false, 'class' => 'selectbox')); ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo __('Title'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('title', array('label' => false, 'class' => 'input_text')); ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo __('Detail'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('detail', array('label' => false, 'class' => 'input_text')); ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo __('Duedate'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('duedate', $duedate_options); ?>
    </td>
  </tr>
  <tr>
    <td>
      <?php echo __('Status'); ?>
    </td>
    <td>
      <?php echo $this->Form->input('status_id', array('options' => $statuses, 'empty' => __('Select Status'), 'label' => false, 'class' => 'selectbox')); ?>
    </td>
  </tr>
</table>
<div class="submit_buttons">
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
