<a href="/todos/add">Add new task</a>
<table>
<tr>
  <td>ID</td>
  <td>Title</td>
  <td>Detail</td>
  <td>Status</td>
  <td>Created</td>
  <td>Updated</td>
</tr>
<?php
foreach($todos as $todo) {
  echo '<tr>';
  echo '<td>' . $todo['Todo']['id'] . '</td>';
  echo '<td><a href="/todos/edit/' . $todo['Todo']['id'] . '">' . $todo['Todo']['title'] . '</a></td>';
  echo '<td>' . $todo['Todo']['detail'] . '</td>';
  echo '<td>' . $todo['Todo']['status'] . '</td>';
  echo '<td>' . $todo['Todo']['created'] . '</td>';
  echo '<td>' . $todo['Todo']['updated'] . '</td>';
  echo '</tr>';
}
?>
</table>
