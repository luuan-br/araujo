<?php get_header();?>

<div id="single">
    <div class="container" id="thumbnail">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="post-header">
                    <?php if( has_post_thumbnail() ): ?>
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" class="img-fluid">
                    <?php else: ?>
                        <img src="<?= get_template_directory_uri() . '/assets/images/default.webp'; ?>" alt="<?= get_the_title(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <div class="shares d-none">
                    <a href="#" class="share">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#415893"/>
                            <path d="M16.4109 13.4898L16.8769 10.4366H13.9595V8.4554C13.9595 7.61972 14.3662 6.80595 15.6738 6.80595H17V4.20657C17 4.20657 15.7969 4 14.6452 4C12.2421 4 10.6712 5.46166 10.6712 8.10955V10.4366H8V13.4898H10.6712V20.8717C11.2073 20.9562 11.7558 21 12.3153 21C12.8748 21 13.4234 20.9562 13.9595 20.8717V13.4898H16.4109Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="share">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                            <circle cx="13" cy="13" r="13" fill="#6EBF58"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.667 7.32461C17.1637 5.82612 15.1619 5 13.0316 5C8.64093 5 5.06698 8.55638 5.06512 12.9278C5.06512 14.3244 5.43163 15.6895 6.1293 16.8916L5 21L9.22326 19.8979C10.386 20.5295 11.6977 20.8629 13.0298 20.8629H13.0335C17.4242 20.8629 20.9981 17.3066 21 12.9333C21 10.8143 20.1721 8.82311 18.6688 7.32461H18.667ZM13.0316 19.5237H13.0298C11.8409 19.5237 10.6763 19.2051 9.66047 18.605L9.4186 18.4624L6.91256 19.1162L7.58233 16.6842L7.42419 16.4341C6.76186 15.3857 6.41209 14.1725 6.41209 12.9278C6.41209 9.29359 9.38326 6.33735 13.0372 6.33735C14.8065 6.33735 16.4679 7.02454 17.7181 8.26927C18.9684 9.51586 19.6567 11.1699 19.6549 12.9315C19.6549 16.5656 16.6837 19.5219 13.0335 19.5219L13.0316 19.5237ZM16.6633 14.5874C16.4642 14.4874 15.4856 14.0095 15.3033 13.9428C15.1209 13.8761 14.9888 13.8428 14.8549 14.0428C14.7228 14.241 14.3414 14.6874 14.2242 14.8189C14.1088 14.9505 13.9916 14.9671 13.7926 14.8689C13.5935 14.7689 12.9516 14.5615 12.1926 13.8854C11.6009 13.3593 11.2009 12.711 11.0856 12.5128C10.9702 12.3147 11.0726 12.2072 11.173 12.1091C11.2623 12.0201 11.3721 11.8775 11.4707 11.7627C11.5693 11.6478 11.6028 11.5645 11.6698 11.433C11.7367 11.3015 11.7033 11.1848 11.653 11.0866C11.6028 10.9866 11.2047 10.0123 11.0391 9.61588C10.8772 9.22876 10.7135 9.28247 10.5907 9.27506C10.4753 9.26951 10.3414 9.26765 10.2093 9.26765C10.0772 9.26765 9.8614 9.31767 9.67907 9.51586C9.49674 9.71405 8.98326 10.1938 8.98326 11.1681C8.98326 12.1424 9.69581 13.0852 9.79628 13.2167C9.89488 13.3482 11.1991 15.3505 13.1972 16.2081C13.6716 16.4119 14.0437 16.5342 14.3321 16.6249C14.8084 16.7749 15.2437 16.7546 15.586 16.7027C15.9693 16.6453 16.7637 16.223 16.9293 15.7599C17.0949 15.2968 17.0949 14.9004 17.0447 14.8171C16.9944 14.7337 16.8623 14.6856 16.6633 14.5856V14.5874Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="post-content">
                    <h1><?php the_title() ?></h1>

                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>

    <?php 

        global $post;
            
        $categories = get_the_category($post->ID);

        $category_ids = array();
            
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }
            
        $args = array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page' => 8, // Número de posts relacionados a serem exibidos
            'caller_get_posts' => 1
        );
            
        $related_posts = new WP_Query($args);
    ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="divider"></div>

                <div class="sub-title">publicações Relacionadas</div>

                <?php if($related_posts->have_posts()): ?>
                <div class="posts-lines mb-5">
                    <?php while ($related_posts->have_posts()): ?>
                    <a href="<?php the_permalink() ?>" class="post">
                        <div class="post__title"><?php the_title_attribute(); ?></div>
                        <div class="post__date"><?= get_the_date( 'd/m/Y' ); ?></div>
                    </a>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php wp_reset_query(); ?>
</div>

<?php get_footer();?>