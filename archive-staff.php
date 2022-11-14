<?php get_header(); ?>

<main>

    <!-- mainVisual -->
    <div class="mainVisual _staff js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">Cat Staff</p>
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <!-- container -->
    <div class="container">

        <!-- section -->
        <section class="section">

            <!-- pageLead -->
            <div class="pageLead js-scroll-animation-trigger is-fade_in">
                <p>Cat Cafe Ricoは、猫スタッフの里親となってくれる方を募集しています。<br>
                    どのねこスタッフも素敵な子たちばかりです。
                </p>
            </div><!-- /.pageLead -->

            <!-- lvHeading -->
            <h1 class="lv1Heading js-scroll-animation-trigger is-fade_in">
                <span class="lv1Heading__main">ねこスタッフ紹介</span>
                <span class="lv1Heading__sub">Cat Staff</span>
            </h1>

            <?php if ( have_posts() ) : ?>

                <!-- staffList -->
                <ul class="staffList">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <li class="staffList__item js-scroll-animation-trigger is-fade_in">

                            <!-- catStaff -->
                            <div class="catStaff">
                                <figure class="catStaff__thumb">
                                    <?php
                                    $pic = get_field( 'pic' );
                                    $url = $pic[ 'sizes' ][ 'medium' ];
                                    ?>
                                    <img src="<?php echo $url; ?>" alt="cat cafe ricoの猫店員の写真">
                                </figure>
                                <div class="catStaff__body">
                                    <h2 class="catStaff__name"><?php the_title(); ?></h2>
                                    <p class="catStaff__sex"><?php echo get_field( 'sex' ); ?></p>
                                </div><!-- /.catStaff__body -->
                            </div><!-- /.catStaff -->

                        </li>

                    <?php endwhile; ?>

                </ul>

            <?php endif; ?>

            <?php get_template_part( './template-parts/pager' ); ?>

        </section>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>