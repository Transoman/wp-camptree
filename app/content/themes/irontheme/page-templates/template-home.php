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

    <?php elseif ( get_row_layout() == 'benefits' ): ?>

      <section class="benefits">
        <div class="container">

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

          <?php if (have_rows( 'list' )): ?>
            <div class="advantages-list advantages-list--text-left row">
              <?php while (have_rows( 'list' )): the_row(); ?>
                <div class="advantages-list__item">
                  <?php $icon = get_sub_field( 'icon' );
                  if ($icon): ?>
                    <img src="<?php echo $icon; ?>" width="90" alt="" class="advantages-list__icon">
                  <?php endif; ?>

                  <h3 class="advantages-list__title"><?php the_sub_field( 'title' ); ?></h3>
                  <?php the_sub_field( 'description' ); ?>

                </div>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

          <img src="<?php echo THEME_URL; ?>/images/general/benefits-bg.svg" class="benefits__bg" alt="">
          <img src="<?php echo THEME_URL; ?>/images/general/reviews-bg-2.svg" class="benefits__bg-2" alt="">

        </div>
      </section>

    <?php elseif ( get_row_layout() == 'faq' ): ?>

    <?php $faqs = get_any_post( 'faq', -1 );

      if ($faqs->have_posts()): ?>
        <section class="faq">
          <div class="container">
            <?php $title = get_sub_field( 'title' );

            if ($title): ?>
              <h2 class="section-title text-center"><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="faq-list row">
              <?php while ($faqs->have_posts()): $faqs->the_post(); ?>
                <div class="faq-list__item">
                  <h3 class="faq-list__title">
                    <?php the_title(); ?>
                    <span class="faq-list__toggle"><?php ith_the_icon( 'arrow-down' ); ?></span>
                  </h3>
                  <div class="faq-list__content"><?php the_content(); ?></div>
                </div>
              <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <img src="<?php echo THEME_URL; ?>/images/general/faq-bg.svg" class="faq__bg" alt="">

          </div>
        </section>
      <?php endif; ?>

    <?php elseif ( get_row_layout() == 'cta' ): ?>

      <?php $title = get_sub_field( 'title' );
      $descr = get_sub_field( 'description' );
      $btn = get_sub_field( 'button' );

      if ($title): ?>
        <section class="cta">
          <div class="container">
            <div class="row">
              <div class="cta__content">
                <h2 class="section-title"><?php echo $title; ?></h2>

                <?php if ($descr): ?>
                  <p class="cta__descr"><?php echo $descr; ?></p>
                <?php endif; ?>

                <?php if ($btn['url']): ?>
                  <a href="<?php echo esc_url( $btn['url'] ); ?>" class="btn"<?php echo $btn['target'] ? ' target="'. $btn['target'] .'"' : '' ;?>><?php echo $btn['title']; ?></a>
                <?php endif; ?>
              </div>
            </div>

            <img src="<?php echo THEME_URL; ?>/images/general/cta-bg.svg" class="cta__bg" alt="">
            <img src="<?php echo THEME_URL; ?>/images/general/reviews-bg-3.svg" class="cta__bg-2" alt="">

          </div>
        </section>
      <?php endif; ?>

    <?php elseif ( get_row_layout() == 'form' ): ?>

      <section class="request">
        <div class="container">

          <div class="request__wrap">
            <div class="section-head">
              <?php $title = get_sub_field( 'title' );
              $descr = get_sub_field( 'description' );

              if ($title): ?>
                <h2 class="section-title"><?php echo $title; ?></h2>
              <?php endif; ?>

              <?php if ($descr): ?>
                <p class="section-descr"><?php echo $descr; ?></p>
              <?php endif; ?>
            </div>

            <div class="request__form">
              <div id="mc_embed_signup">
                <form action="" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                  <div id="mc_embed_signup_scroll">
                    <div class="request__form-row">
                      <div class="mc-field-group form-group">
                        <label for="mce-FNAME" class="form-label">Your full name:</label>
                        <input type="text" value="" name="FNAME" class="form-field" id="mce-FNAME" placeholder="Enter your name">
                      </div>
                      <div class="mc-field-group form-group">
                        <label for="mce-EMAIL" class="form-label">Your e-mail:<span class="asterisk"></span></label>
                        <input type="email" value="" name="EMAIL" class="required email form-field" id="mce-EMAIL" placeholder="Enter your email">
                      </div>
                      <div class="mc-field-group form-group">
                        <label for="mce-MMERGE2" class="form-label">Camp name:</label>
                        <input type="text" value="" name="MMERGE2" class="form-field" id="mce-MMERGE2" placeholder="Enter your camp name">
                      </div>
                      <div class="form-group form-group--btn">
                        <input type="submit" value="send a request" name="subscribe" id="mc-embedded-subscribe" class="btn">
                      </div>
                    </div>

                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0d5082c3287b75c366bb2239b_0dc27f002f" tabindex="-1" value=""></div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
          <script type='text/javascript'>(function($){window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

          <img src="<?php echo THEME_URL; ?>/images/general/request-bg.svg" class="request__bg" alt="">
          <img src="<?php echo THEME_URL; ?>/images/general/request-bg-2.svg" class="request__bg-2" alt="">

        </div>
      </section>
    
    <?php endif;

  endwhile;
endif;
?>

<?php get_footer();