<section class="testimonial">
    <div class="container bg-blue-500">

        <!-- header -->
        <header class="testimonial__header">
            <h2>Nossos depoimentos</h2>
            <p>Conheça o que os nossos clientes dizem sobre a Tropical Pet</p>
        </header>
        <!-- end of header -->

        <!-- carousel -->
        <div class="testimonial__carousel owl-carousel">
            <?php
                $testimonial = file_get_contents(__DIR__ . "/../../includes/testimonial.json");
                $testimonialList = json_decode($testimonial, true);

                foreach ($testimonialList['testimonial'] as $testimony) :
            ?>

                <!-- card -->
                <div class="testimonial__carousel__card">
                    <!-- header -->
                    <div class="testimonial__carousel__card__header">
                        <p><?= $testimony['name']; ?></p>
                        <ul>
                            <?php
                                for($icon=1; $icon < 6; $icon++){
                            ?>
                                    <li>
                                        <i class="pet-star"></i>
                                    </li>
                            <?php }?>
                        </ul>
                    </div>
                    <!-- end of header -->

                    <!-- container -->
                    <div class="testimonial__carousel__card__container">
                        <p><?= $testimony['description']; ?></p>
                    </div>
                    <!-- end of container -->

                </div>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of carousel -->

    </div>
</section>