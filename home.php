<?php get_header(); ?>

<main>

    <!-- mainVisual -->
    <div class="mainVisual _recent js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">Blog</p>
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <!-- container -->
    <div class="container">

        <!-- section -->
        <section class="section">

            <!-- lv1Heading -->
            <h1 class="lv1Heading js-scroll-animation-trigger is-fade_in">
                <span class="lv1Heading__main">ねこブログ</span>
                <span class="lv1Heading__sub">Blog</span>
            </h1><!-- /.lv1Heading -->

            <?php if ( have_posts() ) : ?>

                <!-- blogList -->
                <ul class="blogList">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <li class="blogList__item js-scroll-animation-trigger is-fade_in">
                            <a href="<?php the_permalink(); ?>" class="blogList__link">
                                <div class="blogList__content">
                                    <div class="blogList__body">
                                        <time class="blogList__date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>

                                        <!-- tag -->
                                        <span class="tag">
                                            <?php
                                                $categories = get_the_category();
                                                $cat = $categories[0];
                                                echo $cat->name
                                            ?>
                                        </span>

                                        <p class="blogList__title">
                                            <?php
                                                if ( mb_strlen($post->post_title, 'UTF-8') > 50 ) {
                                                    $title = mb_substr( $post->post_title, 0, 40, 'UTF-8' );
                                                    echo $title . '……';
                                                } else {
                                                    echo $post->post_title;
                                                }
                                            ?>
                                        </p>

                                        <?php if ( wp_is_mobile() ) : ?>
                                            <p class="blogList__text"></p><!-- /.blogList__text -->
                                        <?php else: ?>
                                            <p class="blogList__text"><?php echo get_the_excerpt(); ?></p><!-- /.blogList__text -->
                                        <?php endif; ?>

                                    </div><!-- /.blogList__body -->
                                    <div class="blogList__thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/noimage.jpg" alt="">
                                        <?php endif; ?>
                                    </div><!-- /.blogList__thumb -->
                                </div><!-- /.blogList__content -->
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php get_template_part( './template-parts/pager' ); ?>

        </section>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>