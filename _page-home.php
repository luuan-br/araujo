<?php get_header();?>

<div id="carousel-hero" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= get_template_directory_uri() . '/assets/images/banner.png' ?>" class="d-none d-lg-block w-100" alt="...">
      <img src="<?= get_template_directory_uri() . '/assets/images/banner-mobile.png' ?>" class="d-lg-none w-100" alt="...">
      <div class="carousel-caption">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <a href="#">Saiba mais</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= get_template_directory_uri() . '/assets/images/banner.png' ?>" class="d-none d-lg-block" alt="...">
      <img src="<?= get_template_directory_uri() . '/assets/images/banner-mobile.png' ?>" class="d-lg-none w-100" alt="...">
      <div class="carousel-caption">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-hero" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-hero" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div id="clients">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="clients scroll-w">
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                    <a href="#" class="client">
                        <img src="<?= get_template_directory_uri() . '/assets/images/best-lawyers-p.png'?>" alt="best-lawyers-p">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="posts">
    <div class="container" style="overflow: hidden;">
        <div class="row">
            <div class="col-12">
                <h2 class="sub-title">Últimas publicações</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="post-carousel" class="posts f-carousel">
                    <div class="f-carousel__slide" href="#">
                        <a href="#" class="post">
                            <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                            <div class="post__content">
                                <div class="execpt">
                                    Temas relevantes que foram julgados pelo STJ no ano de 2023
                                </div>
                                <div class="date">20/12/2023</div>
                            </div>
                        </a>
                    </div>
                    <div class="f-carousel__slide" href="#">
                        <a href="#" class="post">
                            <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                            <div class="post__content">
                                <div class="execpt">
                                    Temas relevantes que foram julgados pelo STJ no ano de 2023
                                </div>
                                <div class="date">20/12/2023</div>
                            </div>
                        </a>
                    </div>
                    <div class="f-carousel__slide" href="#">
                        <a href="#" class="post">
                            <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                            <div class="post__content">
                                <div class="execpt">
                                    Temas relevantes que foram julgados pelo STJ no ano de 2023
                                </div>
                                <div class="date">20/12/2023</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="areas-of-expertise" class="mt-3 mt-lg-0">
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
                    
                    <div class="area">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">
                        <div class="area__title">Infraestrutura, Regulatório e Direito Administrativo</div>
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

<div id="about-more">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="sub-title">Mais sobre nós</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="about-more">
                    <div class="card-about">
                        <img class="card-about__image" src="<?= get_template_directory_uri() . '/assets/images/nossa-historia.png' ?>" alt="nossa historia" />
                        <h2 class="card-about__title">Quem somos</h2>
                    </div>

                    <div class="card-about">
                        <img class="card-about__image" src="<?= get_template_directory_uri() . '/assets/images/nossa-historia.png' ?>" alt="nossa historia" />
                        <h2 class="card-about__title">Quem somos</h2>
                    </div>

                    <div class="card-about">
                        <img class="card-about__image" src="<?= get_template_directory_uri() . '/assets/images/nossa-historia.png' ?>" alt="nossa historia" />
                        <h2 class="card-about__title">Quem somos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="find-us" class="mt-3 mt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="sub-title">Onde nos encontrar</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg mb-3 mb-lg-0">
                <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4591698934696!2d-46.68295672481781!3d-23.587859978781598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5744aab55727%3A0x1ecb8d884da50dfb!2sEdif%C3%ADcio%20New%20Century%20-%20R.%20Leopoldo%20Couto%20Magalh%C3%A3es%20J%C3%BAnior%2C%20758%20-%20Itaim%20Bibi%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004542-000!5e0!3m2!1spt-BR!2sbr!4v1718507089853!5m2!1spt-BR!2sbr" width="536.023px" height="536.023px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-12 col-lg mb-3 mb-lg-0">
                <div class="newsletter">
                    <h3 class="newsletter__title">
                        <img class="icon" src="<?=  get_template_directory_uri() . '/assets/images/OBJECTS.png'?>" />
                        <span class="text">Assine nossa Newsletter</span>
                    </h3>
                </div>
            </div>

            <div class="col-12 col-lg">
                <div class="contact-us">
                    <h3 class="contact-us__title">
                        <img class="icon" src="<?=  get_template_directory_uri() . '/assets/images/OBJECTS.png'?>" />
                        <span class="text">Fale Conosco</span>
                    </h3>

                    <div class="contact-us__content">
                        <p>Tel.: <span>+55 11 3049 5700</span></p>
                        <p>Horário de Atendimento:</p>
                        <p>De segunda à sexta das 8h às 20h</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>