<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

    <!-- BANNER -->
    <section class="home-banner">
        <div class="home-banner__wrap">
            <h2 class="font--chunkfive-print home-banner__title">
                <?php the_field('banner_title'); ?>
            </h2>
            <div class="home-banner__lead">
                <?php the_field('banner_text'); ?>
            </div>
            <div class="home-banner__buttons">
                <a href="<?php the_field('banner_button_1_url') ?>" class="home-banner__button--left btn bg-black text-white font--chunkfive">
                    <?php the_field('banner_button_1_text') ?>
                </a>
                <a href="<?php the_field('banner_button_2_url') ?>" class="font--chunkfive link--underline link--underline--black">
                    <?php the_field('banner_button_2_text') ?>
                </a>
            </div>
        </div>
        <div class="home-banner__left">
            <img src="<?php the_field('banner_left_image'); ?>" />
        </div>
        <div class="home-banner__right" style="background: url(<?php the_field('banner_right_image'); ?>)">

        </div>
    </section>
    <!-- END BANNER -->

    <!-- VIDEO -->
    <section class="home-video">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col--no-padding bg-black">
                    <div class="h-100 d-flex justify-content-center align-content-center flex-wrap" style="flex-direction: column;">
                        <img src="<?php the_field('play_image') ?>" class="home-video__play-icon" style="align-self: center;"/>
                        <div class="text-white mt-3">
                            <?php the_field('play_title'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col--no-padding bg-black">
                    <div class="h-100 d-flex justify-content-center align-content-center flex-wrap">
                        <div class="home-video__wrap">
                            <h2 class="home-video__title font--chunkfive-print mt-0 pb-0">
                                <?php the_field('video_title'); ?>
                            </h2>
                            <?php if( have_rows('video_product_logos') ): ?>
                                <div class="home-video__product-logos js-video-product-logos owl-carousel owl-theme">
                                    <?php while( have_rows( 'video_product_logos' ) ): the_row(); ?>
                                        <?php
                                        if( have_rows('slider') ): ?>
                                            <div class="item row text-center">
                                                <?php while( have_rows('slider') ) : the_row();
                                                    ?>
                                                    <div class="col-4 align-self-center">
                                                        <img src="<?php the_sub_field('logo'); ?>" />
                                                    </div>

                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END VIDEO -->

    <!-- PRODUCTS -->
    <?php if( have_rows('products') ): ?>
    <section class="home-products">
        <div class="container-fluid">
        <?php $i = 0; while( have_rows('products') ): the_row(); ?>
            <div class="row home-product">
                <div class="col-md-6 col--no-padding <?php if ($i %2 == 1):?>order-md-2<?php endif;?>">
                    <div class="h-100 d-flex justify-content-center align-content-center flex-wrap">
                        <div class="home-product__wrap">
                            <h2 class="home-product__title font--chunkfive-print" style="color: <?php the_sub_field('title_color'); ?>">
                                <?php the_sub_field('title'); ?>
                            </h2>
                            <div class="home-product__lead">
                                <?php the_sub_field('lead'); ?>
                            </div>
                            <div class="home-product__links font--chunkfive">
                                <div class="home-product__link--main">
                                    <a href="<?php the_sub_field('main_link_url'); ?>" class="link--underline font--chunkfive">
                                        <?php the_sub_field('main_link_title'); ?>
                                    </a>
                                </div>

                                <?php
                                if( have_rows('sub_links') ):
                                    while( have_rows('sub_links') ) : the_row();
                                        ?>
                                        <div class="home-product__link--sub">
                                            <a href="<?php the_sub_field('url') ?>" class="font--chunkfive">
                                                <?php the_sub_field('title') ?>
                                            </a>
                                        </div>
                                    <?php endwhile; endif ?>
                            </div>
                            <img src="<?php the_sub_field('logo') ?>" class="home-product__logo" />
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col--no-padding <?php if ($i %2 == 1):?>order-md-1<?php endif;?>">
                    <img src="<?php the_sub_field('image'); ?>" class="home-product__image"/>
                </div>
            </div>
        <?php $i++; endwhile; ?>
        </div>
    </section>
    <?php endif; ?>
    <!-- END PRODUCTS -->

    <!-- STOCKIST -->
    <section class="home-stockist text-center" style="background-image: radial-gradient(65.95% 65.95% at 50% 40.46%, rgba(0, 0, 0, 0.92) 0%, rgba(0, 0, 0, 0.21) 100%), url(<?php the_field('stockist_background_image'); ?>)">
        <div class="home-stockist__wrap">
            <img src="<?php the_field('stockist_title_image') ?>" />
            <h2 class="home-stockist__title font--chunkfive-print">
                <?php the_field('stockist_title') ?>
            </h2>
            <div class="home-stockist__lead">
                <?php the_field('stockist_lead'); ?>
            </div>
            <a href="<?php the_field('stockist_button_url') ?>" class="btn btn-transparent home-stockist__button font--chunkfive">
                <?php the_field('stockist_button_text'); ?>
            </a>
        </div>
    </section>
    <!-- END STOCKIST -->

    <!-- BLOG -->
    <?php
        $number_of_posts = get_field('blog_number_of_posts') ?: 5;
        $recent_posts = new WP_Query(['posts_per_page' => $number_of_posts]);
        $read_more_text = get_field('blog_read_more_text');
        if ($recent_posts->have_posts()):
    ?>
    <section class="home-blog text-center">
        <div class="container">
            <h2 class="home-blog__title font--chunkfive-print">
                <?php the_field('blog_title') ?>
            </h2>
            <div class="home-blog__lead">
                <?php the_field('blog_lead'); ?>
            </div>

            <div class="home-blog__posts text-left js-blog-posts owl-carousel owl-theme">
                <?php while( $recent_posts->have_posts() ): $recent_posts->the_post(); ?>
                    <div class="item home-blog__post">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <h4>
                            <a href="<?php the_permalink(); ?>" class="font--chunkfive">
                                <?php the_title(); ?>
                            </a>
                        </h4>
                        <a href="<?php the_permalink(); ?>" class="home-blog__post__read-more">
                            <?php echo $read_more_text; ?>
                        </a>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <div class="item home-blog__post">
                    <a href="<?php the_field('blog_see_all_url'); ?>" class="home-blog__post__see-all link--underline link--underline--white">
                        <span>
                            <?php the_field('blog_see_all_text'); ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <?php endif; ?>
<?php
get_footer();
