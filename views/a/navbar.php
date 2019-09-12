<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php $this->href(''); ?>">Agent</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
<?php if (!isset($_SESSION['auth']['a'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_a' && $this->request['action'] === 'login'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_a/login', ['actor' => 'g']); ?>">Login</a></li>
<?php endif; ?>
<?php if (isset($_SESSION['auth']['a'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_a' && $this->request['action'] === 'logout'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_a/logout', ['actor' => 'a']); ?>">Logout</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_a' && $this->request['action'] === 'change_password'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_a/change_password', ['actor' => 'a']); ?>">Change Password</a></li>
<?php endif; ?>
    </ul>
  </div>
</nav>
