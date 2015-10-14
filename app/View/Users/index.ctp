<div class="operation_area">
  <a href="/users/add">Add new user</a>
</div>
<table>
<tr>
  <th>Username</th>
  <th>Created</th>
  <th>Updated</th>
</tr>
<?php foreach($users as $user): ?>
<tr>
  <td><a href="/users/edit/<?php echo h($user['User']['id']); ?>"><?php echo h($user['User']['username']); ?></a></td>
  <td><?php echo h($user['User']['created']); ?></td>
  <td><?php echo h($user['User']['updated']); ?></td>
</tr>
<?php endforeach; ?>
</table>
