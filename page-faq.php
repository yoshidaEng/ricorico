<?php get_header(); ?>

<main>

    <!-- mainVisual -->
    <div class="mainVisual _faq js-observe-obj">
        <div class="mainVisual__inner">
            <p class="mainVisual__title">FAQ</p>
        </div><!-- /.mainVisual__inner -->
    </div><!-- /.mainVisual -->

    <?php get_template_part( './template-parts/breadcrumb' ); ?>

    <!-- container -->
    <div class="container">

        <!-- <section> -->
        <section class="section">

            <!-- lvHeading -->
            <h1 class="lv1Heading">
                <span class="lv1Heading__main">よくあるご質問</span>
                <span class="lv1Heading__sub">faq</span>
            </h1><!-- /.lv1Heading -->

            <!-- pageLead -->
            <div class="pageLead">
                <p>お客様から頂いたよくある質問をまとめました。<br>
                    こちらで解決しない場合はお問合せフォームをご利用ください。
                </p>
            </div><!-- /.pageLead -->

            <!-- accordion faq -->
            <div class="accordion js-accordion faq">

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
                    <dd  id="panel-3" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-3">
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
                    <dd  id="panel-4" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-4">
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
                        aria-controls="panel-5"
                        id="tab-5"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-5" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-5">
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
                        aria-controls="panel-6"
                        id="tab-6"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-6" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-6">
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
                        aria-controls="panel-7"
                        id="tab-7"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-7" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-7">
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
                        aria-controls="panel-8"
                        id="tab-8"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-8" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-8">
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
                        aria-controls="panel-9"
                        id="tab-9"
                        tabindex="0">
                        <span class="faq__qIcon">Q</span>
                        <span class="faq__qText">質問テキストが入ります。</span>
                        <span class="faq__action"></span>
                    </dt>
                    <dd  id="panel-9" class="accordionList__content js-accordionContent" role="tabpanel" aria-hidden="true" aria-labelledby="tab-9">
                        <!-- paddingはfaq__answerに指定 -->
                        <div class="faq__answer">
                            <span class="faq__aIcon">A</span>
                            <div class="faq__aText">
                                <p>回答テキストが入ります。</p>
                            </div><!-- /.faq__aText -->
                        </div><!-- /.faq__answer -->
                    </dd>
                </dl>

            </div><!-- /.accordion -->

        </section>

    </div><!-- /.container -->

</main>

<?php get_footer(); ?>