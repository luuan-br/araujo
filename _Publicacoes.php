<?php get_header();?>

<div id="carousel-hero" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= get_template_directory_uri() . '/assets/images/banner.png' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= get_template_directory_uri() . '/assets/images/banner.png' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
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

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="sub-title mt-4">Últimas publicações</h1>

            <div class="posts">
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
                <a class="post" href="#">
                    <img src="<?= get_template_directory_uri() . '/assets/images/post.png' ?>" alt="" class="post__image">
                    <div class="post__content">
                        <div class="execpt">
                            Temas relevantes que foram julgados pelo STJ no ano de 2023
                        </div>
                        <div class="date">20/12/2023</div>
                    </div>
                </a>
            </div>

            <div class="btn btn-load-more-posts">
                <span>Carregar mais notícias</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 20 11" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.32828 10.5741C9.70942 10.9197 10.2906 10.9197 10.6717 10.5741L19.183 2.85655C19.6207 2.45966 19.6207 1.77183 19.183 1.37494L18.3384 0.609083C17.9573 0.263488 17.3761 0.263488 16.9949 0.609083L10.6717 6.34265C10.2906 6.68825 9.70942 6.68825 9.32828 6.34265L3.00506 0.609083C2.62392 0.263487 2.04275 0.263486 1.66161 0.609083L0.816989 1.37494C0.379285 1.77183 0.379285 2.45966 0.816989 2.85655L9.32828 10.5741Z" fill="#F45B06"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>