<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="container _narrow">
    <div class="postContents">
        <main class="postedArticle">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>">
                        <!-- postHeader -->
                        <div class="postHeader">
                            <time class="postHeader__date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y-m-d' ); ?></time>
                            <span class="tag">
                                <?php
                                    $category = get_the_category();
                                    echo $category[0]->cat_name;
                                ?>
                            </span>
                            <h1 class="postHeader__title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="postHeader__snsContents">
                                <div class="sns">
                                    <?php echo do_shortcode( '[socialBtns]' );  ?>
                                </div><!-- /.sns -->
                            </div><!-- /.postHeader__snsContents -->
                        </div><!-- /.postHeader -->

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="postEyecatch">
                                <?php the_post_thumbnail(); ?>
                            </div><!-- /.postEyecatch -->
                        <?php endif ?>

                        <!-- postBody -->
                        <div class="postBody">
                            <?php the_content(); ?>
                        </div><!-- /.postBody -->
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </main>
        <aside class="aside">
            <h2 class="aside__title">categories</h2>
            <ul class="catWidget">
                <?php
                    $args = array(
                        'parent' => 0,
                        'orderby' => 'term_oder',
                        'oder' => 'ASC',
                    );
                    $categories = get_categories($args);
                ?>
                <?php foreach ( $categories as $category ) : ?>
                    <li>
                        <a href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>

    <?php
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_next' => false,
            'type' => 'list'
        ));
    ?>

</div>

<?php get_footer(); ?>