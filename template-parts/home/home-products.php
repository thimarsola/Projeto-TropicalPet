<section id="produtos" class="products">
    <div class="container">

        <!-- header -->
        <header class="products__header">
            <h2>Nossos produtos</h2>
            <p>Conheça toda a nossa linha de produtos para o seu Pet</p>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="products__row">
            <?php
                $jsonProducts = file_get_contents(__DIR__ . "/../../includes/products.json");
                $productsList = json_decode($jsonProducts, true);

                foreach ($productsList['products'] as $product):
            ?>

                <!-- card -->
                <article class="products__row__card">
                    <!-- header -->
                    <header class="products__row__card__header">
                        <!-- icon -->
                        <div class="products__row__card__header__icon">
                            <i class="<?= $product['icon']; ?>"></i>
                        </div>
                        <!-- end of icon -->

                        <h3><?= $product['name']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <!-- container -->
                    <div class="products__row__card__container">
                        <p><?= $product['description']; ?></p>

                        <a href="<?= get_permalink(get_page_by_title($product['name'])); ?>" class="btn btn-orange-500" target="_blank" title="Saiba mais">Saiba mais</a>
                    </div>
                    <!-- end of container -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->

    </div>
</section>