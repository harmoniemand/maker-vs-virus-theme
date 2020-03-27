<header>
    <div class="container">
        <div class="company-name"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="95" height="33" /></a></div>

        <nav>
            <a class="nav-toggle" id="open-nav" href="#">&#9776;</a>

            <ul>
                <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
            </ul>

        </nav>

    </div>
</header>