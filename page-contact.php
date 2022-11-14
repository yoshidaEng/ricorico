<?php remove_filter( 'the_content', 'wpautop' ); ?>

<?php get_header(); ?>

<main>
    <!-- mainVisual -->
    <div class="mainVisual _contact js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">Contact</p><!-- /.mainvisual__title -->
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <div class="container _narrow">
        <section class="section">
            <!-- lv1Heading -->
            <h1 class="lv1Heading">
                <span class="lv1Heading__main">お問い合わせ</span>
                <span class="lv1Heading__sub">contact</span>
            </h1><!-- /.lv1Heading -->

            <!-- pageLead -->
            <div class="pageLead">
                <p>当店のお問い合わせについては、以下のフォームに内容を記載して送信ください。</p>
            </div><!-- /.pageLead -->

            <?php  if ( have_posts() ) :?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </section>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>