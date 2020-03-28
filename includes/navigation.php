<header class="m-0 p-0">
    <nav id="top-nav" class="bg-p shadow navbar navbar-expand-lg text-white navbar-dark text-lg">
        <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" width="95" height="33" />
        </a>

        <div class="align-self-center ml-auto">
            <ul class="navbar-nav">

                <?php $translations = pll_the_languages(array('raw' => 1)); ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo pll_current_language() ?>
                    </a>
                    <div class="dropdown-menu dropleft" aria-labelledby="navbarDropdown">
                        <?php foreach ($translations as $translation) : ?>
                            <a class="dropdown-item" href="<?php echo $translation['url'] ?>"><?php echo $translation['name'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </li>

            </ul>
        </div>

    </nav>

</header>