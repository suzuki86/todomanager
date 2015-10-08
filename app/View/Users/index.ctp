<table>
<tr>
  <th>ID</th>
  <th>Username</th>
  <th>Created</th>
  <th>Updated</th>
</tr>
<?php foreach($users as $user): ?>
<tr>
  <td><?php echo $user['User']['id']; ?></td>
  <td><?php echo $user['User']['username']; ?></td>
  <td><?php echo $user['User']['created']; ?></td>
  <td><?php echo $user['User']['updated']; ?></td>
</tr>
<?php endforeach; ?>
</table>
