<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" href="<?php $this->href(''); ?>">Vendor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
<?php if (isset($_SESSION['auth']['v'])): ?>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'logout'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/logout', ['actor' => 'v']); ?>">Logout</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'auth_v' && $this->request['action'] === 'change_password'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('auth_v/change_password', ['actor' => 'v']); ?>">Change Password</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'vendor'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('vendor', ['actor' => 'v']); ?>">vendor</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'agent'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('agent', ['actor' => 'v']); ?>">agent</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'member'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('member', ['actor' => 'v']); ?>">member</a></li>
      <li class="nav-item<?php if ($this->request['target'] === 'resource'): ?> active<?php endif; ?>"><a class="nav-link" href="<?php $this->href('resource', ['actor' => 'v']); ?>">resource</a></li>
<?php endif; ?>
    </ul>
  </div>
</nav>
