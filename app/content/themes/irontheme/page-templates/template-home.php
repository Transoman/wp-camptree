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
                <a href="<?php echo esc_url( $video_link ); ?>" class="hero__video-link">
                  <img src="<?php echo THEME_URL;?>/images/content/hero-video-img.png" class="hero__video-img" alt="">
                </a>
              </div>
            <?php endif; ?>

          </div>

          <img src="<?php echo THEME_URL; ?>/images/general/hero-bg.svg" width="1110" class="hero__bg" alt="">

        </div>
      </section>

    <?php elseif( get_row_layout() == 'download' ):
      $file = get_sub_field('file');
      // Do something...

    endif;

  endwhile;
endif;
?>

<?php get_footer();