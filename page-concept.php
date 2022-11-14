<?php get_header(); ?>

<main>

    <!-- mainVisual -->
    <div class="mainVisual _concept js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">What is Rico</p><!-- /.mainvisual__title -->
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <!-- container -->
    <div class="container">

        <!-- section -->
        <section class="section">

            <!-- lv1Heading -->
            <h1 class="lv1Heading">
                <span class="lv1Heading__main">Cat Cafe Ricoとは?</span>
                <span class="lv1Heading__sub">What is Rico</span>
            </h1><!-- /.lv1Heading -->

            <!-- concept -->
            <div class="concept">
                <p>人の身近な存在であり、その可愛らしい外見からペットとして人気のある猫</p>
                <p>しかし、近年は人の身勝手な理由で捨てられ、野良猫となってしまうことを発端として様々な問題が発生してます。</p>
                <p>Cat Cafe Ricoは、様々な理由で保護された猫たちをスタッフとして共に働き、人と猫との出会いの場を提供して、猫たちの新たな居場所を作りたいという思いからオープンしました。</p>

                <!-- imageBox -->
                <div class="imageBox">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_text_01@2x.jpg" alt="ベットの上に横になって気持ちよさそうに眠っている猫の画像">
                </div><!-- /.imageBox -->

                <p>捨てられた猫たちは、新しい居場所を必要としています。</p>
                <p>新しく猫の家族を迎え入れたいと思ったとき、保護猫を選択肢に入れてみるのはいかがでしょうか？</p>
            </div><!-- /.concept -->
        </section>

        <section class="section">

            <!-- mobileCta -->
            <div class="mobileCta _enjoy">
                <div class="mobileCta__inner">
                    <div class="mobileCta__contents">
                        <h2 class="mobileCta__title">Cat Cafe Ricoの楽しみ方</h2>
                        <a href="<?php echo esc_url( home_url( 'enjoy' ) ); ?>" class="btn btn--transparent btn--next">詳しく知りたい</a><!-- /.btn -->
                    </div><!-- /.mobileCta__contents -->
                </div><!-- /.mobileCta__inner -->
            </div><!-- /.mobileCta -->

            <!-- mobileCta -->
            <div class="mobileCta _staff">
                <div class="mobileCta__inner">
                    <div class="mobileCta__contents">
                        <h2 class="mobileCta__title">ねこスタッフ紹介</h2>
                        <a href="<?php echo esc_url( home_url( 'staff' ) ); ?>" class="btn btn--transparent btn--next">詳しく知りたい</a><!-- /.btn -->
                    </div><!-- /.mobileCta__contents -->
                </div><!-- /.mobileCta__inner -->
            </div><!-- /.mobileCta -->

            <!-- tabCta -->
            <div class="tabCta">
                <div class="tabCta__inner">
                    <div class="tabCta__item _enjoy">
                        <div class="tabCta__contents">
                            <h2 class="tabCta__title">Cat Cafe Ricoの楽しみ方</h2>
                            <div class="mobileCta__btn">
                                <a href="<?php echo esc_url( home_url( 'enjoy' ) ); ?>" class="btn btn--transparent btn--arrow ">詳しく知りたい</a><!-- /.btn -->
                            </div><!-- /.mobileCta__btn -->
                        </div><!-- /.mobileCta__contents -->
                    </div>
                    <div class="tabCta__item _staff">
                        <div class="tabCta__contents">
                            <h2 class="tabCta__title">ねこスタッフ紹介</h2>
                            <div class="mobileCta__btn">
                                <a href="<?php echo esc_url( home_url( 'staff' ) ); ?>" class="btn btn--transparent btn--arrow ">詳しく知りたい</a><!-- /.btn -->
                            </div><!-- /.mobileCta__btn -->
                        </div><!-- /.mobileCta__contents -->
                    </div><!-- /.tabCta__item -->

                </div><!-- /.tabCta__inner -->
            </div><!-- /.tabCta -->

        </section>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>