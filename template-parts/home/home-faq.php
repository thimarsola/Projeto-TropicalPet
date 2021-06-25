<section class="faq">
    <div class="container">

        <!-- row -->
        <div class="faq__row">
            <!-- container -->
            <div class="faq__row__container">
                <!-- header -->
                <header class="faq__row__container__header">
                    <h2>Perguntas frequentes</h2>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="faq__row__container__content">
                    <?php
                    $questions = file_get_contents(__DIR__ . "/../../includes/questions.json");
                    $questionsList = json_decode($questions, true);

                    foreach ($questionsList['questions'] as $question):
                        ?>

                        <!-- item -->
                        <div class="faq__row__container__content__item">

                            <!-- header -->
                            <header class="faq__row__container__content__item__header">
                                <h3><?= $question['question']; ?></h3>
                                <span>+</span>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="faq__row__container__content__item__body">
                                <p><?= $question['answer']; ?></p>
                            </div>
                            <!-- end of body -->

                        </div>
                        <!-- end of item -->

                    <?php endforeach; ?>
                </div>
                <!-- end of content -->
            </div>
            <!-- end of container -->

            <!-- image -->
            <div class="faq__row__image">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/vetor-faq.svg" alt="Perguntas Frequentes" loading="lazy">
            </div>
            <!-- end of image -->
        </div>
        <!-- end of row -->
    </div>
</section>