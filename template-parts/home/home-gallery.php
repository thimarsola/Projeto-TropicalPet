<section class="gallery">
    <div class="container">
        <!-- header -->
        <header class="gallery__header">
            <h2>Conheça a <?= SITE['name']; ?></h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="gallery__row">
            <?php
            for($img=1; $img < 8; $img++){
                ?>

                <!-- card -->
                <a href="<?= get_template_directory_uri(); ?>/assets/images/galeria-tropical-pet-<?= $img ?>.jpg" class="gallery__row__card__image">
                    <picture>
                        <source srcset="<?= get_template_directory_uri(); ?>/assets/images/galeria-tropical-pet-<?= $img ?>.webp" type="image/webp">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/galeria-tropical-pet-<?= $img ?>.jpg" alt="<?= SITE['name']; ?> - Conheça o nosso espaço - Foto <?= $img; ?>" loading="lazy">
                    </picture>
                </a>
                <!-- end of card -->

            <?php }?>
        </div>
        <!-- end of row -->
    </div>
</section>