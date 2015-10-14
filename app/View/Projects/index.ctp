<div class="operation_area">
  <a href="/projects/add">Add new project</a>
</div>
<table>
<tr>
  <th>Name</th>
  <th>Description</th>
</tr>
<?php
foreach($projects as $project) {
  echo '<tr>';
  echo '<td class="title"><a href="/projects/edit/' . h($project['Project']['id']) . '">' . h($project['Project']['name']) . '</a></td>';
  echo '<td class="duedate">' . h($project['Project']['description']) . '</td>';
  echo '</tr>';
}
?>
</table>
