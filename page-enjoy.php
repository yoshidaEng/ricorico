<?php get_header(); ?>

<main>

    <!-- mainVisual -->
    <div class="mainVisual _enjoy js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">How to enjoy</p>
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <!-- container -->
    <div class="container">

        <!-- section -->
        <section class="section">

            <!-- pageLead -->
            <div class="pageLead">
                <p>Cat Cafe Ricoは、猫スタッフと一緒に働きながら里親探しを行う猫カフェです。<br>
                    猫スタッフに癒されながら、ゆっくりとした時をお過ごし下さい。
                </p>
            </div><!-- /.pageLead -->

            <!-- lv1Heading -->
            <h1 class="lv1Heading js-scroll-animation-trigger is-fade_in">
                <span class="lv1Heading__main">Cat Cafe Ricoの楽しみ方</span>
                <span class="lv1Heading__sub">How to Enjoy</span>
            </h1><!-- /.lv1Heading -->

            <!-- brokenGrid -->
            <div class="brokenGrid js-scroll-animation-trigger is-fade_in">
                <div class="brokenGrid__body">
                    <h2 class="brokenGrid__title">猫と遊ぶ</h2>
                    <p class="brokenGrid__text">
                        猫用のおもちゃ、お菓子をご用意しております。<br>
                        猫たちと楽しいひとときをお過ごし下さい。
                    </p><!-- /.brokenGrid__text -->
                </div><!-- /.brokenGrid__body -->
                <figure class="brokenGrid__ph">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_brokenGrid_03@2x.jpg" alt="お腹を向けて横たわっている猫の頬を人差し指で優しく撫でている画像">
                </figure><!-- /.brokenGrid__ph -->
            </div><!-- /.brokenGrid -->

            <!-- brokenGrid -->
            <div class="brokenGrid _reverse js-scroll-animation-trigger is-fade_in">
                <div class="brokenGrid__body">
                    <h2 class="brokenGrid__title">猫と本を読む</h2>
                    <p class="brokenGrid__text">
                        雑誌や漫画など多数ご用意しております。<br>
                        ゆっくりとお過ごし下さい。
                    </p><!-- /.brokenGrid__text -->
                </div><!-- /.brokenGrid__body -->
                <figure class="brokenGrid__ph">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_brokenGrid_04@2x.jpg" alt="本の横で猫が座り、見上げている画像">
                </figure><!-- /.brokenGrid__ph -->
            </div><!-- /.brokenGrid -->

            <!-- brokenGrid -->
            <div class="brokenGrid js-scroll-animation-trigger is-fade_in">
                <div class="brokenGrid__body">
                    <h2 class="brokenGrid__title">お仕事や勉強に利用する</h2>
                    <p class="brokenGrid__text">
                        ワークスペースやWi-Fiをご用意しております。
                        いつもの勉強や仕事も猫といっしょならさらにはかどるかも
                    </p><!-- /.brokenGrid__text -->
                </div><!-- /.brokenGrid__body -->
                <figure class="brokenGrid__ph">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/build/images/image_brokenGrid_05@2x.jpg" alt="キーボードをタイピングしている腕に黒猫が前足を乗せている画像">
                </figure><!-- /.brokenGrid__ph -->
            </div><!-- /.brokenGrid -->

        </section>

        <!-- section -->
        <section class="section section--bg">

            <!-- lvHeading -->
            <h2 class="lv2Heading">
                <span class="lv2Heading__main js-scroll-animation-trigger is-fade_in">料金システム</span>
            </h2><!-- /.lv2Heading -->

            <!-- priceList -->
            <ol class="priceList js-scroll-animation-trigger is-fade_in">
                <li class="priceList__item">
                    <div class="priceList__box">
                        <div class="priceList__heading">
                            <?php $course_01 = get_field( 'course_01' ); ?>
                            <h3 class="priceList__title"><?php echo $course_01[ 'course_name'] ?></h3>
                        </div><!-- /.priceList__heading -->
                        <div class="priceList__body">
                            <p class="priceList__price"><?php echo $course_01[ 'course_price' ] ?></p>
                            <p class="priceList__text">※延長料金10分ごと220円<br>※ドリンクバー代300円(税込)は別途請求<br>※猫のおやつ代150円(税込)は別途請求</p>
                        </div><!-- /.priceList__body -->
                    </div><!-- /.priceList__box -->
                </li>
                <li class="priceList__item">
                    <div class="priceList__box">
                        <div class="priceList__heading">
                            <?php $course_02 = get_field( 'course_02' ); ?>
                            <h3 class="priceList__title"><?php echo $course_02[ 'course_name'] ?></h3>
                        </div><!-- /.priceList__heading -->
                        <div class="priceList__body">
                            <p class="priceList__price"><?php echo $course_02[ 'course_price' ] ?></p>
                            <p class="priceList__text">※延長料金10分ごと220円<br>※ドリンクバー代300円(税込)は別途請求<br>※猫のおやつ代150円(税込)は別途請求</p>
                        </div><!-- /.priceList__body -->
                    </div><!-- /.priceList__box -->
                </li>
                <li class="priceList__item">
                    <div class="priceList__box">
                        <div class="priceList__heading">
                            <?php $course_03 = get_field( 'course_03' ); ?>
                            <h3 class="priceList__title"><?php echo $course_03[ 'course_name'] ?></h3>
                        </div><!-- /.priceList__heading -->
                        <div class="priceList__body">
                            <p class="priceList__price"><?php echo $course_03[ 'course_price' ] ?></p>
                            <p class="priceList__text">※延長料金10分ごと220円<br>※ドリンクバー代300円(税込)は別途請求<br>※猫のおやつ代150円(税込)は別途請求</p>
                        </div><!-- /.priceList__body -->
                    </div><!-- /.priceList__box -->
                </li>
                <li class="priceList__item">
                    <div class="priceList__box">
                        <div class="priceList__heading">
                            <?php $course_04 = get_field( 'course_04' ); ?>
                            <h3 class="priceList__title"><?php echo $course_04[ 'course_name' ] ?></h3>
                        </div><!-- /.priceList__heading -->
                        <div class="priceList__body">
                            <p class="priceList__price"><?php echo $course_04[ 'course_price' ] ?></p>
                            <p class="priceList__text">※延長料金10分ごと220円<br>※ドリンクバー代300円(税込)は別途請求<br>※猫のおやつ代150円(税込)は別途請求</p>
                        </div><!-- /.priceList__body -->
                    </div><!-- /.priceList__box -->
                </li>
            </ol>

        </section>

        <!-- section -->
        <section class="section">

            <!-- lvheading -->
            <h2 class="lv2Heading js-scroll-animation-trigger is-fade_in">
                <span class="lv2Heading__main">よくあるご質問</span>
            </h2><!-- /.lv2Heading -->

            <!-- accordion faq -->
            <div class="accordion js-accordion faq js-scroll-animation-trigger is-fade_in">

                <!-- accordionList -->
                <dl class="accordionList js-accordionList faq__list" role="tablist">
                    <dt class="accordionList__trigger js-accordionTrigger faq__question"
                        aria-label="このタイトルに関連するタブを開く"
                        role="tab" aria-expanded="false"
                        aria-controls="panel-1"
                        id="tab-1"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-1" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-1">
                        <!-- paddingはfaq__answerに指定 -->
                        <div class="faq__answer">
                            <span class="faq__aIcon">A</span>
                            <div class="faq__aText">
                                <p>回答テキストが入ります。</p>
                            </div><!-- /.faq__aText -->
                        </div><!-- /.faq__answer -->
                    </dd>
                </dl>

                <!-- accordionList -->
                <dl class="accordionList js-accordionList faq__list" role="tablist">
                    <dt class="accordionList__trigger js-accordionTrigger faq__question"
                        aria-label="このタイトルに関連するタブを開く"
                        role="tab" aria-expanded="false"
                        aria-controls="panel-2"
                        id="tab-2"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-2" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-2">
                        <!-- paddingはfaq__answerに指定 -->
                        <div class="faq__answer">
                            <span class="faq__aIcon">A</span>
                            <div class="faq__aText">
                                <p>回答テキストが入ります。</p>
                            </div><!-- /.faq__aText -->
                        </div><!-- /.faq__answer -->
                    </dd>
                </dl>

                <!-- accordionList -->
                <dl class="accordionList js-accordionList faq__list" role="tablist">
                    <dt class="accordionList__trigger js-accordionTrigger faq__question"
                        aria-label="このタイトルに関連するタブを開く"
                        role="tab" aria-expanded="false"
                        aria-controls="panel-3"
                        id="tab-3"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-2" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-3">
                        <!-- paddingはfaq__answerに指定 -->
                        <div class="faq__answer">
                            <span class="faq__aIcon">A</span>
                            <div class="faq__aText">
                                <p>回答テキストが入ります。</p>
                            </div><!-- /.faq__aText -->
                        </div><!-- /.faq__answer -->
                    </dd>
                </dl>

                <!-- accordionList -->
                <dl class="accordionList js-accordionList faq__list" role="tablist">
                    <dt class="accordionList__trigger js-accordionTrigger faq__question"
                        aria-label="このタイトルに関連するタブを開く"
                        role="tab" aria-expanded="false"
                        aria-controls="panel-4"
                        id="tab-4"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-2" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-4">
                        <!-- paddingはfaq__answerに指定 -->
                        <div class="faq__answer">
                            <span class="faq__aIcon">A</span>
                            <div class="faq__aText">
                                <p>回答テキストが入ります。</p>
                            </div><!-- /.faq__aText -->
                        </div><!-- /.faq__answer -->
                    </dd>
                </dl>

                <!-- btn -->
                <div class="btnCenter">
                    <a href="" class="btn btn--round btn--large btn--next js-scroll-animation-trigger is-fade_in">その他のご質問はこちら</a><!-- /.btn -->
                </div><!-- /.btnCenter-->

            </div><!-- /.accordion -->

        </section>

        <!-- <section> -->
        <section class="section">

            <!-- lvHeading -->
            <h2 class="lv2Heading">
                <span class="lv2Heading__main">アクセス</span>
            </h2><!-- /.lv2Heading -->

            <?php echo get_template_part( './template-parts/access' ); ?>

        </section><!-- /.section -->

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>