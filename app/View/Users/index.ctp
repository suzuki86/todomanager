<table>
<tr>
  <td>ID</td>
  <td>Username</td>
  <td>Created</td>
  <td>Updated</td>
</tr>
<?php
foreach($users as $user) {
  echo '<tr>';
  echo '<td>' . $user['User']['id'] . '</td>';
  echo '<td>' . $user['User']['username'] . '</td>';
  echo '<td>' . $user['User']['created'] . '</td>';
  echo '<td>' . $user['User']['updated'] . '</td>';
  echo '</tr>';
}
?>
</table>
