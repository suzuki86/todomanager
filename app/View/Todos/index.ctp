<div class="operation_area">
  <a href="/todos/add">Add new task</a>
</div>
<table>
<tr>
  <th>Title</th>
  <th>Project</th>
  <th>Status</th>
  <th>Duedate</th>
</tr>
<?php foreach($todos as $todo): ?>
<tr>
</td>
<?php
  echo '<td class="title"><a href="/todos/edit/' . $todo['Todo']['id'] . '">' . $todo['Todo']['title'] . '</a></td>';
?>
<td class="project">
<?php echo $todo['Project']['name']; ?>
</td>
<?php
  echo '<td class="status">' . $todo['Status']['label'] . '</td>';
  echo '<td class="duedate">' . $todo['Todo']['duedate'] . '</td>';
?>
</tr>
<?php endforeach; ?>
</table>
