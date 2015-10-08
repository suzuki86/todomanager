<div class="operation_area">
  <a href="/todos"><?php echo __('Back to todo list'); ?></a>
</div>
<div class="users form">
<?php echo $this->Form->create('Todo'); ?>
<table class="add_table">
  <tr>
    <th>
      <?php echo __('Project'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('project_id', array('options' => $projects, 'empty' => false, 'label' => false, 'class' => 'selectbox')); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Title'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('title', array('label' => false, 'class' => 'input_text')); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Detail'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('detail', array('label' => false, 'class' => 'input_text')); ?>
    </td>
  </tr>
  <tr>
    <th>
      <?php echo __('Duedate'); ?>
    </th>
    <td>
      <?php echo $this->Form->input('duedate', $duedate_options); ?>
    </td>
  </tr>
</table>
<div class="submit_buttons">
  <?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
