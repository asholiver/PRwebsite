<?php

    $args = array( 'post_type' => 'bands', 'orderby' => 'title', 'order'   => 'ASC');
    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
?>

	<li id="post-<?php the_ID(); ?>" class="l-grid__item l-grid__item--4-col l-grid__item--12-col-phone l-grid__item--6-col-tablet">
        <div class="c-card">
            <a href="<?php the_field('band_url'); ?>" title="<?php the_title(); ?>" class="c-card__link">

                <div class="c-card__zoom-wrapper">
                    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                    <?php the_post_thumbnail('full', array( 'class' => 'c-card__image' )); ?>
                    <?php endif; ?>
                </div>

                <h3 class="c-card__title">
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

<?php endwhile; ?>

