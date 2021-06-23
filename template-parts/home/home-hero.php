<section class="hero">
    <div class="container">

        <!-- header -->
        <header class="hero__header">
            <h2>Tudo o que seu pet precisa!</h2>
        </header>
        <!-- end of header -->

        <!-- container -->
        <div class="hero__container">
            <p>Na Tropical Pet você encontra tudo para o dia-a-dia do seu pet</p>

            <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], 'Fale conosco',  'btn btn-white-500'); ?>
        </div>
        <!-- end of container -->

    </div>
</section>