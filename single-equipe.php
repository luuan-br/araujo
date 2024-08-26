<?php get_header();?>

    <?php global $post; ?>

    <?php 
    
    
    ?>

    <div class="separator"></div>

    <?php $expertise = get_field('related_expertise', $post->ID); ?>

    <?php if( $expertise ): ?>
        <section id="related-expertise" class="content container mt-5 mb-2">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-12">
                                <h3>Áreas de Atuação</h3>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-2 mb-2">
                        <div class="row related-expertise-list">
                            <?php foreach( $expertise as $post ):  setup_postdata($post); ?>
                                <div data-expertise="<?php echo get_the_ID(); ?>" class="col-12 col-md-5 mt-2 mb-2">
                                    <a href="<?php echo get_the_permalink(); ?>">
                                    <div class="related-expertise-list-item">
                                        <span><?php echo get_the_title(); ?></span>
                                    </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>                            
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>

    <section id="content" class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <?php if (have_posts()): ?>
                                <?php while (have_posts()): the_post();?>
                                    <?php the_content(); ?>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4
        );
        $recent_posts = new WP_Query($args);
    ?>
    <?php if ($recent_posts->have_posts()): ?>
        <section id="recent-posts" class="container border-top border-1 pt-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-12">
                                <h3>Últimas publicações</h3>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid ">
                        <div class="row">
                            <div class="col-12">
                                <div class="container-fluid mt-4 mb-4">
                                    <div class="row recent-posts">
                                        <?php while ($recent_posts->have_posts()): $recent_posts->the_post();?>
                                            <div data-expertise="<?php echo get_the_ID(); ?>" class="col-12 border-start border-4 mt-2 mb-2 recent-posts-item">
                                                <h4><?php echo get_the_title(); ?></h4>
                                                <span><?php echo get_the_date('d/m/Y'); ?></span>
                                            </div>
                                        <?php endwhile;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>

<?php get_footer();?>