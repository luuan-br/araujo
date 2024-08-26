<?php get_header();?>

<?php
    $post_type = 'team';
    $taxonomies = get_object_taxonomies($post_type);

    $taxonomy = "team-category";
    $args = array(
        'hide_empty' => true,
        'parent' => 0,
    );

    $terms = get_terms($taxonomy, $args);

    $queried_object = get_queried_object();
?>

<div class="header-equipe py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="areas">
                    <?php foreach( $terms as $term): ?>
                    <a href="<?= get_term_link($term->term_id) ?>" current-page="<?=  $queried_object->slug === $term->slug ? 'true' : 'false' ?>" class="area">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">

                        <div class="card-area__title"><?= $term->name; ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sepator"></div>

<?php 
    $args = array(
        'post_type' => 'team',
        'post_per_page' => -1,
        'order'   => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => "team-category",
                'field' => 'slug',
                'terms' => array($queried_object->slug), 
            )
        )
    );

    $query = new WP_Query( $args );   
    
    if (!function_exists('criarSigla2')) {
        function criarSigla2($nomeCompleto) {
            // Divide o nome completo em partes
            $nomes = explode(' ', $nomeCompleto);
            
            // Pega a primeira letra do primeiro nome
            $primeiraInicial = substr($nomes[0], 0, 1);
            
            // Pega a primeira letra do último nome
            $ultimaInicial = substr($nomes[count($nomes) - 1], 0, 1);
            
            // Junta as iniciais e retorna a sigla
            $sigla = strtoupper($primeiraInicial . $ultimaInicial);
            return $sigla;
        }
    }
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <?php if ( $query->have_posts() ): ?>
            <div class="page-lawyers">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="lawyer" >
                    <div class="lawyer__icon">
                        <?php if(( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail())): ?>
                            <?php 
                                $post_thumbnail_id = get_post_thumbnail_id();
                                $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                            ?>
                            <?php if(!empty($post_thumbnail_url)): ?>
                                <img class="profile img-fluid" src="<?= $post_thumbnail_url; ?>" alt="<?= the_title(); ?>" />
                            <?php  endif; ?>
                        <?php else: ?>
                            <?php $name= get_the_title(); ?>
                            <div class="sigla">
                                <?= criarSigla2($name); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lawyer__content">
                        <div class="icon">
                            <?php if(( function_exists('has_post_thumbnail') ) && ( has_post_thumbnail())): ?>
                                <?php 
                                    $post_thumbnail_id = get_post_thumbnail_id();
                                    $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                                ?>
                                <?php if(!empty($post_thumbnail_url)): ?>
                                    <img class="profile img-fluid" src="<?= $post_thumbnail_url; ?>" alt="<?= the_title(); ?>" />
                                <?php  endif; ?>
                            <?php else: ?>
                                <?php $name= get_the_title(); ?>
                                <div class="sigla">
                                    <?= criarSigla2($name); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="name"><?= get_the_title(); ?></div>
                        <?php if (has_excerpt()) : ?>
                        <div class="content"><strong>Áreas de atuação: </strong><?= get_the_excerpt(); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="lawyer__actions">
                        <a href="#">
                            <img src="<?= get_template_directory_uri() . '/assets/images/v-card.svg'; ?>" alt="Vcard" class="img-fluid">
                            <span>Vcard</span>
                        </a>
                        <a href="<?= get_the_permalink() ?>">
                            <img src="<?= get_template_directory_uri() . '/assets/images/document.svg'; ?>" alt="Ver perfil" class="img-fluid">
                            <span>Ver perfil</span>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>