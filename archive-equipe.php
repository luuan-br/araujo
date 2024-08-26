<?php get_header();?>

    <?php 
        $args = array(
            'taxonomy'   => 'cargos',
            'hide_empty' => false,
        );
        $terms = get_terms( $args );
        $active_term = isset($_GET['cargo']) ? $_GET['cargo'] : 'socios';
    ?>

    <section id="lawyers-types" class="content container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid mt-4 mb-4">
                    <div class="row d-flex justify-content-center align-items-stretch flex-row lawyers-type-list">
                        <?php if (!empty($terms)): ?>
                            <?php foreach ($terms as $term): ?>
                                <div class="col-4 col-md-2 mt-2 mb-2">
                                    <?php $active_class = ($active_term === $term->slug) ? 'active' : ''; ?>
                                    <?php $title = get_field('term_title', 'term_'.$term->term_id); ?>
                                    <?php $icon = get_field('term_icon', 'term_'.$term->term_id); ?>
                                    <?php $icon_white = get_field('term_icon_hover', 'term_'.$term->term_id); ?>
                                    <a href="/equipe?cargo=<?php echo $term->slug ?>">
                                        <div class="p-3 rounded-2 d-flex align-items-center justify-content-center flex-strech flex-column lawyers-type-list-item <?php echo $active_class; ?>">
                                            <img class="lawyers-type-list-item-icon" src="<?php echo $icon ?>" />
                                            <img class="lawyers-type-list-item-icon-hover" src="<?php echo $icon_white ?>" />
                                            <span><?php echo $title ?></span>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>

    <div class="separator"></div>

    <?php

        function lawyer_acronym1($name) {
            $parts = explode(' ', $name);
            $firstNameLetter = substr($parts[0], 0, 1);
            $lastNameLetter = substr($parts[count($parts) - 1], 0, 1);
            $acronym = strtoupper($firstNameLetter . $lastNameLetter);
            return $acronym;
        }

        $args = array(
            'post_type' => 'equipe',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'cargos',
                    'field' => 'slug',
                    'terms' => $active_term,
                ),
            ),
        );
        $lawyers = new WP_Query($args);

       
    ?>



    <?php if ($lawyers->have_posts()): ?>
        <section id="lawyers" class="container border-top border-1 pt-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid mt-4 mb-4">
                        <div class="row lawyers">
                            <?php while ($lawyers->have_posts()): $lawyers->the_post();?>
                                <?php $expertise = get_field('related_expertise', get_the_ID()); ?>                                
                                <?php 
                                    $expertises = "";
                                    if (!empty($expertise)) :
                                        $total = count($expertise);
                                        $count = 0;
                                        foreach ($expertise as $item):
                                            $count++;
                                            $separator = ($count === $total) ? '.' : ', ';
                                            $expertises = $expertises . $item->post_title . $separator;
                                        endforeach; 
                                    endif;
                                ?>
                                <div class="col-12 mt-2 mb-2">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <div class="d-flex flex-row flex-wrap justify-content-start align-items-start align-items-md-center lawyers-item">
                                            <div class="lawyers-item-image">
                                                <?php $photo = get_the_post_thumbnail_url(); ?>
                                                <?php if($photo != ""): ?>
                                                    <div class="lawyers-item-image-photo" style="background-image: url(<?php echo $photo ?>);"></div>
                                                <?php else: ?>
                                                    <?php $acronym = lawyer_acronym1(get_the_title()); ?>
                                                    <div class="lawyers-item-image-acronym"><?php echo $acronym; ?></div>
                                                <?php endif; ?>
                                            </div>
                                            
                                            <div class="lawyers-item-content">
                                                <h2><?php echo get_the_title(); ?></h2>
                                                <p><span>Áreas de atuação: </span><?php echo $expertises; ?></p>
                                            </div>
                                            
                                            <div class="lawyers-item-icons">
                                                <div class="lawyers-item-icons-vcard">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-v-card.png'; ?>">
                                                    <span>VCard</span>
                                                </div>

                                                <div class="lawyers-item-icons-profile">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-doc.png'; ?>">
                                                    <span>Ver perfil</span>
                                                </div>
                                                
                                                
                                            </div>


                                        </div>
                                    </a>
                                </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>

    

<?php get_footer();?>