<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" href="<?php $this->href(''); ?>">Vendor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
<?php if (!isset($_SESSION['auth']['v'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'login'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/login', ['actor' => 'g']); ?>">Login</a></li>
<?php endif; ?>
<?php if (isset($_SESSION['auth']['v'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'logout'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/logout', ['actor' => 'v']); ?>">Logout</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'change_password'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/change_password', ['actor' => 'v']); ?>">Change Password</a></li>
<?php endif; ?>
    </ul>
  </div>
</nav>
