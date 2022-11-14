<?php get_header(); ?>

<main>

    <!-- mainVisual -->
    <div class="mainVisual _thanks js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">Thanks</p>
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <!-- container -->
    <div class="container">

        <!-- section -->
        <section class="section">

            <!-- lv1Heading -->
            <h1 class="lv1Heading">
                <span class="lv1Heading__main">送信完了</span>
                <span class="lv1Heading__sub">thanks</span>
            </h1><!-- /.lv1Heading -->

            <!-- message -->
            <div class="message">
                <p class="message__title">お問い合わせありがとうございました。</p>
                <div class="message__text">
                    <p>お問い合わせ内容を確認させていただき、近日中に返信させていただきます。</p>
                    <p>なお、お問い合わせ内容によっては返信をいたしかねる場合もございますのでご了承下さい。</p>
                </div><!-- /.message__text -->
            </div><!-- /.message -->

            <!-- btn -->
            <div class="btnCenter">
                <a href="" class="btn btn--square btn--back">TOPページへ戻る</a>
            </div><!-- /.btnCenter -->

        </section>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>