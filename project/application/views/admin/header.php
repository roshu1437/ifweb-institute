<!-- Dropdown Structure -->
<ul id="navbar_dropdown" class="dropdown-content">
  <li><a href="<?=base_url('profile')?>">profile</a></li>
  <li><a href="<?=base_url('logout')?>">Logout</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="<?=base_url()?>" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li class="<?=@$home?>">
        <a href="<?=base_url()?>">Home</a>
      </li>
      <li class="<?=@$about?>">
        <a href="<?=base_url('about')?>">About</a>
      </li>
      <li class="<?=@$contact?>">
        <a href="<?=base_url('contact')?>">Contact</a>
      </li>
      <!-- Dropdown Trigger -->
      <li>
        <?php if(isset($this->session->admin)){ ?>
          <a class="dropdown-trigger" href="#!" data-target="navbar_dropdown">Welcom <?=$this->session->admin?>
            <i class="material-icons right">arrow_drop_down</i>
          </a>
        <?php }else{ ?>
          <a href="<?=base_url('admin-login')?>">Login </a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>

        