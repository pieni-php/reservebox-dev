<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php $this->href(''); ?>">Auth demo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
<?php if (!isset($_SESSION['auth']['m'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_m' && $this->request['action'] === 'join'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_m/join', ['actor' => 'g']); ?>">Join(m)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_m' && $this->request['action'] === 'login'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_m/login', ['actor' => 'g']); ?>">Login(m)</a></li>
<?php endif; ?>
<?php if (isset($_SESSION['auth']['m'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_m' && $this->request['action'] === 'unregister'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_m/unregister', ['actor' => 'm']); ?>">Unregister(m)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_m' && $this->request['action'] === 'logout'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_m/logout', ['actor' => 'm']); ?>">Logout(m)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_m' && $this->request['action'] === 'change_email'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_m/change_email', ['actor' => 'm']); ?>">Change Email(m)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_m' && $this->request['action'] === 'change_password'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_m/change_password', ['actor' => 'm']); ?>">Change Password(m)</a></li>
<?php endif; ?>
<?php if (!isset($_SESSION['auth']['a'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_a' && $this->request['action'] === 'login'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_a/login', ['actor' => 'g']); ?>">Login(a)</a></li>
<?php endif; ?>
<?php if (isset($_SESSION['auth']['a'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_a' && $this->request['action'] === 'logout'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_a/logout', ['actor' => 'a']); ?>">Logout(a)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_a' && $this->request['action'] === 'change_password'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_a/change_password', ['actor' => 'a']); ?>">Change Password(a)</a></li>
<?php endif; ?>
<?php if (!isset($_SESSION['auth']['v'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'join'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/join', ['actor' => 'g']); ?>">Join(v)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'login'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/login', ['actor' => 'g']); ?>">Login(v)</a></li>
<?php endif; ?>
<?php if (isset($_SESSION['auth']['v'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'unregister'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/unregister', ['actor' => 'v']); ?>">Unregister(v)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'logout'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/logout', ['actor' => 'v']); ?>">Logout(v)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'change_email'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/change_email', ['actor' => 'v']); ?>">Change Email(v)</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'change_password'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/change_password', ['actor' => 'v']); ?>">Change Password(v)</a></li>
<?php endif; ?>
    </ul>
  </div>
</nav>
