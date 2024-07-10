<?php get_header();?>

<?php 
    function criarSigla($nomeCompleto) {
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
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="header-lawyer my-5">
                <div class="lawyer" href="#">
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
                                <?= criarSigla($name); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="lawyer__content">
                        <div class="name"><?= the_title(); ?></div>
                        <div class="office"><?= get_the_terms(get_the_ID(), 'team-category')[0]->name; ?></div>

                        <?php $infos = get_field('info'); ?>
                        <?php if(!empty($infos)): ?>
                        <div class="info">
                            <?php foreach($infos as $info): ?>
                            <a href="<?= !empty($info['url']) ? $info['url'] : '#' ?>" class="info__item">
                                <div class="icon">
                                    <?php if(!empty( $info['icone'])): ?>
                                        <?= wp_get_attachment_image( $info['icone']['ID'], 'full', '', array( 'class' => '' ) ); ?>
                                    <?php endif; ?>
                                </div>

                                <?php if(!empty( $info['texto'])): ?>
                                    <div class="text"><?= $info['texto'] ?></div>
                                <?php endif; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="sepator" class="mb-4"></div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12 mb-5">
            <?php the_content(); ?>

            <div class="divider"></div>

            <div class="sub-title">Últimas  publicações</div>

            <?php 
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                    'post_type' => 'post',
                    'paged' => $paged,
                    'order'   => 'ASC'
                );

                $query = new WP_Query( $args );                            
            ?>

            <?php if ( $query->have_posts() ): ?>
            <div class="posts-lines">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <a href="<?= get_permalink(); ?>" class="post">
                    <div class="post__title"><?= get_the_title(); ?></div>
                    <div class="post__date"><?= get_the_date( 'd/m/Y' ); ?></div>
                </a>
                <?php endwhile; ?>
            </div>
            <?php else : ?>                      
                <p>Nenhum post encontrado.</p>
            <?php endif;?>
        </div>
    </div>
</div>

<?php get_footer();?>