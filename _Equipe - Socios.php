<?php get_header();?>

<div class="header-equipe py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <div class="col">
                        <div class="area action d-flex mx-auto">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">
                            <div class="area__title">Sócios</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="area d-flex mx-auto">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">
                            <div class="area__title">Associados</div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="area d-flex mx-auto">
                            <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">
                            <div class="area__title">Estagiários</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div id="sepator"></div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="page-lawyers">
                <div class="lawyer" href="#">
                    <div class="lawyer__icon">
                        <div class="sigla">JT</div>
                    </div>
                    <div class="lawyer__content">
                        <div class="name">José Theodoro Alves de Araújo</div>
                        <div class="content"><strong>Áreas de atuação:</strong> Empresarial, Bancário e Mercado de Capitais, Infraestrutura, Regulatório e Direito Administrativo, Direito Antitruste & Concorrencial, Família e Sucessões, Planejamento Patrimonial e SucessórioLitígios no Mercado de Capitais.</div>
                    </div>
                    <div class="lawyer__actions">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . '/assets/images/v-card.svg'; ?>" alt="Vcard" class="img-fluid">
                            <span>Vcard</span>
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . '/assets/images/document.svg'; ?>" alt="Ver perfil" class="img-fluid">
                            <span>Ver perfil</span>
                        </a>
                    </div>
                </div>
                <div class="lawyer" href="#">
                    <div class="lawyer__icon">
                        <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/images/profile.png'; ?>" />
                    </div>
                    <div class="lawyer__content">
                        <div class="name">Bárbara dos Santos Moreira</div>
                        <div class="content"><strong>Áreas de atuação:</strong> Responsabilidade Civil, Família e Sucessões.</div>
                    </div>
                    <div class="lawyer__actions">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . '/assets/images/v-card.svg'; ?>" alt="Vcard" class="img-fluid">
                            <span>Vcard</span>
                        </a>
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . '/assets/images/document.svg'; ?>" alt="Ver perfil" class="img-fluid">
                            <span>Ver perfil</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>