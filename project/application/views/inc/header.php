<!-- Dropdown Structure -->
<ul id="navbar_dropdown" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="<?=base_url()?>" class="brand-logo">Logo</a>
    <ul class="right hide-on-med-and-down">
      <li class="<?=@$home?>"><a href="<?=base_url()?>">Home</a></li>
      <li class="<?=@$about?>"><a href="<?=base_url('about')?>">About</a></li>
      <li class="<?=@$contact?>"><a href="<?=base_url('contact')?>">Contact</a></li>
      <!-- Dropdown Trigger -->
      <li>
        <a class="dropdown-trigger" href="#!" data-target="navbar_dropdown">Inner Links
          <i class="material-icons right">arrow_drop_down</i>
        </a>
      </li>
    </ul>
  </div>
</nav>
        