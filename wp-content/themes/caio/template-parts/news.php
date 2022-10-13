<section id="news">

    <div class="bg"></div>

    <div class="container container-big">
        <div class="row">
            <div class="col-12">

                <div class="top">

                    <div class="left">

                        <p class="title-big trapeze-title">
                            Caio <br />
                            <span>nas Novidades</span>
                        </p>

                        <a href="<?=get_site_url()?>/projeto" class="text-medium">
                            ver todas as novidades
                        </a>

                    </div>

                    <div class="right">
                        <div class="news-slider-nav">

                            <button class="prev">
                                <?php get_template_part('assets/svg/arrow-left', 'none'); ?>
                            </button>

                            <button class="next">
                                <?php get_template_part('assets/svg/arrow-right', 'none'); ?>
                            </button>

                        </div>
                    </div>
                    
                </div>

                <div class="bottom">
                    <div class="news-slider swiper-container">
                        <div class="swiper-wrapper">

                            <?php
                                $args = array(
                                    'posts_per_page' => 6,
                                    'post_type' => 'post',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_status' => array('publish','future'),
                                );

                                $wp_query = new WP_Query( $args );
                            ?>

                            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                                <div class="swiper-slide">
                                    <a href="<?php echo get_permalink(); ?>" class="news-block">

                                        <div class="image">

                                           <?php if( get_field('direitos') ) { ?>
                                                <p class="text-small photo-rights">
                                                    <?php the_field('direitos'); ?>
                                                </p>
                                            <?php } ?>

                                            <div class="yellow-circle"></div>

                                            <div class="thumbnail">
                                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'big') ?>" alt="<?php echo get_the_title(); ?>">
                                            </div>

                                        </div>

                                        <div class="content">

                                            <h2 class="text-medium-big title">
                                                <?php echo wp_trim_words(get_the_title(), 20, '...'); ?>
                                            </h2>

                                            <p class="text-medium link">
                                                leia mais
                                            </p>

                                        </div>

                                    </a>
                                </div>

                            <?php endwhile; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>