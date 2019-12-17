<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php
if ( have_rows('home_layout') ):

  while ( have_rows('home_layout') ) : the_row();

    if ( get_row_layout() == 'hero' ): ?>

      <section class="hero">
        <div class="container">
          <div class="row">

            <div class="hero__left">
              <?php $title_1 = get_sub_field( 'title_1' );
              $title_2 = get_sub_field( 'title_2' );
              $descr = get_sub_field( 'description' );

              if ($title_1): ?>
                <p class="hero__suptitle"><?php echo $title_1; ?></p>
              <?php endif; ?>
              <?php if ($title_2): ?>
                <h1 class="hero__title"><?php echo $title_2; ?></h1>
              <?php endif; ?>

              <?php if ($descr): ?>
              <div class="hero__descr">
                <?php echo $descr; ?>
              </div>
              <?php endif; ?>

              <a href="#" class="btn">Get a Price</a>

            </div>

            <?php $video_link = get_sub_field( 'video_link' );

            if ($video_link): ?>
              <div class="hero__video">
                <span class="hero__video-cta">Watch <br>Our Video</span>
                <a href="<?php echo esc_url( $video_link ); ?>" data-fancybox class="hero__video-link">
                  <img src="<?php echo THEME_URL;?>/images/content/hero-video-img.png" class="hero__video-img" alt="">
                  <div class="btn-play">Play</div>
                </a>
              </div>
            <?php endif; ?>

          </div>

          <img src="<?php echo THEME_URL; ?>/images/general/hero-bg.svg" width="1110" class="hero__bg" alt="">

        </div>
      </section>

    <?php elseif( get_row_layout() == 'advantages' ): ?>

      <?php if (have_rows( 'list' )): ?>
        <section class="advantages">
          <div class="container">
            
            <div class="advantages-list row">
              <?php while (have_rows( 'list' )): the_row(); ?>
                <div class="advantages-list__item">
                  <?php $icon = get_sub_field( 'icon' );
                  if ($icon): ?>
                    <img src="<?php echo $icon; ?>" width="80" alt="" class="advantages-list__icon">
                  <?php endif; ?>

                  <h3 class="advantages-list__title"><?php the_sub_field( 'title' ); ?></h3>
                  <?php the_sub_field( 'description' ); ?>

                </div>
              <?php endwhile; ?>
            </div>
            
          </div>
        </section>
      <?php endif; ?>

    <?php elseif( get_row_layout() == 'partners' ): ?>

      <section class="partners">
        <div class="container">
          <div class="row">
            <div class="partners__left">
              <div class="section-head">
                <?php $title = get_sub_field( 'title' );
                $subtitle = get_sub_field( 'subtitle' );

                if ($title): ?>
                  <h2 class="section-title"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($subtitle): ?>
                  <h3 class="section-subtitle"><?php echo $subtitle; ?></h3>
                <?php endif; ?>
              </div>

            </div>

            <?php if (have_rows( 'list' )): ?>
              <div class="partners__right">
                <div class="partners-list">
                  <?php while (have_rows( 'list' )): the_row(); ?>
                    <div class="partners-list__item">
                      <?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>

          <img src="<?php echo THEME_URL; ?>/images/general/partners-bg.svg" class="partners__bg" alt="">

        </div>
      </section>

    <?php elseif( get_row_layout() == 'сompanions' ): ?>

      <section class="сompanions">
        <div class="container">
          <?php $title = get_sub_field( 'title' );
          $subtitle = get_sub_field( 'subtitle' );

          if ($title): ?>
            <h2 class="section-title text-center"><?php echo $title; ?></h2>
          <?php endif; ?>

          <?php if (have_rows( 'list' )): ?>
            <div class="сompanions-list row">
              <?php while (have_rows( 'list' )): the_row(); ?>
              <div class="сompanions-list__item">
                <?php echo wp_get_attachment_image( get_sub_field( 'logo' ), 'full' ); ?>
              </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <?php if ($subtitle): ?>
            <h3 class="section-subtitle text-center"><?php echo $subtitle; ?></h3>
          <?php endif; ?>

        </div>
      </section>

    <?php elseif( get_row_layout() == 'referrals' ): ?>

      <section class="referrals">
        <div class="container">
          <div class="row">
            <?php $video = get_sub_field( 'video_link' );

            if ($video): ?>
              <div class="referrals__left">
                <a href="<?php echo esc_url( $video_link ); ?>" data-fancybox class="referrals__video">
                  <img src="<?php echo THEME_URL;?>/images/content/referrals-video-img.jpg" class="referrals__video-img" alt="">
                  <div class="btn-play">Play</div>
                </a>
              </div>
            <?php endif; ?>

            <div class="referrals__right">
              <?php $title_1 = get_sub_field( 'title_1' );
              $title_2 = get_sub_field( 'title_2' );

              if ($title_1): ?>
                <p class="referrals__suptitle"><?php echo $title_1; ?></p>
              <?php endif; ?>
              <?php if ($title_2): ?>
                <h2 class="referrals__title"><?php echo $title_2; ?></h2>
              <?php endif; ?>
            </div>
          </div>

          <img src="<?php echo THEME_URL; ?>/images/general/referrals-bg.svg" class="referrals__bg" alt="">
          <img src="<?php echo THEME_URL; ?>/images/general/referrals-bg-2.svg" class="referrals__bg-2" alt="">

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'reviews' ): ?>

    <?php $reviews = get_any_post( 'reviews', -1);

    if ($reviews->have_posts()): ?>
      <section class="reviews">
        <div class="container">
          <div class="row">

            <div class="reviews__left">
              <?php $title = get_sub_field( 'title' );

              if ($title): ?>
                <h2 class="section-title"><?php echo $title; ?></h2>
              <?php endif; ?>

              <div class="slider-btns">
                <div class="swiper-button-prev"><?php ith_the_icon( 'arrow-left' ); ?></div>
                <div class="swiper-button-next"><?php ith_the_icon( 'arrow-right' ); ?></div>
              </div>
            </div>

            <div class="reviews__right">
              <div class="reviews-slider swiper-container">
                <div class="swiper-wrapper">
                  <?php while ($reviews->have_posts()): $reviews->the_post(); ?>
                    <div class="reviews-slider__item swiper-slide">
                      <div class="reviews-slider__inner">
                        <div class="reviews-slider__content"><?php the_content(); ?></div>
                        <div class="reviews-slider__info">
                          <div class="reviews-slider__photo">
                            <?php if (get_the_post_thumbnail()): ?>
                              <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                              <img src="<?php echo THEME_URL; ?>/images/general/user-placeholder.jpg" alt="">
                            <?php endif; ?>
                          </div>
                          <div class="reviews-slider__data">
                            <p class="reviews-slider__name"><?php the_title(); ?></p>
                            <?php $position = get_field( 'position' );

                            if ($position): ?>
                              <span class="reviews-slider__position"><?php echo $position; ?></span>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; wp_reset_postdata(); ?>
                </div>
              </div>
            </div>

          </div>

          <img src="<?php echo THEME_URL; ?>/images/general/reviews-bg.svg" class="reviews__bg" alt="">
          <img src="<?php echo THEME_URL; ?>/images/general/reviews-bg-2.svg" class="reviews__bg-2" alt="">
          <img src="<?php echo THEME_URL; ?>/images/general/reviews-bg-3.svg" class="reviews__bg-3" alt="">

        </div>
      </section>
    <?php endif; ?>

    <?php elseif ( get_row_layout() == 'steps_work' ): ?>

      <section class="steps">
        <div class="container">

          <div class="section-head">
            <?php $title = get_sub_field( 'title' );
            $descr = get_sub_field( 'text' );

            if ($title): ?>
              <h2 class="section-title text-center"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($descr): ?>
              <p class="section-descr text-center"><?php echo $descr; ?></p>
            <?php endif; ?>
          </div>

          <?php if (have_rows( 'list' )): ?>
            <div class="steps-list row">
              <?php $i = 1; while (have_rows( 'list' )): the_row(); ?>
              <div class="steps-list__item">
                <div class="steps-list__icon-wrap">
                  <div class="steps-list__icon-inner">
                    <img src="<?php the_sub_field( 'icon' ); ?>" class="steps-list__icon" height="52" alt="">
                    <span class="steps-list__number"><?php echo $i++; ?></span>
                  </div>
                </div>
                <?php the_sub_field( 'description' ); ?>
              </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

        </div>
      </section>
    
    <?php endif;

  endwhile;
endif;
?>

<?php get_footer();