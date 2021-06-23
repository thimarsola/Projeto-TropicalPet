<section id="contato" class="contact">
    <!-- header -->
    <header class="contact__header">
        <div class="container">
            <h2>Fale conosco</h2>
        </div>
    </header>
    <!-- end of header -->

    <!-- map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.2248906921664!2d-46.613404485020304!3d-23.667914284629994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce44b8c0d233e5%3A0x49bdb33380242d28!2sTropical%20Pet%20Shop!5e0!3m2!1spt-BR!2sbr!4v1624460129290!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
    <!-- end of map -->

    <!-- form -->
    <div class="contact__form bg-blue-500">
        <div class="container">
            <!-- row -->
            <div class="contact__form__row">
                <!-- information -->
                <div class="contact__form__row__information">

                    <!-- phones -->
                    <div class="contact__form__row__information__phones">
                        <!-- header -->
                        <header class="contact__form__row__information__phones__header">
                            <h3>Telefones</h3>
                            <hr>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="contact__form__row__information__phones__body">
                            <ul>
                                <li>
                                    <a rel="nofollow" href="tel:<?= formatPhone(CONTACT["phone"]["01"]); ?>" title="Vamos conversar?"><?= CONTACT["phone"]["01"]; ?></a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a rel="nofollow" href="tel:<?= formatPhone(CONTACT["phone"]["02"]); ?>" title="Vamos conversar?"><?= CONTACT["phone"]["02"]; ?></a>
                                </li>
                                <li>|</li>
                                <li>
                                    <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], CONTACT['whatsapp']['number']); ?>
                                </li>
                            </ul>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of phones -->

                    <!-- mail -->
                    <div class="contact__form__row__information__mail">
                        <!-- header -->
                        <header class="contact__form__row__information__mail__header">
                            <h3>E-mail</h3>
                            <hr>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="contact__form__row__information__mail__body">
                            <address>
                                <a rel="nofollow" href="mailto:<?= CONTACT['mail']; ?>" title="Vamos conversar?"><?= CONTACT['mail']; ?></a>
                            </address>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of mail -->

                    <!-- address -->
                    <div class="contact__form__row__information__address">
                        <!-- header -->
                        <header class="contact__form__row__information__address__header">
                            <h3>Endereço</h3>
                            <hr>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="contact__form__row__information__address__body">
                            <address>
                                <a rel="nofollow" href="<?= CONTACT['addressLink']; ?>" target="_blank" title="Venha nos visitar!"><?= CONTACT['address']; ?></a>
                            </address>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of address -->

                    <!-- schedule -->
                    <div class="contact__form__row__information__schedule">
                        <!-- header -->
                        <header class="contact__form__row__information__schedule__header">
                            <h3>Horário de funcionamento</h3>
                            <hr>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="contact__form__row__information__schedule__body">
                            <p>Segunda a Sexta das 08h as 18h</p>
                            <p>Sábados das 08h as 16h</p>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of address -->

                    <!-- midias -->
                    <div class="contact__form__row__information__midias">
                        <!-- header -->
                        <header class="contact__form__row__information__midias__header">
                            <h3>Siga-nos</h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="contact__form__row__information__phones__midias">
                            <ul>
                                <li>
                                    <a rel="nofollow" href="<?= CONTACT['facebook']; ?>" title="Siga a <?= SITE['name']; ?> no Facebook" target="_blank"><i class="pet-facebook"></i></a>
                                </li>
                                <li>
                                    <a rel="nofollow" href="<?= CONTACT['instagram']; ?>" title="Siga a <?= SITE['name']; ?> no Instagram" target="_blank"><i class="pet-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- end of body -->
                    </div>
                    <!-- end of midias -->
                </div>
                <!-- end of information -->

                <!-- form -->
                <div class="contact__form__row__form">
                    <form id="form" method="POST" enctype="multipart/form-data">
                        <!-- group -->
                        <div class="contact__form__row__form__group">
                            <label for="name" class="d-none">Nome</label>
                            <input type="text" name="name" placeholder="Nome" id="name" required>
                        </div>
                        <!-- end of group -->

                        <!-- group -->
                        <div class="contact__form__row__form__group">
                            <label for="email" class="d-none">E-mail</label>
                            <input type="email" name="email" placeholder="E-mail" id="email" required>
                        </div>
                        <!-- end of group -->

                        <!-- group -->
                        <div class="contact__form__row__form__group">
                            <label for="message" class="d-none">Mensagem</label>
                            <textarea id="message" name="message" cols="50" rows="4"></textarea>
                        </div>
                        <!-- end of group -->

                        <!-- status -->
                        <div class="contact__form__row__form__status">
                            <div class="d-none contact__form__row__form__status--loading">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Carregando" loading="lazy">
                            </div>
                        </div>
                        <!-- end of status -->

                        <!-- button -->
                        <div class="contact__form__row__form__button">
                            <button id="button" class="btn btn-orange-500" type="submit" name="submit" value="submit">Enviar mensagem</button>
                        </div>
                        <!-- end of button -->
                    </form>
                </div>
                <!-- end of form -->
            </div>
            <!-- end of row -->

            <!-- pets -->
            <div class="contact__form__pets">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/imagem-pets.webp" type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/imagem-pets.png" alt="Tropical Pet" loading="lazy">
                </picture>
            </div>
            <!-- end of pets -->
        </div>
    </div>
    <!-- end of form -->
</section>