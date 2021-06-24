<header class="header">
    <div class="container">
        <!--navbar-->
        <div class="header__navbar">
            <!-- brand -->
            <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo Tropical Pet">
            </a>

            <div class="header__navbar__section">
                <!-- toggle -->
                <div class="header__navbar__section__toggle<?= is_page() ? ' toggle__pages' : '' ?>">
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                </div>
                <!-- end of toggle -->

                <!-- container -->
                <div class="header__navbar__section__container">
                    <!-- nav -->
                    <nav class="header__navbar__section__container__nav<?= is_page() ? ' header--pages' : '' ?>">
                        <h2 class="d-none">Menu de Navegação</h2>
                        <?php
                        if(is_home()){
                            wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                        }elseif (is_page()) {
                            wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                        }
                        ?>
                    </nav>
                    <!-- end of nav -->
                </div>
                <!-- end of container -->

            </div>
        </div>
        <!--end of navbar-->
    </div>
</header>