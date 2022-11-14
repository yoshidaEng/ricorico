<?php get_header(); ?>

<main>

    <!-- heroSlide -->
    <ul class="heroSlide">
        <li class="heroSlide__item">
            <span></span>
        </li>
        <li class="heroSlide__item">
            <span></span>
        </li>
        <li class="heroSlide__item">
            <span></span>
        </li>
    </ul>

    <!-- scrollDown -->
    <div class="scrollDown"><span>scroll</span></div><!-- /.scrollDown -->

    <!-- container -->
    <div class="container">

        <!-- section -->
        <section class="section">

            <!-- brokenGrid -->
            <div class="brokenGrid js-scroll-animation-trigger is-fade_in">
                <div class="brokenGrid__body">
                    <h2 class="brokenGrid__title">Cat Cafe Ricoの楽しみ方</h2>
                    <p class="brokenGrid__text">かわいい猫スタッフと遊んだり、友達同士おしゃべりしたり、楽しい時間をお過ごしください。</p>
                    <div class="brokenGrid__btn">
                        <a href="<?php echo esc_url( home_url( '/enjoy' ) ); ?>" class="btn btn--round btn--next">詳しく知りたい</a>
                    </div><!-- /.brokenGrid__btn -->
                </div><!-- /.brokenGrid__body -->
                <figure class="brokenGrid__ph">
                    <image src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_brokenGrid_01@2x.jpg" alt="二匹の猫が足元に近づき、見上げてくる画像">
                </figure>
            </div><!-- /.brokenGrid -->

        </section>

        <!-- section -->
        <section class="section">

            <!-- brokenGrid -->
            <div class="brokenGrid _reverse js-scroll-animation-trigger is-fade_in">
                <div class="brokenGrid__body">
                    <h2 class="brokenGrid__title">猫スタッフ紹介</h2>
                    <p class="brokenGrid__text">Cat Cafe Ricoのかわいい猫スタッフたちを紹介します。ぜひいっしょに遊んで癒されて下さい。</p>
                    <div class="brokenGrid__btn">
                        <a href="<?php echo esc_url( home_url( '/staff' ) ); ?>" class="btn btn--round btn--next">詳しく知りたい</a>
                    </div><!-- /.brokenGrid__btn -->
                </div><!-- /.brokenGrid__body -->
                <figure class="brokenGrid__ph">
                    <image src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_brokenGrid_02@2x.jpg" alt="猫がふかふかのベッドの上でお腹を見せて横になっている画像">
                </figure>
            </div><!-- /.brokenGrid -->

        </section>

        <!-- section -->
        <section class="section">

            <!-- lvHeading -->
            <h2 class="lv2Heading">
                <span class="lv2Heading__main ">最新記事一覧</span>
            </h2>

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );

                $new_posts_query = new WP_Query( $args );
                if ( $new_posts_query->have_posts() ) :
            ?>

                <!-- verticalPosts -->
                <ul class="verticalPosts js-scroll-animation-trigger is-fade_in">
                    <?php while ( $new_posts_query->have_posts() ) : $new_posts_query->the_post(); ?>
                        <li class="verticalPosts__item">
                            <div class="verticalPosts__header">
                                <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>

                                <!-- tag -->
                                <span class="tag"><?php echo get_category_name(); ?></span>

                            </div><!-- /.verticalPosts__header -->
                            <a href="<?php the_permalink(); ?>" class="verticalPosts__link">

                                <?php
                                    if ( mb_strlen( $post->post_title, 'UTF-8' ) > 50 ) {
                                        $title = mb_substr( $post->post_title, 0, 40, 'UTF-8' );
                                        echo $title . '……';
                                    } else {
                                        echo $post->post_title;
                                    }
                                ?>

                            </a>
                        </li>

                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                </ul><!-- /.verticalPosts -->

            <?php endif; ?>

        </section>

        <!-- section -->
        <section class="section">

            <!-- lvHeading -->
            <h2 class="lv2Heading js-scroll-animation-trigger is-fade_in">
                <span class="lv2Heading__main ">アクセス</span>
            </h2>

            <?php echo get_template_part( './template-parts/access' ); ?>

        </section><!-- /.section -->

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>



