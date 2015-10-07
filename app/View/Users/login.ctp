<div class="login_form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<div class="form_descriptions">
  <?php echo __('Please enter your username and password'); ?>
</div>
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
  <?php echo $this->Form->end(__('Login')); ?>
</div>
</div>
