<?php get_header();?>

<div id="Areas-of-expertise" class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sub-title">Áreas de atuação</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="areas">
                    <div class="area">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">
                        <div class="area__title">Empresarial</div>
                    </div>

                    <div class="area">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">
                        <div class="area__title">Infraestrutura, Regulatório e Direito Administrativo</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sepator"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12 my-5">
            <div class="sub-title">Esporte e Entretenimento</div>

            <ul>
                <li>Estruturação de Associações Esportivas;</li>
                <li>Contratos;</li>
                <li>Auditorias para Investimentos e Transferências;</li>
                <li>Empreendimentos Culturais e Artísticos;</li>
                <li>Televisão;</li>
                <li>TV Paga;</li>
                <li>Contratos e Auditorias para Investimentos e Transferência de Atletas;</li>
                <li> Estruturação de Associações Esportivas;</li>
                <li>Construção de estádios;</li>
                <li>Incentivos Fiscais ao Esporte;</li>
                <li>Incentivo de Produção de Conteúdo Audiovisual (FUNCINE) e à Arte e Cultura (Lei ROUANET).</li>
            </ul>

            <div class="divider"></div>

            <div class="sub-title">Advogados que atuam nesta área:</div>

            <div class="lawyers">
                <a class="lawyer" href="#">
                    <div class="lawyer__icon">
                        <div class="sigla">JT</div>
                    </div>
                    <div class="lawyer__content">
                        <div class="name">José Theodoro Alves de Araújo</div>
                    </div>
                </a>
                <a class="lawyer" href="#">
                    <div class="lawyer__icon">
                        <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/images/profile.png'; ?>" />
                    </div>
                    <div class="lawyer__content">
                        <div class="name">Bárbara dos Santos Moreira</div>
                    </div>
                </a>
            </div>

            <div class="divider"></div>

            <div class="sub-title">Últimas  publicações</div>

            <div class="posts-lines">
                <a href="#" class="post">
                    <div class="post__title">Domicílio Judicial Eletrônico</div>
                    <div class="post__date">19/04/2024</div>
                </a>
                <a href="#" class="post">
                    <div class="post__title">Domicílio Judicial Eletrônico</div>
                    <div class="post__date">19/04/2024</div>
                </a>
                <a href="#" class="post">
                    <div class="post__title">Domicílio Judicial Eletrônico</div>
                    <div class="post__date">19/04/2024</div>
                </a>
                <a href="#" class="post">
                    <div class="post__title">Domicílio Judicial Eletrônico</div>
                    <div class="post__date">19/04/2024</div>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>