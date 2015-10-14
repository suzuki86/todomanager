<div class="operation_area">
  <a href="/todos/add">Add new todo</a>
  <a href="/todos?filter=all">Show closed todos</a>
</div>
<table>
<tr>
  <th>Title</th>
  <th>Project</th>
  <th>Status</th>
  <th>Duedate</th>
  <th>Close</th>
</tr>
<?php foreach($todos as $todo): ?>
<tr>
  <td>
    <a href="/todos/edit/<?php echo h($todo['Todo']['id']); ?>"><?php echo h($todo['Todo']['title']); ?></a>
  </td>
  <td>
    <?php echo h($todo['Project']['name']); ?>
  </td>
  <td>
    <?php echo h($todo['Status']['label']); ?>
  </td>
  <td>
    <?php echo h($todo['Todo']['duedate']); ?>
  </td>
  <td>
    <?php echo $this->Form->create('Todo', array('url' => '/todos/close')); ?>
    <?php echo $this->Form->hidden('id_to_close', array('value' => $todo['Todo']['id'])); ?>
    <?php echo $this->Form->end('Close'); ?>
  </td>
</tr>
<?php endforeach; ?>
</table>
