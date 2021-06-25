<section id="quem-somos" class="about">
    <div class="container">
        
        <!-- row -->
        <div class="about__row">
            <!-- image -->
            <div class="about__row__image">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/imagem-quem-somos.webp" type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/imagem-quem-somos.png" alt="<?= SITE['name']; ?> - Quem somos" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->

            <!-- container -->
            <div class="about__row__container">
                <!-- header -->
                <header class="about__row__container__header">
                    <h2>Quem somos</h2>
                </header>
                <!-- end of header -->

                <p>A Tropical Pet foi fundada em 1981 por um amante de animais. No começo éramos uma avicultura, nosso foco era pássaros e peixes. Fomos crescendo e com o tempo aumentando o nosso mix de produtos para cães e gatos. Como rações, medicamentos e acessórios. Hoje possuímos mais de 10.000 itens das melhores marcas do mercado.</p>
                <br>
                <p>Temos uma clínica veterinária planejada e equipada para oferecer o melhor atendimento aos nossos clientes de quatro patas.</p>
                <br>
                <p>Estamos há 40 anos atendendo os nossos clientes da melhor forma possível.</p>

                <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], 'Fale conosco',  'btn btn-outline-orange-500'); ?>

            </div>
            <!-- end of container -->

        </div>
        <!-- end of row -->
        
    </div>
</section>