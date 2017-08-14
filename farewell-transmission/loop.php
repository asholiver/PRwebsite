<section>

    <h1 class="tagline tagline--alt">Roster</h1>

    <ul class="l-grid l-grid--gutter-vertical-large l-grid--gutter-horizontal-large" style="margin-bottom: 2rem;">
    <?php

        $args = array( 'post_type' => 'bands', 'orderby' => 'title', 'order'   => 'ASC');
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();

            if ( !get_field('alumni')) : // Check if on roster ?>

            <li id="post-<?php the_ID(); ?>" class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone l-grid__item--6-col-tablet">
                <div class="c-card">
                    <a href="<?php the_field('band_url'); ?>" title="<?php the_title(); ?>" class="c-card__link">

                        <div class="c-card__zoom-wrapper">
                            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                            <?php the_post_thumbnail('full', array( 'class' => 'c-card__image' )); ?>
                            <?php endif; ?>
                        </div>

                        <h3 class="c-card__title" <?php if (strlen(get_the_title()) > 20) { ?>style="font-size: 11px"<?php } ?>>
                            <?php the_title(); ?>
                        </h3>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php the_field('facebook_link'); ?>">
                                <svg class="social-small social-small__facebook">
                                   <use xlink:href="#facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?php the_field('twitter_link'); ?>">
                                <svg class="social-small social-small__twitter">
                                   <use xlink:href="#twitter"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        <?php endif;

    endwhile; ?>

    </ul>
</section>

<section>

    <h1 class="tagline tagline--alt">Alumni</h1>

    <ul class="c-alumni-list">

    <?php while ( $loop->have_posts() ) : $loop->the_post();

        if ( get_field('alumni')) : // Check if alumni ?>

        <li id="alumni-post-<?php the_ID(); ?>" class="c-alumni-list__item">
            <?php the_title(); ?>
        </li>

        <?php endif;

    endwhile; ?>

    </ul>

</section>


