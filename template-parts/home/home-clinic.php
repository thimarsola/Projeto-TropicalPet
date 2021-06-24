<section id="clinica-veterinaria" class="clinic">
    <div class="container">
        <!-- row -->
        <div class="clinic__row">
            <!-- image -->
            <div class="clinic__row__image">
                <picture>
                    <source srcset="<?= get_template_directory_uri(); ?>/assets/images/imagem-clinica-veterinaria.webp" type="image/webp">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/imagem-clinica-veterinaria.png" alt="<?= SITE['name']; ?> - Clinica Veterinária" loading="lazy">
                </picture>
            </div>
            <!-- end of image -->

            <!-- container -->
            <div class="clinic__row__container">
                <!-- header -->
                <header class="clinic__row__container__header">
                    <h2>Nossa clínica veterinária</h2>
                </header>
                <!-- end of header -->

                <p>Fazemos todo acompanhamento veterinário desde os primeiros dias de vidas, com orientações, programação de vacinas e todos os cuidados médicos necessários para seu melhor amigo.</p>
                <br>
                <p>Trabalhamos apenas com vacinas importadas e mantidas refrigeradas em uma geladeira monitorada 24h por dia para não perderem a qualidade.</p>
                <br>
                <p>Temos atendimentos de segunda a sábado exceto feriados. Atendimento por ordem de chegada, apenas cirurgia são previamente agendadas.</p>
                <br>
                <p>Prezamos por uma veterinária ética, com qualidade, carinho e profissionalismo.</p>

                <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['messageClinic'], 'Agende sua consulta',  'btn btn-orange-500', 'Vamos agendar uma consulta?'); ?>
            </div>
            <!-- end of container -->

        </div>
        <!-- end of row -->
    </div>
</section>