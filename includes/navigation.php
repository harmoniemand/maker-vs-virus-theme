<header>
  <nav id="top-nav" class="bg-p vh-20 shadow p-4 navbar navbar-expand-lg text-white navbar-dark text-lg">
    <a class="navbar-brand" href="#">
		<img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="95" height="33" />
    </a>
    <!-- MAIN NAV ITEMS FOR LATER
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  -->
	  
    <div class="align-self-center ml-auto">
      <ul class="navbar-nav">
        <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1, 'dropdown' => 1)); ?>
      </ul>
    </div>

  </nav>
	
</header>