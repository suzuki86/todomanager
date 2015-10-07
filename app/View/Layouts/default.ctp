<html>
<head>
  <title>TodoManager</title>
  <link rel="stylesheet" href="/css/common.css" />
</head>
<body>
  <?php if($this->action !== 'login') :?>
  <div id="globalnavi" class="clearfix">
    <div class="contents">
      <div id="application_name">TodoManager</div>
      <div class="primary_navi">
        <a href="/projects"><?php echo __('Projects'); ?></a>
        <a href="/todos"><?php echo __('Todos'); ?></a>
        <a href="/users"><?php echo __('Users'); ?></a>
        <a href="/users/logout"><?php echo __('Logout'); ?></a>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div id="contents">
    <?php echo $this->fetch('content'); ?>
  </div>
</body>
</html>
